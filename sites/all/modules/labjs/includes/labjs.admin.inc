<?php
/**
 * @file
 *   LABjs module admin settings
 */

/**
 * Form for configuring the module.
 */
function labjs_admin_settings_form() {
  $form = array();

  $form['basic'] = array(
    '#type' => 'fieldset',
    '#title' => t('Basic settings'),
  );
  $form['basic']['labjs_enabled'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable LABjs loader'),
    '#default_value' => variable_get('labjs_enabled', TRUE),
  );
  $form['basic']['labjs_no_cdata'] = array(
    '#type' => 'checkbox',
    '#title' => t('Rewrite no-CDATA-escape JavaScript blocks'),
    '#description' => t('This option makes the rewrite more greedy and can cause more false detection.'),
    '#default_value' => variable_get('labjs_no_cdata', FALSE),
  );

  $form['advanced'] = array(
    '#type' => 'fieldset',
    '#title' => t('Advanced settings'),
  );
  $form['advanced']['labjs_exception_mode'] = array(
    '#type' => 'radios',
    '#title' => t('Exception mode'),
    '#default_value' => variable_get('labjs_exception_mode', 'whitelist'),
    '#options' => array(
      'blacklist' => t('Blacklist mode'),
      'whitelist' => t('Whitelist mode'),
    ),
  );
  $skip_variables = array('styles', 'scripts', 'zebra', 'id', 'directory', 'layout', 'head_title', 'base_path', 'front_page', 'head', 'body_classes');
  $included_variables = array('content', 'closure');
  $form['advanced']['labjs_exception_blacklist'] = array(
    '#type' => 'textarea',
    '#title' => t('If using blacklist mode, LABjs is disabled in the following regions/variables'),
    '#default_value' => variable_get('labjs_exception_blacklist', implode("\n", $skip_variables)),
  );
  $form['advanced']['labjs_exception_whitelist'] = array(
    '#type' => 'textarea',
    '#title' => t('If using whitelist mode, LABjs is only enabled in the following regions/variables'),
    '#default_value' => variable_get('labjs_exception_whitelist', implode("\n", $included_variables)),
  );

  $form['pages'] = array(
    '#type' => 'fieldset',
    '#title' => t('Page specific LABjs settings'),
    '#collapsible' => TRUE,
  );
  $form['pages']['labjs_pages_choice'] = array(
    '#type' => 'radios',
    '#title' => t('Enable LABjs on specific pages'),
    '#options' => array(t('Enable on every page except the listed pages.'), t('Enable on only the listed pages.')),
    '#default_value' => variable_get('labjs_pages_choice', 0),
  );
  $form['pages']['labjs_pages_list'] = array(
    '#type' => 'textarea',
    '#title' => t('Pages'),
    '#default_value' => variable_get('labjs_pages_list', ''),
    '#description' => t("Enter one page per line as Drupal paths. The '*' character is a wildcard. Example paths are %blog for the blog page and %blog-wildcard for every personal blog. %front is the front page.", array('%blog' => 'blog', '%blog-wildcard' => 'blog/*', '%front' => '<front>')),
  );

  return system_settings_form($form);
}