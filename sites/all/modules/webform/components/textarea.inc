<?php
<<<<<<< HEAD

/**
 * @file
 * Webform module textarea component.
 */

/**
 * Implements _webform_defaults_component().
=======
// $Id: textarea.inc,v 1.12.2.14 2009/06/03 19:27:31 quicksketch Exp $

/**
 * @file
 *   Webform module textarea component.
 */

/**
 * Create a default textarea component.
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 */
function _webform_defaults_textarea() {
  return array(
    'name' => '',
    'form_key' => NULL,
    'pid' => 0,
    'weight' => 0,
    'value' => '',
    'mandatory' => 0,
<<<<<<< HEAD
    'extra' => array(
      'cols' => '',
      'rows' => '',
      'title_display' => 0,
=======
    'email' => 1,
    'extra' => array(
      'cols' => '',
      'rows' => '',
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      'resizable' => 1,
      'disabled' => 0,
      'description' => '',
      'attributes' => array(),
<<<<<<< HEAD
      'private' => FALSE,
    ),
  );
}


/**
 * Implements _webform_theme_component().
 */
function _webform_theme_textarea() {
  return array(
    'webform_display_textarea' => array(
      'arguments' => array('element' => NULL),
      'file' => 'components/textarea.inc',
=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    ),
  );
}

/**
<<<<<<< HEAD
 * Implements _webform_edit_component().
 */
function _webform_edit_textarea($component) {
  $form = array();
  $form['value'] = array(
    '#type' => 'textarea',
    '#title' => t('Default value'),
    '#default_value' => $component['value'],
=======
 * Create a set of form items to be displayed on the form for editing this
 * component. Use care naming the form items, as this correlates directly to the
 * database schema. The component "Name" and "Description" fields are added to
 * every component type and are not necessary to specify here (although they may
 * be overridden if desired).
 * @return
 *   An array of form items to be displayed on the edit component page.
 */
function _webform_edit_textarea($currfield) {
  $edit_fields = array();
  $edit_fields['value'] = array(
    '#type' => 'textarea',
    '#title' => t('Default value'),
    '#default_value' => $currfield['value'],
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    '#description' => t('The default value of the field.') . theme('webform_token_help'),
    '#cols' => 60,
    '#rows' => 5,
    '#weight' => 0,
  );
<<<<<<< HEAD
  $form['display']['cols'] = array(
    '#type' => 'textfield',
    '#title' => t('Width'),
    '#default_value' => $component['extra']['cols'],
    '#description' => t('Width of the textarea.') . ' ' . t('Leaving blank will use the default size.'),
    '#size' => 5,
    '#maxlength' => 10,
    '#parents' => array('extra', 'cols'),
  );
  $form['display']['rows'] = array(
    '#type' => 'textfield',
    '#title' => t('Height'),
    '#default_value' => $component['extra']['rows'],
    '#description' => t('Height of the textarea.') . ' ' . t('Leaving blank will use the default size.'),
    '#size' => 5,
    '#maxlength' => 10,
    '#parents' => array('extra', 'rows'),
  );
  $form['display']['resizable'] = array(
=======
  $edit_fields['extra']['cols'] = array(
    '#type' => 'textfield',
    '#title' => t('Width'),
    '#default_value' => $currfield['extra']['cols'],
    '#description' => t('Width of the textfield.') .' '. t('Leaving blank will use the default size.'),
    '#size' => 5,
    '#maxlength' => 10,
  );
  $edit_fields['extra']['rows'] = array(
    '#type' => 'textfield',
    '#title' => t('Height'),
    '#default_value' => $currfield['extra']['rows'],
    '#description' => t('Height of the textfield.') .' '. t('Leaving blank will use the default size.'),
    '#size' => 5,
    '#maxlength' => 10,
  );
  $edit_fields['extra']['resizable'] = array(
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    '#type' => 'checkbox',
    '#title' => t('Resizable'),
    '#description' => t('Make this field resizable by the user.'),
    '#weight' => 2,
<<<<<<< HEAD
    '#default_value' => $component['extra']['resizable'],
    '#parents' => array('extra', 'resizable'),
  );
  $form['display']['disabled'] = array(
=======
    '#default_value' => $currfield['extra']['resizable'],
  );
  $edit_fields['extra']['disabled'] = array(
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    '#type' => 'checkbox',
    '#title' => t('Disabled'),
    '#return_value' => 1,
    '#description' => t('Make this field non-editable. Useful for setting an unchangeable default value.'),
<<<<<<< HEAD
    '#weight' => 11,
    '#default_value' => $component['extra']['disabled'],
    '#parents' => array('extra', 'disabled'),
  );
  return $form;
}

/**
 * Implements _webform_render_component().
 */
function _webform_render_textarea($component, $value = NULL, $filter = TRUE) {
  $element = array(
    '#type' => 'textarea',
    '#title' => $filter ? _webform_filter_xss($component['name']) : $component['name'],
    '#title_display' => $component['extra']['title_display'] ? $component['extra']['title_display'] : 'before',
    '#default_value' => $filter ? _webform_filter_values($component['value']) : $component['value'],
    '#required' => $component['mandatory'],
    '#weight' => $component['weight'],
    '#description' => $filter ? _webform_filter_descriptions($component['extra']['description']) : $component['extra']['description'],
    '#rows' => !empty($component['extra']['rows']) ? $component['extra']['rows'] : 5,
    '#cols' => !empty($component['extra']['cols']) ? $component['extra']['cols'] : 60,
    '#attributes' => $component['extra']['attributes'],
    '#resizable' => (bool) $component['extra']['resizable'], // MUST be FALSE to disable.
    '#theme_wrappers' => array('webform_element_wrapper'),
    '#pre_render' => array('webform_element_title_display'),
    '#post_render' => array('webform_element_wrapper'),
    '#webform_component' => $component,
  );

  if ($component['extra']['disabled']) {
    $element['#attributes']['readonly'] = 'readonly';
  }

  if (isset($value)) {
    $element['#default_value'] = $value[0];
  }

  return $element;
}

/**
 * Implements _webform_display_component().
 */
function _webform_display_textarea($component, $value, $format = 'html') {
  return array(
    '#title' => $component['name'],
    '#weight' => $component['weight'],
    '#theme' => 'webform_display_textarea',
    '#theme_wrappers' => $format == 'html' ? array('webform_element', 'webform_element_wrapper') : array('webform_element_text'),
    '#post_render' => array('webform_element_wrapper'),
    '#format' => $format,
    '#value' => isset($value[0]) ? $value[0] : '',
    '#webform_component' => $component,
  );
}

/**
 * Format the output of data for this component.
 */
function theme_webform_display_textarea($element) {
  $output = $element['#format'] == 'html' ? str_replace("\n", '<br />', check_plain($element['#value'])) : $element['#value'];
  if (drupal_strlen($output) > 80) {
    $output = ($element['#format'] == 'html') ? '<div class="webform-long-answer">' . $output . '</div>' : $output;
  }
  return $output !== '' ? $output : ' ';
}

/**
 * Implements _webform_analysis_component().
 */
function _webform_analysis_textarea($component, $sids = array()) {
  $placeholders = count($sids) ? array_fill(0, count($sids), "'%s'") : array();
  $sidfilter = count($sids) ? " AND sid in (" . implode(",", $placeholders) . ")" : "";
  $query = 'SELECT data ' .
    ' FROM {webform_submitted_data} ' .
    ' WHERE nid = %d ' .
    ' AND cid = %d ' . $sidfilter;
=======
    '#weight' => 3,
    '#default_value' => $currfield['extra']['disabled'],
  );
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
function _webform_render_textarea($component) {
  $form_item = array(
    '#type'          => 'textarea',
    '#title'         => $component['name'],
    '#default_value' => _webform_filter_values($component['value']),
    '#required'      => $component['mandatory'],
    '#weight'        => $component['weight'],
    '#description'   => _webform_filter_descriptions($component['extra']['description']),
    '#rows'          => !empty($component['extra']['rows']) ? $component['extra']['rows'] : 5,
    '#cols'          => !empty($component['extra']['cols']) ? $component['extra']['cols'] : 60,
    '#attributes'    => $component['extra']['attributes'],
    '#resizable'     => (bool) $component['extra']['resizable'], // MUST be FALSE to disable.
    '#prefix'        => '<div class="webform-component-'. $component['type'] .'" id="webform-component-'. $component['form_key'] .'">',
    '#suffix'        => '</div>',
  );

  if ($component['extra']['disabled']) {
    $form_item['#attributes']['readonly'] = 'readonly';
  }

  return $form_item;
}

/**
 * Display the result of a textfield submission. The output of this function
 * will be displayed under the "results" tab then "submissions".
 * @param $data
 *   An array of information containing the submission result, directly
 *   correlating to the webform_submitted_data database schema.
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @param $enabled
 *   If enabled, the value may be changed. Otherwise it will set to readonly.
 * @return
 *   Textual output formatted for human reading.
 */
function _webform_submission_display_textarea($data, $component, $enabled = FALSE) {
  $form_item = _webform_render_textarea($component);
  $form_item['#default_value'] = $data['value']['0'];
  if (!$enabled) {
    $form_item['#attributes']['readonly'] = 'readonly';
  }
  return $form_item;
}

/**
 * Module specific instance of hook_help().
 */
function _webform_help_textarea($section) {
  switch ($section) {
    case 'admin/settings/webform#textarea_description':
      return t('A large text area that allows for multiple lines of input.');
  }
}

/**
 * Calculate and returns statistics about results for this component from all
 * submission to this webform. The output of this function will be displayed
 * under the "results" tab then "analysis".
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema
 * @param $sids
 *   An optional array of submission IDs (sid). If supplied, the analysis will be limited
 *   to these sids.
 * @return
 *   An array of data rows, each containing a statistic for this component's
 *   submissions.
 */
function _webform_analysis_rows_textarea($component, $sids = array()) {
  $placeholders = count($sids) ? array_fill(0, count($sids), "'%s'") : array();
  $sidfilter = count($sids) ? " AND sid in (".implode(",", $placeholders).")" : "";
  $query = 'SELECT data '.
    ' FROM {webform_submitted_data} '.
    ' WHERE nid = %d '.
    ' AND cid = %d '. $sidfilter;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $nonblanks = 0;
  $submissions = 0;
  $wordcount = 0;

  $result = db_query($query, array_merge(array($component['nid'], $component['cid']), $sids));
  while ($data = db_fetch_array($result)) {
    if (drupal_strlen(trim($data['data'])) > 0) {
      $nonblanks++;
      $wordcount += str_word_count(trim($data['data']));
    }
    $submissions++;
  }

  $rows[0] = array(t('Left Blank'), ($submissions - $nonblanks));
  $rows[1] = array(t('User entered value'), $nonblanks);
  $rows[2] = array(t('Average submission length in words (ex blanks)'), ($nonblanks != 0 ? number_format($wordcount/$nonblanks, 2) : '0'));
  return $rows;
}

/**
<<<<<<< HEAD
 * Implements _webform_table_component().
 */
function _webform_table_textarea($component, $value) {
  return empty($value[0]) ? '' : check_plain($value[0]);
}

/**
 * Implements _webform_csv_headers_component().
 */
function _webform_csv_headers_textarea($component, $export_options) {
=======
 * Return the result of this component's submission for display in a table. The
 * output of this function will be displayed under the "results" tab then "table".
 * @param $data
 *   An array of information containing the submission result, directly
 *   correlating to the webform_submitted_data database schema
 * @return
 *   Textual output formatted for human reading.
 */
function _webform_table_data_textarea($data) {
  return empty($data['value']['0']) ? '' : check_plain($data['value']['0']);
}


/**
 * Return the header information for this component to be displayed in a comma
 * seperated value file. The output of this function will be displayed under the
 * "results" tab then "download".
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @return
 *   An array of data to be displayed in the first three rows of a CSV file, not
 *   including either prefixed or trailing commas.
 */
function _webform_csv_headers_textarea($component) {
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $header = array();
  $header[0] = '';
  $header[1] = '';
  $header[2] = $component['name'];
  return $header;
}

/**
<<<<<<< HEAD
 * Implements _webform_csv_data_component().
 */
function _webform_csv_data_textarea($component, $export_options, $value) {
  return empty($value[0]) ? '' : $value[0];
=======
 * Return the result of a textfield submission. The output of this function will
 * be displayed under the "results" tab then "submissions".
 * @param $data
 *   An array of information containing the submission result, directly
 *   correlating to the webform_submitted_data database schema.
 * @return
 *   Textual output formatted for CSV, not including either prefixed or trailing
 *   commas.
 */
function _webform_csv_data_textarea($data) {
  return empty($data['value']['0']) ? '' : $data['value']['0'];
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
}
