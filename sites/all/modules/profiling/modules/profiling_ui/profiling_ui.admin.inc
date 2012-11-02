<?php

/**
 * @file
 * Profiling UI settings.
 */

function profiling_ui_core_settings($form_state) {
  $form = array();

  $form['profiling_enabled'] = array(
    '#type' => 'checkbox',
    '#title' => t("Enable profiling"),
    '#description' => t("Check this option to start profiling! By unchecking this option, you disable profiling data collection, the profiling module will reduce his impact on performances but won't do any task anymore. This is like uninstalling the profiling module except you still get access to old profiling tracks for analysis."),
    '#default_value' => variable_get('profiling_enabled', FALSE), 
  );

  $form['dev_query'] = array(
    '#type' => 'checkbox',
    '#title' => t("Core query logging"),
    '#description' => t("By checking this option, you activate the core query logging facilities. Notice that this could have a non neglictable performance impact, but it will allow the profiling module to log number of queries ran during each timer lifetime."),
    '#default_value' => variable_get('dev_query', 0), 
  );

  $options = module_invoke_all('profiling_backend');
  $form['profiling_backend'] = array(
    '#title' => t("Backend"),
    '#type' => 'radios',
    '#options' => $options,
    '#default_value' => variable_get('profiling_backend', 'Profiling_Backend_Default'),
    '#description' => t("Modules can provide environment specific backend, such as Pinba based measures or any other external tool related backend. Backends can provide more or less information depending on their implementation.")
      . ' ' . t("Default backend has a low performance impact itself, and uses basic PHP API for time and memory measure and will work smoothly within all environments."),
  );

  $form = system_settings_form($form);

  $form['buttons']['clear'] = array(
    '#type' => 'submit',
    '#value' => t("Wipe out collected data"),
    '#validate' => array(),
    '#submit' => array('profiling_ui_core_settings_submit_clear'),
  );

  return $form;
}

/**
 * Submit handler for data wipe out button.
 */
function profiling_ui_core_settings_submit_clear($form, &$form_state) {
  db_query("DELETE FROM {profiling_timers}");
  db_query("DELETE FROM {profiling_request}");
  drupal_set_message(t("Emptied the collected timers table"));
}

/**
 * Hook configuration.
 */
function profiling_ui_core_settings_hooks($form_state) {
  $form = array();

  // Pseudo multistep handling.
  if (!isset($form_state['default_hooks'])) {
    $form_state['default_hooks'] = array('init', 'form_alter', 'footer');
  }

  // Append hook settings.
  $hooks = variable_get('profiling_hooks', array());
  $default_hooks = array_merge($hooks, $form_state['default_hooks']);
  ksort($default_hooks);

  $options = array();
  $settings = array();
  foreach ($default_hooks as $hook) {
    $options[$hook] = 'hook_' . $hook . '()';
    // Build up default values in checkbox.
    $settings[$hook] = in_array($hook, $hooks) ? $hook : 0;
  }

  $form['hooks'] = array(
    '#type' => 'checkboxes',
    '#title' => t("Profile those hooks"),
    '#options' => $options,
    '#default_value' => $settings,
  );

  $form['add'] = array(
    '#prefix' => '<div class="container-inline">',
    '#suffix' => '</div>',
  );
  $form['add']['hook_name'] = array(
    '#type' => 'textfield',
    '#size' => 32,
  );
  $form['add']['add_submit'] = array(
    '#type' => 'submit',
    '#value' => t("Add hook"),
    '#submit' => array('profiling_ui_core_settings_hooks_submit_add_hook'),
    '#validate' => array('profiling_ui_core_settings_hooks_validate_add_hook'),
  );

  $form['save_submit'] = array(
    '#type' => 'submit',
    '#value' => t("Save hook selection"),
    '#submit' => array('profiling_ui_core_settings_hooks_submit_save'),
    '#validate' => array(),
  );

  return $form;
}

function profiling_ui_core_settings_hooks_validate_add_hook($form, &$form_state) {
  // Proceed to any alteration first, name could be empty after removing the
  // hook_ prefix.
  if (substr($form_state['values']['hook_name'], 0, 5) == 'hook_') {
    $form_state['values']['hook_name'] = substr($form_state['values']['hook_name'], 5);
  }
  // Check hook name is valid and not empty.
  if (!preg_match('/^[a-zA-Z_0-9]+$/', $form_state['values']['hook_name'])) {
    form_set_error('hook_name', t("Hook name is invalid or empty"));
  }
  // Exclude some hooks.
  if (in_array($form_state['values']['hook_name'], array('menu', 'theme'))) {
    form_set_error('hook_name', t("Certain hooks cannot be watched because they need to return specific code in order for Drupal to work correctly."));
  }
}

/**
 * Add hook submit handler.
 */
function profiling_ui_core_settings_hooks_submit_add_hook($form, &$form_state) {
  $form_state['default_hooks'][] = $form_state['values']['hook_name'];
  $form_state['default_hooks'] = array_unique($form_state['default_hooks']);
  // Rebuild form and ensure it keeps our $form_state.
  $form_state['rebuild'] = TRUE;
}

/**
 * Save user settings.
 */
function profiling_ui_core_settings_hooks_submit_save($form, &$form_state) {
  $hooks = array();
  foreach ($form_state['values']['hooks'] as $hook => $enabled) {
    if ($enabled) {
      $hooks[] = $hook;
    }
  }
  variable_set('profiling_hooks', $hooks);
  $form_state['rebuild'] = FALSE;
}
