<?php
<<<<<<< HEAD

/**
 * @file
 * Webform module fieldset component.
 */

/**
 * Implements _webform_defaults_component().
=======
// $Id: fieldset.inc,v 1.4.2.7 2009/01/09 08:31:06 quicksketch Exp $

/**
 * @file
 *   Webform module fieldset component.
 */

/**
 * Create a default fieldset component.
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 */
function _webform_defaults_fieldset() {
  return array(
    'name' => '',
    'form_key' => NULL,
    'pid' => 0,
    'weight' => 0,
    'extra' => array(
<<<<<<< HEAD
      'title_display' => 0,
      'collapsible' => 0,
      'collapsed' => 0,
      'description' => '',
      'private' => FALSE,
=======
      'collapsible' => 0,
      'collapsed' => 0,
      'description' => '',
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    ),
  );
}

/**
<<<<<<< HEAD
 * Implements _webform_edit_component().
 */
function _webform_edit_fieldset($component) {
  $form = array();
  $form['display']['collapsible'] = array(
    '#type' => 'checkbox',
    '#title' => t('Collapsible'),
    '#default_value' => $component['extra']['collapsible'],
    '#description' => t('If this fieldset is collapsible, the user may open or close the fieldset.'),
    '#weight' => 0,
    '#parents' => array('extra', 'collapsible'),
  );
  $form['display']['collapsed'] = array(
    '#type' => 'checkbox',
    '#title' => t('Collapsed by Default'),
    '#default_value' => $component['extra']['collapsed'],
    '#description' => t('Collapsible fieldsets are "open" by default. Select this option to default the fieldset to "closed."'),
    '#weight' => 3,
    '#parents' => array('extra', 'collapsed'),
  );
  return $form;
}

/**
 * Implements _webform_render_component().
 */
function _webform_render_fieldset($component, $value = NULL, $filter = TRUE) {
  $element = array(
    '#type' => 'fieldset',
    '#title' => $filter ? _webform_filter_xss($component['name']) : $component['name'],
    '#title_display' => $component['extra']['title_display'] ? $component['extra']['title_display'] : NULL,
    '#weight' => $component['weight'],
    '#description' => $filter ? _webform_filter_descriptions($component['extra']['description']) : $component['extra']['description'],
    '#collapsible' => $component['extra']['collapsible'],
    '#collapsed' => $component['extra']['collapsed'],
    '#attributes' => array('class' => 'webform-component-fieldset'),
    '#pre_render' => array('webform_fieldset_prerender', 'webform_element_title_display'),
    '#webform_component' => $component,
  );

  // Hide the fieldset title if #title_display is 'none'.
  if (!empty($component['extra']['title_display']) && $component['extra']['title_display'] == 'none') {
    $element['#title'] = NULL;
  }

  return $element;
}

/**
 * Pre-render function to set a fieldset ID.
 */
function webform_fieldset_prerender($element) {
  $element['#attributes']['id'] = 'webform-component-' . str_replace('_', '-', implode('--', array_slice($element['#parents'], 1)));
  return $element;
}

/**
 * Implements _webform_display_component().
 */
function _webform_display_fieldset($component, $value, $format = 'html') {
  if ($format == 'text') {
    $element = array(
      '#title' => $component['name'],
      '#weight' => $component['weight'],
      '#post_render' => array('webform_element_wrapper'),
      '#theme_wrappers' => array('webform_element_text'),
    );
  }
  else {
    $element = _webform_render_fieldset($component, $value);
  }

  $element['#webform_component'] = $component;
  $element['#format'] = $format;

  return $element;
=======
 * Create a set of form items to be displayed on the form for editing this
 * component. Use care naming the form items, as this correlates directly to the
 * database schema. The component "Name" and "Description" fields are added to
 * every component type and are not necessary to specify here (although they may
 * be overridden if desired).
 * @return
 *   An array of form items to be displayed on the edit component page.
 */
function _webform_edit_fieldset($currfield) {
  $edit_fields = array();
  $edit_fields['extra']['collapsible'] = array(
    '#type' => 'checkbox',
    '#title' => t('Collapsible'),
    '#default_value' => $currfield['extra']['collapsible'],
    '#description' => t('If this fieldset is collapsible, the user may open or close the fieldset.'),
    '#weight' => 0,
  );
  $edit_fields['extra']['collapsed'] = array(
    '#type' => 'checkbox',
    '#title' => t('Collapsed by Default'),
    '#default_value' => $currfield['extra']['collapsed'],
    '#description' => t('Collapsible fieldsets are "open" by default. Select this option to default the fieldset to "closed."'),
    '#weight' => 3,
  );
  $edit_fields['advanced']['mandatory'] = array();
  return $edit_fields;
}

/**
 * Build a form item array containing all the properties of this component.
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @return
 *   An array of a form item to be displayed on the client-side webform.
 */
function _webform_render_fieldset($component) {
  $form_item = array(
    '#type'          => $component['type'],
    '#title'         => htmlspecialchars($component['name'], ENT_QUOTES),
    '#weight'        => $component['weight'],
    '#description'   => _webform_filter_descriptions($component['extra']['description']),
    '#collapsible'   => $component['extra']['collapsible'],
    '#collapsed'     => $component['extra']['collapsed'],
    '#attributes'    => array('class' => 'webform-component-'. $component['type'], 'id' => 'webform-component-'. $component['form_key']),
  );

  return $form_item;
}

/**
 * Display the result of a fieldset submission. The output of this function will
 * be displayed under the "results" tab then "submissions".
 * @param $data
 *   An array of information containing the submission result, directly
 *   correlating to the webform_submitted_data database schema.
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @return
 *   Textual output formatted for human reading.
 */
function _webform_submission_display_fieldset($data, $component, $enabled = FALSE) {
  $form_item = _webform_render_fieldset($component);
  return $form_item;
}

/**
 * Module specific instance of hook_help().
 */
function _webform_help_fieldset($section) {
  switch ($section) {
    case 'admin/settings/webform#fieldset_description':
      return t('Fieldsets allow you to organize multiple fields into groups.');
  }
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
}
