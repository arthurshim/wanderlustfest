<?php
<<<<<<< HEAD

/**
 * @file
 * Webform module grid component.
 */

// Grid depends on functions provided by select.
webform_component_include('select');

/**
 * Implements _webform_defaults_component().
=======
// $Id: grid.inc,v 1.3.2.20 2010/01/21 02:53:36 quicksketch Exp $

/**
 * @file
 *   Webform module grid component.
 */

/**
 * Create a default grid component.
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 */
function _webform_defaults_grid() {
  return array(
    'name' => '',
    'form_key' => NULL,
<<<<<<< HEAD
=======
    'email' => 1,
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    'mandatory' => 0,
    'pid' => 0,
    'weight' => 0,
    'extra' => array(
      'options' => '',
      'questions' => '',
      'optrand' => 0,
      'qrand' => 0,
<<<<<<< HEAD
      'title_display' => 0,
      'custom_option_keys' => 0,
      'custom_question_keys' => 0,
      'description' => '',
      'private' => FALSE,
=======
      'description' => '',
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    ),
  );
}

<<<<<<< HEAD

/**
 * Implements _webform_theme_component().
 */
function _webform_theme_grid() {
  return array(
    'webform_grid' => array(
      'arguments' => array('grid_element' => NULL),
      'file' => 'components/grid.inc',
    ),
    'webform_display_grid' => array(
      'arguments' => array('element' => NULL),
      'file' => 'components/grid.inc',
    ),
  );
}

/**
 * Implements _webform_edit_component().
 */
function _webform_edit_grid($component) {
  $form = array();

  if (module_exists('options_element')) {
    $form['options'] = array(
      '#type' => 'fieldset',
      '#title' => t('Options'),
      '#collapsible' => TRUE,
      '#description' => t('Options to select across the top. Usually these are ratings such as "poor" through "excellent" or "strongly disagree" through "strongly agree".'),
      '#attributes' => array('class' => 'webform-options-element'),
      '#element_validate' => array('_webform_edit_validate_options'),
    );
    $form['options']['options'] = array(
      '#type' => 'options',
      '#options' => _webform_select_options_from_text($component['extra']['options'], TRUE),
      '#optgroups' => FALSE,
      '#default_value' => FALSE,
      '#optgroups' => FALSE,
      '#key_type' => 'mixed',
      '#key_type_toggle' => t('Customize option keys (Advanced)'),
      '#key_type_toggled' => $component['extra']['custom_option_keys'],
    );

    $form['questions'] = array(
      '#type' => 'fieldset',
      '#title' => t('Questions'),
      '#collapsible' => TRUE,
      '#description' => t('Questions list down the side of the grid.'),
      '#attributes' => array('class' => 'webform-options-element'),
      '#element_validate' => array('_webform_edit_validate_options'),
    );
    $form['questions']['options'] = array(
      '#type' => 'options',
      '#options' => _webform_select_options_from_text($component['extra']['questions'], TRUE),
      '#optgroups' => FALSE,
      '#default_value' => FALSE,
      '#optgroups' => FALSE,
      '#key_type' => 'mixed',
      '#key_type_toggle' => t('Customize question keys (Advanced)'),
      '#key_type_toggled' => $component['extra']['custom_question_keys'],
    );
  }
  else {
    $form['extra']['options'] = array(
      '#type' => 'textarea',
      '#title' => t('Options'),
      '#default_value' => $component['extra']['options'],
      '#description' => t('Options to select across the top. One option per line. <strong>Key-value pairs MUST be specified as "safe_key|Some readable option"</strong>. Use of only alphanumeric characters and underscores is recommended in keys.') . theme('webform_token_help'),
      '#cols' => 60,
      '#rows' => 5,
      '#weight' => -3,
      '#required' => TRUE,
      '#wysiwyg' => FALSE,
      '#element_validate' => array('_webform_edit_validate_select'),
    );
    $form['extra']['questions'] = array(
      '#type' => 'textarea',
      '#title' => t('Questions'),
      '#default_value' => $component['extra']['questions'],
      '#description' => t('Questions list down the side of the grid. One question per line. <strong>Key-value pairs MUST be specified as "safe_key|Some readable option"</strong>. Use of only alphanumeric characters and underscores is recommended in keys.') . theme('webform_token_help'),
      '#cols' => 60,
      '#rows' => 5,
      '#weight' => -2,
      '#required' => TRUE,
      '#wysiwyg' => FALSE,
      '#element_validate' => array('_webform_edit_validate_select'),
    );
  }

  $form['display']['optrand'] = array(
    '#type' => 'checkbox',
    '#title' => t('Randomize Options'),
    '#default_value' => $component['extra']['optrand'],
    '#description' => t('Randomizes the order of options on the top when they are displayed in the form.'),
    '#parents' => array('extra', 'optrand')
  );
  $form['display']['qrand'] = array(
    '#type' => 'checkbox',
    '#title' => t('Randomize Questions'),
    '#default_value' => $component['extra']['qrand'],
    '#description' => t('Randomize the order of the questions on the side when they are displayed in the form.'),
    '#parents' => array('extra', 'qrand')
  );
  return $form;
}

/**
 * Implements _webform_render_component().
 */
function _webform_render_grid($component, $value = NULL, $filter = TRUE) {
  $element = array(
    '#type' => 'webform_grid',
    '#title' => $filter ? _webform_filter_xss($component['name']) : $component['name'],
    '#title_display' => $component['extra']['title_display'] ? $component['extra']['title_display'] : 'before',
    '#required' => $component['mandatory'],
    '#weight' => $component['weight'],
    '#description' => $filter ? _webform_filter_descriptions($component['extra']['description']) : $component['extra']['description'],
    '#grid_questions' => _webform_select_options_from_text($component['extra']['questions'], TRUE),
    '#grid_options' => _webform_select_options_from_text($component['extra']['options'], TRUE),
    '#optrand' => $component['extra']['optrand'],
    '#qrand' => $component['extra']['qrand'],
    '#theme' => 'webform_grid',
    '#theme_wrappers' => array('webform_element_wrapper'),
    '#process' => array('webform_expand_grid'),
    '#pre_render' => array('webform_element_title_display'),
    '#post_render' => array('webform_element_wrapper'),
    '#webform_component' => $component,
  );

  if ($value) {
    $element['#default_value'] = $value;
  }

  return $element;
}

/**
 * A Form API #process function for Webform grid fields.
 */
function webform_expand_grid($element) {
  $options = $element['#grid_options'];
  $questions = $element['#grid_questions'];

  if (!empty($element['#optrand'])) {
    _webform_shuffle_options($options);
  }

  if (!empty($element['#qrand'])) {
    _webform_shuffle_options($questions);
  }

  foreach ($questions as $key => $question) {
    if ($question != '') {
      $element[$key] = array(
        '#title' => $question,
        '#required' => $element['#required'],
        '#options' => $options,
        '#type' => 'radios',
        '#process' => array('expand_radios', 'webform_expand_select_ids'),

        // Webform handles validation manually.
        '#validated' => TRUE,
        '#webform_validated' => FALSE,
      );
    }
  }

  $value = isset($element['#default_value']) ? $element['#default_value'] : array();
  foreach (element_children($element) as $key) {
    if (isset($value[$key])) {
      $element[$key]['#default_value'] = ($value[$key] !== '') ? $value[$key] : FALSE;
    }
    else {
      $element[$key]['#default_value'] = FALSE;
    }
  }

  return $element;
}

/**
 * Implements _webform_display_component().
 */
function _webform_display_grid($component, $value, $format = 'html') {
  $questions = _webform_select_options_from_text($component['extra']['questions'], TRUE);
  $options = _webform_select_options_from_text($component['extra']['options'], TRUE);

  $element = array(
    '#title' => $component['name'],
    '#weight' => $component['weight'],
    '#format' => $format,
    '#grid_questions' => $questions,
    '#grid_options' => $options,
    '#theme' => 'webform_display_grid',
    '#theme_wrappers' => $format == 'html' ? array('webform_element', 'webform_element_wrapper') : array('webform_element_text'),
    '#post_render' => array('webform_element_wrapper'),
    '#sorted' => TRUE,
    '#webform_component' => $component,
  );

  foreach ($questions as $key => $question) {
    if ($question !== '') {
      $element[$question] = array(
        '#title' => $question,
        '#value' => isset($value[$key]) ? $value[$key] : NULL,
      );
    }
  }

  return $element;
}

/**
 * Format the text output for this component.
 */
function theme_webform_display_grid($element) {
  $component = $element['#webform_component'];
  $format = $element['#format'];

  if ($format == 'html') {
    $rows = array();
    $header = array(array('data' => '', 'class' => 'webform-grid-question'));
    foreach ($element['#grid_options'] as $option) {
      $header[] = array('data' => _webform_filter_xss($option), 'class' => 'checkbox webform-grid-option');
    }
    foreach (element_children($element) as $key) {
      $row = array();
      $row[] = array('data' => _webform_filter_xss($element[$key]['#title']), 'class' => 'webform-grid-question');
      foreach ($element['#grid_options'] as $option_value => $option_label) {
        if (strcmp($option_value, $element[$key]['#value']) == 0) {
          $row[] = array('data' => '<strong>X</strong>', 'class' => 'checkbox webform-grid-option');
        }
        else {
          $row[] = array('data' => '&nbsp;', 'class' => 'checkbox webform-grid-option');
        }
      }
      $rows[] = $row;
    }

    $option_count = count($header) - 1;
    $output = theme('table', $header, $rows, array('class' => 'webform-grid webform-grid-' . $option_count));
  }
  else {
    $items = array();
    foreach (element_children($element) as $key) {
      $items[] = ' - ' . $element[$key]['#title'] . ': ' . (isset($element['#grid_options'][$element[$key]['#value']]) ? $element['#grid_options'][$element[$key]['#value']] : '');
    }
    $output = implode("\n", $items);
  }

  return $output;
}

/**
 * Implements _webform_analysis_component().
 */
function _webform_analysis_grid($component, $sids = array()) {
  // Generate the list of options and questions.
  $options = _webform_select_options_from_text($component['extra']['options'], TRUE);
  $questions = _webform_select_options_from_text($component['extra']['questions'], TRUE);

  // Generate a lookup table of results.
  $placeholders = count($sids) ? array_fill(0, count($sids), "'%s'") : array();
  $sidfilter = count($sids) ? " AND sid in (" . implode(",", $placeholders) . ")" : "";
  $query = 'SELECT no, data, count(data) as datacount ' .
    ' FROM {webform_submitted_data} ' .
    ' WHERE nid = %d ' .
    ' AND cid = %d ' .
    " AND data != '' " . $sidfilter .
=======
/**
 * Create a set of form items to be displayed on the form for editing this component.
 * Use care naming the form items, as this correlates directly to the database schema.
 * The component "Name" and "Description" fields are added to every component type and
 * are not necessary to specify here (although they may be overridden if desired).
 * @return
 *   An array of form items to be displayed on the edit component page
 */
function _webform_edit_grid($currfield) {
  $edit_fields = array();
  $edit_fields['extra']['options'] = array(
    '#type' => 'textarea',
    '#title' => t('Options'),
    '#default_value' => $currfield['extra']['options'],
    '#description' => t('Options to select across the top. One option per line. Key-value pairs may be entered seperated by pipes. i.e. safe_key|Some readable option') . theme('webform_token_help'),
    '#cols' => 60,
    '#rows' => 5,
    '#weight' => -3,
    '#required' => TRUE,
  );
  $edit_fields['extra']['questions'] = array(
    '#type' => 'textarea',
    '#title' => t('Questions'),
    '#default_value' => $currfield['extra']['questions'],
    '#description' => t('Questions list down the left side. One question per line.') . theme('webform_token_help'),
    '#cols' => 60,
    '#rows' => 5,
    '#weight' => -2,
    '#required' => TRUE,
  );
  $edit_fields['extra']['optrand'] = array(
    '#type' => 'checkbox',
    '#title' => t('Randomize Options'),
    '#default_value' => $currfield['extra']['optrand'],
    '#description' => t('Randomizes the order of options on the top when they are displayed in the form.'),
  );
  $edit_fields['extra']['qrand'] = array(
    '#type' => 'checkbox',
    '#title' => t('Randomize Questions'),
    '#default_value' => $currfield['extra']['qrand'],
    '#description' => t('Randomize the order of the questions on the side when they are displayed in the form.'),
  );
  return $edit_fields;
}

function _webform_edit_validate_grid($form_values) {
  // Currently no validation for selects.
  return TRUE;
}

function _webform_render_grid($component, $random = TRUE) {
  $form_item = array(
    '#title' => $component['name'],
    '#required' => $component['mandatory'],
    '#weight' => $component['weight'],
    '#theme' => 'webform_grid',
    '#description'   => _webform_filter_descriptions($component['extra']['description']),
  );

  $questions = _webform_grid_options($component['extra']['questions']);
  $options = _webform_grid_options($component['extra']['options']);

  if ($component['extra']['optrand'] && $random) {
    // This maneuver shuffles the array keys, then uses them as
    // the basis for ordering the options.
    $aux = array();
    $keys = array_keys($options);
    shuffle($keys);
    foreach ($keys as $key) {
      $aux[$key] = $options[$key];
      unset($options[$key]);
    }
    $options = $aux;
  }
  if ($component['extra']['qrand'] && $random) {
    $aux = array();
    $keys = array_keys($questions);
    shuffle($keys);
    foreach ($keys as $key) {
      $aux[$key] = $questions[$key];
      unset($questions[$key]);
    }
    $questions = $aux;
  }
  foreach ($questions as $question) {
    if ($question != '') {
      // Remove quotes from keys to prevent HTML breakage.
      $form_item[str_replace(array('"', "'"), '', $question)] = array(
        '#title'         => $question,
        '#required'      => $component['mandatory'],
        '#prefix'        => '<div class="webform-component-'. $component['type'] .'" id="webform-component-'. $component['form_key'] .'">',
        '#suffix'        => '</div>',
        '#options'       => $options,
        '#type'          => 'radios',
      );
    }
  }

  return $form_item;
}

/**
 * Display the result of a grid submission. The output of this function will be
 * displayed under the "results" tab then "submissions"
 * @param $data
 *   An array of information containing the submission result, directly
 *   correlating to the webform_submitted_data database schema
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema
 * @param $enabled
 *   If enabled, the value may be changed. Otherwise it will set to readonly.
 * @return
 *   Textual output formatted for human reading.
 */
function _webform_submission_display_grid($data, $component, $enabled = FALSE) {
  $form_item = _webform_render_grid($component, FALSE);
  $cid = 0;
  foreach (element_children($form_item) as $key) {
    $form_item[$key]['#default_value'] = $data['value'][$cid++];
    $form_item[$key]['#disabled'] = !$enabled;
  }
  return $form_item;
}

/**
 * Translates the submitted 'safe' form values back into their un-edited
 * original form.
 *
 * @param $data
 *   The POST data associated with the component
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema
 * @return
 *   Nothing
 */
function _webform_submit_grid(&$data, $component) {
  $options = drupal_map_assoc(array_flip(_webform_grid_options($component['extra']['options'])));

  // Questions are a bit more tricky, since quotes were removed from them in
  // _webform_render_grid(). Build a list of no_quotes => with_qoutes questions.
  $questions = array();
  foreach (_webform_grid_options($component['extra']['questions']) as $key => $question) {
    $safe_question = str_replace(array('"', "'"), '', $question);
    $questions[$safe_question] = $question;
  }

  if (is_array($data)) {
    foreach ($data as $key => $value) {
      if ($value !== '') {
        $data[$key] = $options[$value];
      }
    }
  }
  elseif ($data !== '') {
    $data = $options[$data];
  }

  // Put the form in the original option order before saving.
  // Return the final data with the quotes back in place.
  $ordered_data = array();
  foreach ($questions as $safe_question => $question) {
    if (isset($data[$safe_question])) {
      $ordered_data[$question] = $data[$safe_question];
    }
  }

  $data = $ordered_data;
}
/**
 * Format the output of emailed data for this component.
 *
 * @param $data
 *   A string or array of the submitted data.
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @return
 *   Textual output to be included in the email.
 */
function theme_webform_mail_grid($data, $component) {
  $questions = _webform_grid_options($component['extra']['questions']);
  $output = $component['name'] .":\n";
  foreach ($questions as $key => $question) {
    $output .= '  - '. $question .':'. ($data[$question] == '' ? '' : ' '. $data[$question]) ."\n";
  }
  return $output;
}

/**
 * function _webform_help_select
 * Module specific instance of hook_help().
 */
function _webform_help_grid($section) {
  switch ($section) {
    case 'admin/settings/webform#grid_description':
      return t('Allows creation of grid questions, denoted by radio buttons.');
  }
}

/**
 * Module specific instance of hook_theme().
 */
function _webform_theme_grid() {
  return array(
    'webform_grid' => array(
      'arguments' => array('grid_element' => NULL),
    ),
    'webform_mail_grid' => array(
      'arguments' => array('data' => NULL, 'component' => NULL),
    ),
  );
}

/**
 * Calculate and returns statistics about results for this component from all
 * submission to this webform. The output of this function will be displayed
 * under the "results" tab then "analysis".
 *
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
function _webform_analysis_rows_grid($component, $sids = array()) {
  // Generate the list of options and questions.
  $options = _webform_grid_options($component['extra']['options']);
  $questions = array_values(_webform_grid_options($component['extra']['questions']));

  // Generate a lookup table of results.
  $placeholders = count($sids) ? array_fill(0, count($sids), "'%s'") : array();
  $sidfilter = count($sids) ? " AND sid in (".implode(",", $placeholders).")" : "";
  $query = 'SELECT no, data, count(data) as datacount '.
    ' FROM {webform_submitted_data} '.
    ' WHERE nid = %d '.
    ' AND cid = %d '.
    " AND data != '' ". $sidfilter .
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    ' GROUP BY no, data';
  $result = db_query($query, array_merge(array($component['nid'], $component['cid']), $sids));
  $counts = array();
  while ($data = db_fetch_object($result)) {
    $counts[$data->no][$data->data] = $data->datacount;
  }

  // Create an entire table to be put into the returned row.
  $rows = array();
  $header = array('');

  // Add options as a header row.
  foreach ($options as $option) {
<<<<<<< HEAD
    $header[] = _webform_filter_xss($option);
=======
    $header[] = $option;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }

  // Add questions as each row.
  foreach ($questions as $qkey => $question) {
<<<<<<< HEAD
    $row = array(_webform_filter_xss($question));
=======
    $row = array($question);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    foreach ($options as $okey => $option) {
      $row[] = !empty($counts[$qkey][$okey]) ? $counts[$qkey][$okey] : 0;
    }
    $rows[] = $row;
  }
  $output = theme('table', $header, $rows, array('class' => 'webform-grid'));

<<<<<<< HEAD

=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  return array(array(array('data' => $output, 'colspan' => 2)));
}

/**
<<<<<<< HEAD
 * Implements _webform_table_component().
 */
function _webform_table_grid($component, $value) {
  $questions = _webform_select_options_from_text($component['extra']['questions'], TRUE);
  $options = _webform_select_options_from_text($component['extra']['options'], TRUE);

  $output = '';
  // Set the value as a single string.
  foreach ($questions as $key => $label) {
    if (isset($value[$key]) && isset($options[$value[$key]])) {
      $output .= _webform_filter_xss($label) . ': ' . _webform_filter_xss($options[$value[$key]]) . '<br />';
    }
  }

=======
 * function _webform_table_data_select
 * Return the result of this component's submission for display in a table. The output of this function will be displayed under the "results" tab then "table"
 * @param $data An array of information containing the submission result, directly correlating to the webform_submitted_data database schema
 * @returns Textual output formatted for human reading.
 */
function _webform_table_data_grid($data, $component) {
  $questions = array_values(_webform_grid_options($component['extra']['questions']));
  $output = '';
  // Set the value as a single string.
  if (is_array($data['value'])) {
    foreach ($data['value'] as $item => $value) {
      if ($value !== '') {
        $output .= $questions[$item] .': '. check_plain($value) .'<br />';
      }
    }
  }
  else {
    $output = check_plain(!isset($data['value']['0']) ? '' : $data['value']['0']);
  }
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  return $output;
}

/**
<<<<<<< HEAD
 * Implements _webform_csv_headers_component().
 */
function _webform_csv_headers_grid($component, $export_options) {
  $header = array();
  $header[0] = array('');
  $header[1] = array($component['name']);
  $items = _webform_select_options_from_text($component['extra']['questions'], TRUE);
=======
 * Return the header information for this component to be displayed in a comma
 * seperated value file. The output of this function will be displayed under
 * the "results" tab then "download".
 *
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @return
 *   An array of data to be displayed in the first three rows of a CSV file, not
 *   including either prefixed or trailing commas.
 */
function _webform_csv_headers_grid($component) {
  $header = array();
  $header[0] = array('');
  $header[1] = array($component['name']);
  $items = _webform_grid_options($component['extra']['questions']);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $count = 0;
  foreach ($items as $key => $item) {
    // Empty column per sub-field in main header.
    if ($count != 0) {
      $header[0][] = '';
      $header[1][] = '';
    }
    // The value for this option.
    $header[2][] = $item;
    $count++;
  }

  return $header;
}

/**
<<<<<<< HEAD
 * Implements _webform_csv_data_component().
 */
function _webform_csv_data_grid($component, $export_options, $value) {
  $questions = _webform_select_options_from_text($component['extra']['questions'], TRUE);
  $options = _webform_select_options_from_text($component['extra']['options'], TRUE);
  $return = array();
  foreach ($questions as $key => $question) {
    if (isset($value[$key]) && isset($options[$value[$key]])) {
      $return[] = $export_options['select_keys'] ? $value[$key] : $options[$value[$key]];
    }
    else {
      $return[] = '';
    }
=======
 * Return the result of a textfield submission. The output of this function will
 * be displayed under the "results" tab then "submissions".
 *
 * @param $data
 *   An array of information containing the submission result, directly
 *   correlating to the webform_submitted_data database schema.
 * @return
 *   Textual output formatted for CSV, not including either prefixed or trailing
 *   commas.
 */
function _webform_csv_data_grid($data, $component) {
  $questions = array_keys(_webform_grid_options($component['extra']['questions']));
  $return = array();
  foreach ($questions as $key => $question) {
    $return[] = isset($data['value'][$key]) ? $data['value'][$key] : '';
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }
  return $return;
}

<<<<<<< HEAD
function theme_webform_grid($element) {
  $rows = array();
  $header = array(array('data' => '', 'class' => 'webform-grid-question'));
  $first = TRUE;
  foreach (element_children($element) as $key) {
    $question_element = $element[$key];
=======
function theme_webform_grid($grid_element) {
  $rows = array();
  $header = array('');
  $first = TRUE;
  foreach (element_children($grid_element) as $key) {
    $question_element = $grid_element[$key];
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

    // Set the header for the table.
    if ($first) {
      foreach ($question_element['#options'] as $option) {
<<<<<<< HEAD
        $header[] = array('data' => _webform_filter_xss($option), 'class' => 'checkbox webform-grid-option');
=======
        $header[] = $option;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      }
      $first = FALSE;
    }

    // Create a row with the question title.
<<<<<<< HEAD
    $row = array(array('data' => _webform_filter_xss($question_element['#title']), 'class' => 'webform-grid-question'));
=======
    $row = array(check_plain($question_element['#title']));
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

    // Render each radio button in the row.
    $radios = expand_radios($question_element);
    foreach (element_children($radios) as $key) {
      unset($radios[$key]['#title']);
<<<<<<< HEAD
      $row[] = array('data' => drupal_render($radios[$key]), 'class' => 'checkbox webform-grid-option');
=======
      $row[] = drupal_render($radios[$key]);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    }
    $rows[] = $row;
  }

<<<<<<< HEAD
  $option_count = count($header) - 1;
  return theme('form_element', $element, theme('table', $header, $rows, array('class' => 'webform-grid webform-grid-' . $option_count)));
=======
  return theme('form_element', $grid_element, theme('table', $header, $rows, array('class' => 'webform-grid')));
}

/**
 * Utility function to split user-entered values from new-line separated
 * text into an array of options.
 */
function _webform_grid_options($text) {
  $options = array();
  $rows = array_filter(explode("\n", _webform_filter_values(trim($text))));
  foreach ($rows as $option) {
    $option = trim($option);
    if (preg_match('/^([^|]+)\|(.*)$/', $option, $matches)) {
      $options[$matches[1]] = $matches[2];
    }
    else {
      $options[$option] = $option;
    }
  }
  return $options;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
}
