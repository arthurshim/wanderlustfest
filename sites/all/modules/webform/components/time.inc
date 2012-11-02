<?php
<<<<<<< HEAD

/**
 * @file
 * Webform module time component.
 */

// Time depends on functions provided by date.
webform_component_include('date');

/**
 * Implements _webform_defaults_component().
=======
// $Id: time.inc,v 1.16.2.12 2010/07/27 06:16:50 quicksketch Exp $

/**
 * @file
 *   Webform module time component.
 */

/**
 * Create a default time component.
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 */
function _webform_defaults_time() {
  return array(
    'name' => '',
    'form_key' => NULL,
    'pid' => 0,
    'weight' => 0,
    'value' => '',
    'mandatory' => 0,
<<<<<<< HEAD
    'extra' => array(
      'timezone' => 'user',
      'hourformat' => '12-hour',
      'title_display' => 0,
      'description' => '',
      'private' => FALSE,
=======
    'email' => 1,
    'extra' => array(
      'timezone' => 'site',
      'check_daylight_savings' => 0,
      'hourformat' => '12-hour',
      'description' => '',
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    ),
  );
}

/**
<<<<<<< HEAD
 * Implements _webform_theme_component().
 */
function _webform_theme_time() {
  return array(
    'webform_time' => array(
      'arguments' => array('element' => NULL),
      'file' => 'components/time.inc',
    ),
    'webform_display_time' => array(
      'arguments' => array('element' => NULL),
      'file' => 'components/time.inc',
    ),
  );
}

/**
 * Implements _webform_edit_component().
 */
function _webform_edit_time($component) {
  $form = array();
  $form['value'] = array(
    '#type' => 'textfield',
    '#title' => t('Default value'),
    '#default_value' => $component['value'],
    '#description' => t('The default value of the field.') . '<br />' . t('Accepts a time in any <a href="http://www.gnu.org/software/tar/manual/html_chapter/Date-input-formats.html">GNU Date Input Format</a>. Strings such as now, +2 hours, and 10:30pm are all valid.'),
    '#size' => 60,
    '#maxlength' => 127,
    '#weight' => 0,
  );
  $form['extra']['timezone'] = array(
    '#type' => 'radios',
    '#title' => t('Default value timezone'),
    '#default_value' => empty($component['extra']['timezone']) ? 'user' : $component['extra']['timezone'],
    '#description' => t('If using relative dates for a default value (e.g. "now") base the current time on this timezone.'),
    '#options' => array('user' => t('User timezone'), 'site' => t('Website timezone')),
    '#weight' => 2,
    '#access' => variable_get('configurable_timezones', 1) && module_exists('date_timezone'),
  );
  $form['display']['hourformat'] = array(
    '#type' => 'radios',
    '#title' => t('Time Format'),
    '#default_value' => isset($component['extra']['hourformat']) ? $component['extra']['hourformat'] : '12-hour',
    '#description' => t('Format the display of the time in 12 or 24 hours.'),
    '#options' => array('12-hour' => t('12-hour (am/pm)'), '24-hour' => t('24-hour')),
    '#weight' => 2,
    '#parents' => array('extra', 'hourformat'),
  );
  return $form;
}

/**
 * Implements _webform_render_component().
 */
function _webform_render_time($component, $value = NULL, $filter = TRUE) {
  $element = array(
    '#type' => 'webform_time',
    '#title' => $filter ? _webform_filter_xss($component['name']) : $component['name'],
    '#title_display' => $component['extra']['title_display'] ? $component['extra']['title_display'] : 'before',
    '#required' => $component['mandatory'],
    '#weight' => $component['weight'],
    '#description' => $filter ? _webform_filter_descriptions($component['extra']['description']) : $component['extra']['description'],
    '#element_validate' => array('webform_validate_time'),
    '#hourformat' => $component['extra']['hourformat'],
    '#default_value' => $filter ? _webform_filter_values($component['value'], NULL, NULL, NULL, FALSE) : $component['value'],
    '#timezone' => $component['extra']['timezone'],
    '#process' => array('webform_expand_time'),
    '#theme' => 'webform_time',
    '#theme_wrappers' => array('webform_element_wrapper'),
    '#pre_render' => array('webform_element_title_display'),
    '#post_render' => array('webform_element_wrapper'),
    '#webform_component' => $component,
  );

  // Set the value from Webform if available.
  if (!empty($value[0])) {
    $element['#default_value'] = $value[0];
  }

  return $element;
}

/**
 * Form API #process function for Webform time fields.
 */
function webform_expand_time($element) {
  // Expand the default value from a string into an array.
  if (!empty($element['#default_value'])) {
    // Adjust the time based on the user or site timezone.
    // The "timezone_name" variable is provided by DateAPI in Drupal 6.
    if (variable_get('configurable_timezones', 1) && $element['#timezone'] == 'user') {
      $timezone_name = isset($GLOBALS['user']->timezone_name) ? $GLOBALS['user']->timezone_name : NULL;
    }
    else {
      $timezone_name = variable_get('date_default_timezone_name', NULL);
    }

    if (!empty($timezone_name) && class_exists('DateTimeZone')) {
      $default_values = webform_date_array(webform_strtodate('c', $element['#default_value'], $timezone_name), 'time');
    }
    else {
      $default_values = webform_date_array(date('c', strtotime($element['#default_value'])), 'time');
    }
  }
  else {
    $default_values = array(
      'hour' => '',
      'minute' => '',
      'second' => '',
    );
  }

  $first_hour = 0;
  $last_hour = 23;
  if ($element['#hourformat'] == '12-hour') {
    $first_hour = 1;
    $last_hour = 12;
    $default_values = webform_time_convert($default_values, '12-hour');
    $default_values['ampm'] = $default_values['ampm'] ? $default_values['ampm'] : 'am';
=======
 * Create a set of form items to be displayed on the form for editing this component.
 * Use care naming the form items, as this correlates directly to the database schema.
 * The component "Name" and "Description" fields are added to every component type and
 * are not necessary to specify here (although they may be overridden if desired).
 * @return An array of form items to be displayed on the edit component page
 */
function _webform_edit_time($currfield) {
  $edit_fields = array();
  $edit_fields['value'] = array(
    '#type' => 'textfield',
    '#title' => t('Default value'),
    '#default_value' => $currfield['value'],
    '#description' => t('The default value of the field.') .'<br />'. t('Accepts a time in any <a href="http://www.gnu.org/software/tar/manual/html_chapter/Date-input-formats.html">GNU Date Input Format</a>. Strings such as now, +2 hours, and 10:30pm are all valid.'),
    '#size' => 60,
    '#maxlength' => 127,
    '#weight' => 0,
    '#element_validate' => array('webform_validate_time_string'),
  );
  $edit_fields['extra']['timezone'] = array(
    '#type' => 'radios',
    '#title' => t('Timezone'),
    '#default_value' => empty($currfield['extra']['timezone']) ? 'site' : $currfield['extra']['timezone'],
    '#description' => t('Adjust the time according to a specific timezone. Website timezone is defined in the <a href="!settings">Site Settings</a> and is the default.', array('!settings' => url('admin/settings/date-time'))),
    '#options' => array('site' => 'Website Timezone', 'user' => 'User Timezone', 'gmt' => 'GMT'),
    '#weight' => 0,
  );
$edit_fields['extra']['check_daylight_savings'] = array(
  '#type' => 'checkbox',
  '#title' => t('Observe Daylight Savings'),
  '#default_value' => $currfield['extra']['check_daylight_savings'],
  '#checked_value' => 1,
  '#description' => t('Automatically adjust the time during daylight savings.'),
  '#weight' => 1,
);
  $edit_fields['extra']['hourformat'] = array(
    '#type' => 'radios',
    '#title' => t('Time Format'),
    '#default_value' => isset($currfield['extra']['hourformat']) ? $currfield['extra']['hourformat'] : '12-hour',
    '#description' => t('Format the display of the time in 12 or 24 hours.'),
    '#options' => array('12-hour' => '12-hour (am/pm)', '24-hour' => '24-hour'),
    '#weight' => 2,
  );
  return $edit_fields;
}

/**
 * Build a form item array containing all the properties of this component
 * @param $component An array of information describing the component, directly correlating to the webform_component database schema
 * @return An array of a form item to be displayed on the client-side webform
 */
function _webform_render_time($component) {
  if (drupal_strlen($component['value']) > 0) {
    // Calculate the timestamp in GMT.
    $timestamp = strtotime($component['value']);
    if ($component['extra']['timezone'] == 'user') {
      // Use the users timezone.
      global $user;
      $timestamp += (int)$user->timezone;
    }
    elseif ($component['extra']['timezone'] == 'gmt') {
      // Use GMT.
      $timestamp += 0;
    }
    else {
      // Use the Drupal site time.
      $timestamp += (int)variable_get('date_default_timezone', 0);
    }

    // Check for daylight savings time.
    if ($component['extra']['check_daylight_savings'] && date('I')) {
      $timestamp += 3600;
    }
  }

  if ($component['extra']['hourformat'] == '12-hour') {
    $first_hour = 1;
    $last_hour = 12;
    $hour_format = 'g';
  }
  else {
    $first_hour = 0;
    $last_hour = 23;
    $hour_format = 'G';
  }

  if (drupal_strlen($component['value']) > 0) {
    $hour = gmdate($hour_format, $timestamp);
    $minute = gmdate('i', $timestamp);
    $am_pm = gmdate('a', $timestamp);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }

  // Generate the choices for drop-down selects.
  $hours[''] = t('hour');
  $minutes[''] = t('minute');
  for ($i = $first_hour; $i <= $last_hour; $i++) $hours[$i] = $i;
<<<<<<< HEAD
  for ($i = 0; $i <= 59; $i++) $minutes[$i] = $i < 10 ? "0$i" : $i;
  $ampms = array('am' => t('am'), 'pm' => t('pm'));

  $element['hour'] = array(
    '#prefix' => '',
    '#type' => 'select',
    '#default_value' => $default_values['hour'],
    '#options' => $hours,
  );
  $element['minute'] = array(
    '#prefix' => ':',
    '#type' => 'select',
    '#default_value' => $default_values['minute'],
    '#options' => $minutes,
  );
  if (strcmp($element['#hourformat'], '12-hour') == 0) {
    $element['ampm'] = array(
      '#type' => 'radios',
      '#default_value' => $default_values['ampm'],
      '#options' => $ampms,
    );
  }

  // Set the overall default value.
  if ($default_values['hour'] !== '') {
    $element['#default_value'] = webform_date_string($default_values);
  }

  return $element;
}

/**
 * Theme a webform time element.
 */
function theme_webform_time($element) {
  // Add error classes to all items within the element.
  if (form_get_error($element)) {
    $element['hour']['#attributes']['class'] = 'error';
    $element['minute']['#attributes']['class'] = 'error';
  }

  $output = '<div class="webform-container-inline">' . drupal_render($element['hour']) . drupal_render($element['minute']) . drupal_render($element['ampm']) . '</div>';

  $element['#type'] = 'element';
  return theme('form_element', $element, $output);
}

function webform_validate_time($element, $form_state) {
  $form_key = $element['#webform_component']['form_key'];
  $name = $element['#webform_component']['name'];

  // Check if the user filled the required fields.
  foreach ($element['#hourformat'] == '12-hour' ? array('hour', 'minute', 'ampm') : array('hour', 'minute') as $field_type) {
    if ($element[$field_type]['#value'] === '' && $element['#required']) {
      form_error($element, t('%field field is required.', array('%field' => $name)));
=======
  for ($i = 0; $i <= 59; $i++) $minutes[$i < 10 ? "0$i" : $i] = $i < 10 ? "0$i" : $i;
  $am_pms = array('am' => t('am'), 'pm' => t('pm'));

  $form_item = array(
    '#title' => $component['name'],
    '#required' => $component['mandatory'],
    '#weight' => $component['weight'],
    '#description' => _webform_filter_descriptions($component['extra']['description']),
    '#prefix' => '<div class="webform-component-'. $component['type'] .'" id="webform-component-'. $component['form_key'] .'">',
    '#suffix' => '</div>',
    '#theme' => 'webform_time',
    '#element_validate' => array('webform_validate_time'),
    '#webform_component' => $component,
  );

  $form_item['hour'] = array(
    '#prefix' => '',
    '#type' => 'select',
    '#default_value' => $hour,
    '#options' => $hours,
  );
  $form_item['minute'] = array(
    '#prefix' => ':',
    '#type' => 'select',
    '#default_value' => $minute,
    '#options' => $minutes,
  );
  if ($component['extra']['hourformat'] == '12-hour') {
    $form_item['ampm'] = array(
      '#type' => 'radios',
      '#default_value' => $am_pm,
      '#options' => $am_pms,
    );
  }

  return $form_item;
}

function webform_validate_time($form_item, $form_state) {
  $form_key = $form_item['#webform_component']['form_key'];
  $name = $form_item['#webform_component']['name'];

  // Check if the user filled the required fields.
  foreach ($form_item['#webform_component'] == '12-hour' ? array('hour', 'minute', 'ampm') : array('hour', 'minute') as $field_type) {
    if (!is_numeric($form_item[$field_type]['#value']) && $form_item['#required']) {
      form_set_error($form_key, t('%field field is required.', array('%field' => $name)));
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      return;
    }
  }

  // Check for a valid time.
<<<<<<< HEAD
  if ($element['hour']['#value'] !== '' || $element['minute']['#value'] !== '') {
    if (!is_numeric($element['hour']['#value']) || !is_numeric($element['minute']['#value']) || (isset($element['ampm']) && $element['ampm']['#value'] === '')) {
      form_error($element, t('Entered %name is not a valid time.', array('%name' => $name)));
=======
  if ($form_item['hour']['#value'] !== '' || $form_item['minute']['#value'] !== '' || (isset($form_item['ampm']) && $form_item['ampm']['#value'] !== '')) {
    if (!is_numeric($form_item['hour']['#value']) || !is_numeric($form_item['minute']['#value']) || (isset($form_item['ampm']) && $form_item['ampm']['#value'] === '')) {
      form_set_error($form_key, t('Entered %name is not a valid time.', array('%name' => $name)));
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      return;
    }
  }
}

/**
<<<<<<< HEAD
 * Implements _webform_submit_component().
 */
function _webform_submit_time($component, $value) {
  // Convert to 24-hour time before string conversion.
  if ($component['extra']['hourformat'] == '12-hour') {
    $value = webform_time_convert($value, '24-hour');
  }

  // Convert the value into a ISO 8601 string.
  return $value['hour'] !== '' ? webform_date_string($value, 'time') : '';
}

/**
 * Implements _webform_display_component().
 */
function _webform_display_time($component, $value, $format = 'html') {
  $value = webform_date_array(isset($value[0]) ? $value[0] : '', 'time');
  if ($component['extra']['hourformat'] == '12-hour') {
    $value = webform_time_convert($value, '12-hour');
  }

  return array(
    '#title' => $component['name'],
    '#weight' => $component['weight'],
    '#theme' => 'webform_display_time',
    '#theme_wrappers' => $format == 'html' ? array('webform_element', 'webform_element_wrapper') : array('webform_element_text'),
    '#post_render' => array('webform_element_wrapper'),
    '#format' => $format,
    '#hourformat' => $component['extra']['hourformat'],
    '#value' => $value,
    '#pre_render' => array('webform_element_title_display'),
    '#webform_component' => $component,
  );
}

/**
 * Format the output of data for this component.
 */
function theme_webform_display_time($element) {
  $output = ' ';
  if (isset($element['#value']['hour']) && $element['#value']['hour'] !== '' && isset($element['#value']['minute']) && $element['#value']['minute'] !== '') {
    if ($element['#hourformat'] == '24-hour') {
      $output = sprintf('%02d', $element['#value']['hour']) . ':' . sprintf('%02d', $element['#value']['minute']);
    }
    else {
      $output = $element['#value']['hour'] . ':' . sprintf('%02d', $element['#value']['minute']) . ' ' . $element['#value']['ampm'];
    }
  }
  return $output;
}

/**
 * Implements _webform_analysis_component().
 */
function _webform_analysis_time($component, $sids = array()) {
  $placeholders = count($sids) ? array_fill(0, count($sids), "'%s'") : array();
  $sidfilter = count($sids) ? " AND sid in (" . implode(",", $placeholders) . ")" : "";
  $query = 'SELECT no,data ' .
    ' FROM {webform_submitted_data} ' .
    ' WHERE nid = %d ' .
    ' AND  cid = %d ' . $sidfilter .
    ' ORDER BY sid ASC ';

  $result = db_query($query, array_merge(array($component['nid'], $component['cid']), $sids));

  $times = array();
  $submissions = 0;
  while ($row = db_fetch_array($result)) {
    $submissions++;
    if ($row['data']) {
      $times[] = webform_date_array($row['data']);
=======
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
function _webform_submission_display_time($data, $component, $enabled = FALSE) {
  $form_item = _webform_render_time($component);
  $form_item['minute']['#default_value'] = $data['value']['1'];
  $form_item['minute']['#disabled'] = !$enabled;
  $form_item['hour']['#disabled'] = !$enabled;
  $form_item['ampm']['#disabled'] = !$enabled;

  // Match the hourly data to the hour format.
  if ($data['value']['1']) {
    $timestamp = strtotime($data['value']['0'] .':'. $data['value']['1'] . (isset($data['value']['2']) ? $data['value']['2'] : ''));
    if ($component['extra']['hourformat'] == '24-hour') {
      $form_item['hour']['#default_value'] = date('H', $timestamp);
    }
    else {
      $form_item['hour']['#default_value'] = date('g', $timestamp);
      $form_item['ampm']['#default_value'] = $data['value']['2'];
    }
  }
  return $form_item;
}

/**
 * Format the output of emailed data for this component
 *
 * @param $data
 *   A string or array of the submitted data
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @return
 *   Textual output to be included in the email.
 */
function theme_webform_mail_time($data, $component) {
  $output = $component['name'] .':';
  if ($data['hour'] && $data['minute']) {
    if ($component['extra']['hourformat'] == '24-hour') {
      $output .= ' '. $data['hour'] .':'. $data['minute'];
    }
    else {
      $output .= ' '. $data['hour'] .':'. $data['minute'] .' '. $data['ampm'];
    }
  }
  return $output;
}

/**
 * Module specific instance of hook_help().
 */
function _webform_help_time($section) {
  switch ($section) {
    case 'admin/settings/webform#time_description':
      return t('Presents the user with hour and minute fields. Optional am/pm fields.');
  }
}

/**
 * Module specific instance of hook_theme().
 */
function _webform_theme_time() {
  return array(
    'webform_time' => array(
      'arguments' => array('element' => NULL),
    ),
    'webform_mail_time' => array(
      'arguments' => array('data' => NULL, 'component' => NULL),
    ),
  );
}

/**
 * Calculate and returns statistics about results for this component from all
 * submission to this webform. The output of this function will be displayed
 * under the "results" tab then "analysis".
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @param $sids
 *   An optional array of submission IDs (sid). If supplied, the analysis will be limited
 *   to these sids.
 * @return
 *   An array of data rows, each containing a statistic for this component's
 *   submissions.
 */
function _webform_analysis_rows_time($component, $sids = array()) {
  $placeholders = count($sids) ? array_fill(0, count($sids), "'%s'") : array();
  $sidfilter = count($sids) ? " AND sid in (".implode(",", $placeholders).")" : "";
  $query = 'SELECT no,data '.
    ' FROM {webform_submitted_data} '.
    ' WHERE nid = %d '.
    ' AND  cid = %d '. $sidfilter.
    ' ORDER BY sid,no ASC ';

  $result = db_query($query, array_merge(array($component['nid'], $component['cid']), $sids));
  // build an array of timestamps from entered values.
  $timestamps = array();
  $submissions = 0;
  while ($row = db_fetch_array($result)) {
    if ($row['no'] == '0') {
      $submissions++;
      $hour = $row['data'];
      if ($row = db_fetch_array($result)) {
        if ($row['no'] == '1') {
          $minute = $row['data'];
          if ($row = db_fetch_array($result)) {
            if ($row['no'] == '2') {
              $ampm = $row['data'];
              // Build the full timestamp.
              if (drupal_strlen($hour) > 0 && drupal_strlen($minute) > 0 ) {
                $timestamps[] = strtotime($hour .':'. $minute .' '. $ampm);
              }
            }
            else {
              // Build military time.
              $timestamps[] = strtotime($hour .':'. $minute);
            }
          }
        }
      }
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    }
  }

  // Display stats.
<<<<<<< HEAD
  $nonblanks = count($times);
=======
  // TODO: display date statistics in javascript tabs.
  $nonblanks = count($timestamps);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $rows[0] = array(t('Left Blank'), ($submissions - $nonblanks));
  $rows[1] = array(t('User entered value'), $nonblanks);
  return $rows;
}

/**
<<<<<<< HEAD
 * Implements _webform_table_component().
 */
function _webform_table_time($component, $value) {
  if ($value[0]) {
    $time = webform_date_array($value[0], 'time');
    if ($component['extra']['hourformat'] == '24-hour') {
      return sprintf('%02d', $time['hour']) . ':' . sprintf('%02d', $time['minute']);
    }
    else {
      $time = webform_time_convert($time, '12-hour');
      return $time['hour'] . ':' . sprintf('%02d', $time['minute']) . ' ' . $time['ampm'];
=======
 * Return the result of this component's submission for display in a table. The
 * output of this function will be displayed under the "results" tab then "table".
 * @param $data
 *   An array of information containing the submission result, directly
 *   correlating to the webform_submitted_data database schema.
 * @return
 *   Textual output formatted for human reading.
 */
function _webform_table_data_time($data, $component) {
  if (drupal_strlen($data['value']['0']) > 0 && drupal_strlen($data['value']['1']) > 0) {
    $timestamp = strtotime($data['value']['0'] .':'. $data['value']['1'] . $data['value']['2']);
    if ($component['extra']['hourformat'] == '24-hour') {
      return check_plain(date('H:i', $timestamp));
    }
    else {
      return check_plain(date('g:i a', $timestamp));
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    }
  }
  else {
    return '';
  }
}

<<<<<<< HEAD
/**
 * Implements _webform_csv_headers_component().
 */
function _webform_csv_headers_time($component, $export_options) {
=======

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
function _webform_csv_headers_time($component) {
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
function _webform_csv_data_time($component, $export_options, $value) {
  if ($value[0]) {
    $time = webform_date_array($value[0], 'time');
    if ($component['extra']['hourformat'] == '24-hour') {
      return sprintf('%02d', $time['hour']) . ':' . sprintf('%02d', $time['minute']);
    }
    else {
      $time = webform_time_convert($time, '12-hour');
      return $time['hour'] . ':' . sprintf('%02d', $time['minute']) . ' ' . $time['ampm'];
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
function _webform_csv_data_time($data, $component) {
  if (drupal_strlen($data['value']['0']) > 0 && drupal_strlen($data['value']['1']) > 0) {
    $timestamp = strtotime($data['value']['0'] .':'. $data['value']['1'] . $data['value']['2']);
    if ($component['extra']['hourformat'] == '24-hour') {
      return date('H:i', $timestamp);
    }
    else {
      return date('g:i a', $timestamp);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    }
  }
  else {
    return '';
  }
}

/**
<<<<<<< HEAD
 * Convert a time between a 24-hour and a 12-hour value.
 *
 * @param $array
 *   An array of hour, minute, second, and optionally ampm.
 * @param $format
 *   Either 12-hour or 24-hour.
 * @return
 *   An array with hour, minute, second, and ampm (if using "12-hour").
 */
function webform_time_convert($array, $format) {
  if ($array['hour'] !== '') {
    if ($format == '12-hour') {
      $array['ampm'] = ($array['hour'] >= 12 && $array['hour'] < 24) ? 'pm' : 'am';
      $array['hour'] = ($array['hour'] > 12 || $array['hour'] == 0) ? abs($array['hour'] - 12) : (int) $array['hour'];
    }
    elseif ($format == '24-hour' && isset($array['ampm'])) {
      $array['hour'] = ($array['hour'] < 12 && $array['ampm'] == 'pm') ? $array['hour'] + 12 : (int) $array['hour'];
    }
  }

  if ($format == '12-hour' && !isset($array['ampm'])) {
    $array['ampm'] = '';
  }
  elseif ($format == '24-hour' && isset($array['ampm'])) {
    unset($array['ampm']);
  }

  return $array;
=======
 * Theme a webform time element.
 */
function theme_webform_time($element) {
  $element['#type'] = 'element';
  $element['#children'] = '<div class="container-inline">'. drupal_render($element['hour']) . drupal_render($element['minute']) . drupal_render($element['ampm']) .'</div>';

  return theme('form_element', $element, $element['#children']);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
}
