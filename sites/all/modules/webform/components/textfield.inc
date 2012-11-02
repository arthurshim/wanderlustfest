<?php
<<<<<<< HEAD

/**
 * @file
 * Webform module textfield component.
 */

/**
 * Implements _webform_defaults_component().
=======
// $Id: textfield.inc,v 1.12.2.12 2010/02/07 05:00:01 quicksketch Exp $

/**
 * @file
 *   Webform module textfield component.
 */

/**
 * Create a default textfield component.
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 */
function _webform_defaults_textfield() {
  return array(
    'name' => '',
    'form_key' => NULL,
    'pid' => 0,
    'weight' => 0,
    'value' => '',
    'mandatory' => 0,
<<<<<<< HEAD
=======
    'email' => 1,
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    'extra' => array(
      'width' => '',
      'maxlength' => '',
      'field_prefix' => '',
      'field_suffix' => '',
      'disabled' => 0,
<<<<<<< HEAD
      'unique' => 0,
      'title_display' => 0,
      'description' => '',
      'attributes' => array(),
      'private' => FALSE,
=======
      'description' => '',
      'attributes' => array(),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    ),
  );
}

/**
<<<<<<< HEAD
 * Implements _webform_theme_component().
 */
function _webform_theme_textfield() {
  return array(
    'webform_display_textfield' => array(
      'arguments' => array('element' => NULL),
      'file' => 'components/textfield.inc',
    ),
  );
}

/**
 * Implements _webform_edit_component().
 */
function _webform_edit_textfield($component) {
  $form = array();
  $form['value'] = array(
    '#type' => 'textfield',
    '#title' => t('Default value'),
    '#default_value' => $component['value'],
    '#description' => t('The default value of the field.') . theme('webform_token_help'),
    '#size' => 60,
    '#maxlength' => 1024,
    '#weight' => 0,
  );
  $form['display']['width'] = array(
    '#type' => 'textfield',
    '#title' => t('Width'),
    '#default_value' => $component['extra']['width'],
    '#description' => t('Width of the textfield.') . ' ' . t('Leaving blank will use the default size.'),
    '#size' => 5,
    '#maxlength' => 10,
    '#weight' => 0,
    '#parents' => array('extra', 'width'),
  );
  $form['display']['field_prefix'] = array(
    '#type' => 'textfield',
    '#title' => t('Label placed to the left of the textfield'),
    '#default_value' => $component['extra']['field_prefix'],
=======
 * Create a set of form items to be displayed on the form for editing this
 * component. Use care naming the form items, as this correlates directly to the
 * database schema. The component "Name" and "Description" fields are added to
 * every component type and are not necessary to specify here (although they may
 * be overridden if desired).
 * @return
 *   An array of form items to be displayed on the edit component page.
 */
function _webform_edit_textfield($currfield) {
  $edit_fields = array();
  $edit_fields['value'] = array(
    '#type' => 'textfield',
    '#title' => t('Default value'),
    '#default_value' => $currfield['value'],
    '#description' => t('The default value of the field.') . theme('webform_token_help'),
    '#size' => 60,
    '#maxlength' => 127,
    '#weight' => 0,
  );
  $edit_fields['extra']['width'] = array(
    '#type' => 'textfield',
    '#title' => t('Width'),
    '#default_value' => $currfield['extra']['width'],
    '#description' => t('Width of the textfield.') .' '. t('Leaving blank will use the default size.'),
    '#size' => 5,
    '#maxlength' => 10,
    '#weight' => 0,
  );
  $edit_fields['extra']['maxlength'] = array(
    '#type' => 'textfield',
    '#title' => t('Maxlength'),
    '#default_value' => $currfield['extra']['maxlength'],
    '#description' => t('Maxlength of the textfield.'),
    '#size' => 5,
    '#maxlength' => 10,
    '#weight' => 0,
  );
  $edit_fields['extra']['field_prefix'] = array(
    '#type' => 'textfield',
    '#title' => t('Label placed to the left of the textfield'),
    '#default_value' => $currfield['extra']['field_prefix'],
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    '#description' => t('Examples: $, #, -.'),
    '#size' => 20,
    '#maxlength' => 127,
    '#weight' => 1.1,
<<<<<<< HEAD
    '#parents' => array('extra', 'field_prefix'),
  );
  $form['display']['field_suffix'] = array(
    '#type' => 'textfield',
    '#title' => t('Label placed to the right of the textfield'),
    '#default_value' => $component['extra']['field_suffix'],
=======
  );
  $edit_fields['extra']['field_suffix'] = array(
    '#type' => 'textfield',
    '#title' => t('Label placed to the right of the textfield'),
    '#default_value' => $currfield['extra']['field_suffix'],
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    '#description' => t('Examples: lb, kg, %.'),
    '#size' => 20,
    '#maxlength' => 127,
    '#weight' => 1.2,
<<<<<<< HEAD
    '#parents' => array('extra', 'field_suffix'),
  );
  $form['display']['disabled'] = array(
=======
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
  $form['validation']['unique'] = array(
    '#type' => 'checkbox',
    '#title' => t('Unique'),
    '#return_value' => 1,
    '#description' => t('Check that all entered values for this field are unique. The same value is not allowed to be used twice.'),
    '#weight' => 1,
    '#default_value' => $component['extra']['unique'],
    '#parents' => array('extra', 'unique'),
  );
  $form['validation']['maxlength'] = array(
    '#type' => 'textfield',
    '#title' => t('Maxlength'),
    '#default_value' => $component['extra']['maxlength'],
    '#description' => t('Maximum length of the textfield value.'),
    '#size' => 5,
    '#maxlength' => 10,
    '#weight' => 2,
    '#parents' => array('extra', 'maxlength'),
  );
  return $form;
}

/**
 * Implements _webform_render_component().
 */
function _webform_render_textfield($component, $value = NULL, $filter = TRUE) {
  $element = array(
    '#type' => 'textfield',
    '#title' => $filter ? _webform_filter_xss($component['name']) : $component['name'],
    '#title_display' => $component['extra']['title_display'] ? $component['extra']['title_display'] : 'before',
    '#default_value' => $filter ? _webform_filter_values($component['value'], NULL, NULL, NULL, FALSE) : $component['value'],
    '#required' => $component['mandatory'],
    '#weight' => $component['weight'],
    '#field_prefix' => empty($component['extra']['field_prefix']) ? NULL : ($filter ? _webform_filter_xss($component['extra']['field_prefix']) : $component['extra']['field_prefix']),
    '#field_suffix' => empty($component['extra']['field_suffix']) ? NULL : ($filter ? _webform_filter_xss($component['extra']['field_suffix']) : $component['extra']['field_suffix']),
    '#description' => $filter ? _webform_filter_descriptions($component['extra']['description']) : $component['extra']['description'],
    '#attributes' => $component['extra']['attributes'],
    '#theme_wrappers' => array('webform_element_wrapper'),
    '#pre_render' => array('webform_element_title_display'),
    '#post_render' => array('webform_element_wrapper'),
    '#webform_component' => $component,
  );

  if ($component['extra']['disabled']) {
    $element['#attributes']['readonly'] = 'readonly';
  }

  // Enforce uniqueness.
  if ($component['extra']['unique']) {
    $element['#element_validate'][] = 'webform_validate_unique';
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
function _webform_render_textfield($component) {
  $form_item = array(
    '#type'          => $component['type'],
    '#title'         => $component['name'],
    '#default_value' => _webform_filter_values($component['value'], NULL, NULL, FALSE),
    '#required'      => $component['mandatory'],
    '#weight'        => $component['weight'],
    '#field_prefix'  => empty($component['extra']['field_prefix']) ? NULL : check_plain($component['extra']['field_prefix']),
    '#field_suffix'  => empty($component['extra']['field_suffix']) ? NULL : check_plain($component['extra']['field_suffix']),
    '#description'   => _webform_filter_descriptions($component['extra']['description']),
    '#attributes'    => $component['extra']['attributes'],
    '#prefix'        => '<div class="webform-component-'. $component['type'] .'" id="webform-component-'. $component['form_key'] .'">',
    '#suffix'        => '</div>',
  );

  if ($component['extra']['disabled']) {
    $form_item['#attributes']['readonly'] = 'readonly';
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }

  // Change the 'width' option to the correct 'size' option.
  if ($component['extra']['width'] > 0) {
<<<<<<< HEAD
    $element['#size'] = $component['extra']['width'];
  }
  if ($component['extra']['maxlength'] > 0) {
    $element['#maxlength'] = $component['extra']['maxlength'];
  }

  if (isset($value)) {
    $element['#default_value'] = $value[0];
  }

  return $element;
}

/**
 * Implements _webform_display_component().
 */
function _webform_display_textfield($component, $value, $format = 'html') {
  return array(
    '#title' => $component['name'],
    '#weight' => $component['weight'],
    '#theme' => 'webform_display_textfield',
    '#theme_wrappers' => $format == 'html' ? array('webform_element', 'webform_element_wrapper') : array('webform_element_text'),
    '#post_render' => array('webform_element_wrapper'),
    '#field_prefix' => $component['extra']['field_prefix'],
    '#field_suffix' => $component['extra']['field_suffix'],
    '#format' => $format,
    '#value' => isset($value[0]) ? $value[0] : '',
    '#webform_component' => $component,
=======
    $form_item['#size'] = $component['extra']['width'];
  }
  if ($component['extra']['maxlength'] > 0) {
    $form_item['#maxlength'] = $component['extra']['maxlength'];
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
function _webform_submission_display_textfield($data, $component, $enabled = FALSE) {
  $form_item = _webform_render_textfield($component);
  $form_item['#default_value'] = $data['value']['0'];
  if (!$enabled) {
    $form_item['#attributes']['readonly'] = 'readonly';
  }
  return $form_item;
}

/**
 * Format the output of emailed data for this component
 *
 * @param $data
 *   A string or array of the submitted data
 * @param $component
 *   An array of information describing the component,
 *   directly correlating to the webform_component database schema.
 *
 * @return string
 *   Textual output to be included in the email.
 */
function theme_webform_mail_textfield($data, $component) {
  $value = $data == '' ? '' : ' '. $component['extra']['field_prefix'] . $data . $component['extra']['field_suffix'];
  return $component['name'] .':'. $value;
}

/**
 * Module specific instance of hook_theme().
 */
function _webform_theme_textfield() {
  return array(
    'webform_mail_textfield' => array(
      'arguments' => array('data' => NULL, 'component' => NULL),
    ),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  );
}

/**
<<<<<<< HEAD
 * Format the output of data for this component.
 */
function theme_webform_display_textfield($element) {
  $prefix = $element['#format'] == 'html' ? filter_xss($element['#field_prefix']) : $element['#field_prefix'];
  $suffix = $element['#format'] == 'html' ? filter_xss($element['#field_suffix']) : $element['#field_suffix'];
  $value = $element['#format'] == 'html' ? check_plain($element['#value']) : $element['#value'];
  return $value !== '' ? ($prefix . $value . $suffix) : ' ';
}

/**
 * Implements _webform_analysis_component().
 */
function _webform_analysis_textfield($component, $sids = array()) {
  $placeholders = count($sids) ? array_fill(0, count($sids), "'%s'") : array();
  $sidfilter = count($sids) ? " AND sid in (" . implode(",", $placeholders) . ")" : "";
  $query = 'SELECT data ' .
    ' FROM {webform_submitted_data} ' .
    ' WHERE nid = %d ' .
    ' AND cid = %d ' . $sidfilter;
=======
 * Module specific instance of hook_help().
 */
function _webform_help_textfield($section) {
  switch ($section) {
    case 'admin/settings/webform#textfield_description':
      return t('Basic textfield type.');
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
function _webform_analysis_rows_textfield($component, $sids = array()) {
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
function _webform_table_textfield($component, $value) {
  return check_plain(empty($value[0]) ? '' : $value[0]);
}

/**
 * Implements _webform_csv_headers_component().
 */
function _webform_csv_headers_textfield($component, $export_options) {
=======
 * Return the result of this component's submission for display in a table. The
 * output of this function will be displayed under the "results" tab then "table".
 * @param $data
 *   An array of information containing the submission result, directly
 *   correlating to the webform_submitted_data database schema
 * @return
 *   Textual output formatted for human reading.
 */
function _webform_table_data_textfield($data) {
  return check_plain(empty($data['value']['0']) ? '' : $data['value']['0']);
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
function _webform_csv_headers_textfield($component) {
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
function _webform_csv_data_textfield($component, $export_options, $value) {
  return !isset($value[0]) ? '' : $value[0];
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
function _webform_csv_data_textfield($data) {
  return !isset($data['value']['0']) ? '' : $data['value']['0'];
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
}
