<?php
/**
 * @file
 * This file contains the admin and GUI callbacks for the module that are not needed in day-to-day operations
 */

/*
 * Searches for a best match for default values
 */
function _webform_exact_target_best_match($field, $options) {
  $pct_match = 0;
  $best_match = 0;
  $pct_best_match = 0;
  foreach ($options as $key => $val) {
    similar_text($field, $val, $pct_match);
    if ($pct_match > $pct_best_match) {
      $best_match = $key;
      $pct_best_match = $pct_match;
    }
  }
  
  return ($pct_best_match > 75) ? $best_match : NULL;
}

/*
 * Implement callback for form construction
 */
function webform_exact_target_configure_form($form_state, $node) {
  //$node = node_load($nid);
  $form = array();
  $form_cfg = _webform_exact_target_get_mappings($node);
  $mappings = (!empty($form_cfg[WFET_COL_MAPPINGS])) ? $form_cfg[WFET_COL_MAPPINGS] : array();
  $def_listids = (!empty($form_cfg[WFET_COL_LISTIDS])) ? $form_cfg[WFET_COL_LISTIDS] : array();

  // Get the ExactTarget profile attributes
  $et_attrs = exact_target_api_get_attributes();
  if (!empty($et_attrs)) {
    // Get all available Webform fields and build option list for mapping
    $wf_fields = array('0' => '<< Select Webform Field >>');
    $wf_fields_req = array('0' => '<< Select Webform Field >>');
    foreach ($node->webform['components'] as $field) {
      $name = $field['name'];
      if ($field['mandatory']) {
        $name .= ' *';
      }
      $wf_fields[$field['form_key']] = $name; 
      if ($field['mandatory']) {
        $wf_fields_req[$field['form_key']] = $name;
      }
    }
    
    // Get all available ET lists and build option list:
    $tmp_lists = exact_target_api_get_lists();
    $et_list_groups = array();
    foreach ($tmp_lists as $listid) {
      $list_info = exact_target_api_get_list_info($listid);
      $et_list_groups[$list_info['list_type']][$listid] = t('Subscribe to emails from %listname', array('%listname' => $list_info['list_name']));
    }
    ksort($et_list_groups);
    
    $form[WFET_LIST_GROUPS] = array(
      '#type' => 'fieldset',
      '#title' => t('ExactTarget Subscription Lists'),
      '#description' => t('Please select the target subscription list(s) that may be subscribed to via this Webform'),
      '#tree' => TRUE,
    );

    foreach ($et_list_groups as $type => $et_lists) {
      $form[WFET_LIST_GROUPS][$type] = array(
        '#type' => 'fieldset',
        '#title' => $type,
        '#tree' => TRUE,
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
      );
      $form[WFET_LIST_GROUPS][$type][WFET_COL_LISTIDS] = array(
        '#type' => 'checkboxes',
        '#options' => $et_lists,
        '#default_value' => $def_listids,
        '#required' => FALSE,
      );
    }
    
    $form[WFET_COL_MAPPINGS] = array(
      '#tree' => TRUE,
    );
    foreach ($et_attrs as $attr) {
      $defval = (!empty($mappings[$attr['fieldid']])) ? $mappings[$attr['fieldid']] : _webform_exact_target_best_match($attr['name'], $wf_fields);
      $form[WFET_COL_MAPPINGS][$attr['fieldid']] = array(
        '#type' => 'select',
        '#title' => check_plain($attr['name']),
        '#options' => (ET_TRUE == $attr['required']) ? $wf_fields_req : $wf_fields,
        '#default_value' => $defval,
        '#required' => (ET_TRUE == $attr['required']) ? TRUE : FALSE,
      );
    }

    // Set node info as it doesn't get passed to the submit handler
    $form[WFET_COL_NID] = array(
      '#type' => 'hidden',
      '#value' => $node->nid,
    );
    $form[WFET_COL_VID] = array(
      '#type' => 'hidden',
      '#value' => (!empty($node->vid)) ? $node->vid : 0,
    );
    
    $form[WFET_MAPPINGS_INFO] = array(
      '#type' => 'markup',
      '#value' => t('<p>Select the Webform field that should be mapped to the ExactTarget profile attribute.<br />Note that ExactTarget attributes that are required will only map to a Webform required field.<br />All required fields are designated with a <strong>*</strong> next to their name.</p>'),
    );
    $form['submit'] = array(
      '#type' => 'submit', 
      '#value' => t('Save')
    );
    $form['clear'] = array(
      '#type' => 'submit', 
      '#value' => 'Reset Form', 
      '#validate' => array('webform_exact_target_configure_form_clear'),
    );
  }
  else {
    $form['msg'] = array(
      '#type' => 'markup',
      '#value' => t('No profile attributes are defined for this account, or else there was an error retrieving the attribute list.  Please !check_log_link for errors.', array('!check_log_link' => l('check the log', 'admin/reports/dblog'))),
    );
  }

  return $form;
}

/*
 * Implements theme callback for form rendering
 */
function theme_webform_exact_target_configure_form($form) {
  $output = '';

  // Render list select:
  $output .= drupal_render($form[WFET_LIST_GROUPS]);

  if (!empty($form[WFET_COL_MAPPINGS])) {
    // Render fields as two-column table:
    $header = array(t('ExactTarget Field'), t('Webform Field'));
    $rows = array();
    foreach (element_children($form[WFET_COL_MAPPINGS]) as $id) {
      $row = array();
      $field = &$form[WFET_COL_MAPPINGS][$id];
      $label = $field['#title'];
      if ($field['#required']) {
        $label .= ' <span class="form-required" title="This field is required.">*</span>';
      }
      $row[] =  $label;
      $field['#title'] = '';
      $row[] = drupal_render($field);
      $rows[] = $row;
    }
    $output .= theme('table', $header, $rows);
  }

  // Render rest of the form elements
  $output .= drupal_render($form);
  
  return $output;
}

/*
 * Validate function for our reset button
 */
function webform_exact_target_configure_form_clear($form, &$form_state) {
  unset($form_state['values']);
  unset($form_state['storage']);

  $form_state['rebuild'] = TRUE;
}

/*
 * Implement callback for validation of form 'webform_exact_target_api_configure_form'
 */
function webform_exact_target_configure_form_validate($form, &$form_state) {
  $values = $form_state['values'];
  
  foreach ($values[WFET_COL_MAPPINGS] as $id => $val) {
    // Check that a source field was selected:
    if ($form[WFET_COL_MAPPINGS][$id]['#required'] && '0' == $val) {
      form_set_error($id, t('No source Webform field selected for required ExactTarget field %field.  Please select a Webform field from the dropdown.', array('%field' => $form[WFET_COL_MAPPINGS][$id]['#title'])));
    }
  }
}

/*
 * Implement callback for submit handling of form 'webform_exact_target_api_configure_form'
 */
function webform_exact_target_configure_form_submit($form, &$form_state) {
  $node = node_load($form_state['values'][WFET_COL_NID], $form_state['values'][WFET_COL_VID]);
  $mappings = $form_state['values'];
  
  // Unwind list fieldsets into flat list
  unset($mappings[WFET_LIST_GROUPS]);
  $mappings[WFET_COL_LISTIDS] = array();
  foreach ($form_state['values'][WFET_LIST_GROUPS] as $type => $elems) {
    $lists = $elems[WFET_COL_LISTIDS];
    foreach ($lists as $key => $val) {
      if ($key == $val) {
        $mappings[WFET_COL_LISTIDS][] = $val; 
      }
    }
  }
  
  _webform_exact_target_set_mappings($node, $mappings);
  drupal_set_message(t('Webform ExactTarget settings successfully saved.'), 'status');
}
