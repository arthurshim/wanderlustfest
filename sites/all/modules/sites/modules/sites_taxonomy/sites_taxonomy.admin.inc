<?php

// $Id$

/**
 * Form for choosing which vocabulary to associate with the Sites module.
 *
 * @return
 *   Form array.
 */
function sites_taxonomy_admin_form_settings() {
  $vocs = taxonomy_get_vocabularies();
  foreach ($vocs as $vid => $voc) {
    $vocs[$vid] = $voc->name;
  }
  
  $form = array();
  $form['sites_taxonomy_vid'] = array(
    '#type' => 'select',
    '#title' => 'Vocabulary to use with Sites',
    '#description' => 'Each term in the vocabulary you choose should represent a site.  Tagging a node with a term will assign it to a site if that term has an associated site.  The chosen vocabulary may be multiple-select or single-select.',
    '#options' => array(0 => '<none>') + $vocs,
    '#default_value' => (sites_taxonomy_get_vid() ? sites_taxonomy_get_vid() : 0),
  );
  
  $form['sites_taxonomy_hide_sites_on_node_form'] = array(
    '#type' => 'checkbox',
    '#title' => 'Hide Sites select box on node forms',
    '#description' => 'Check this box if you want to hide the original Sites module select form on node edit pages.  This is useful when the Taxonomy module is already providing a form for the Sites vocabulary and you are worried that displaying both forms will confuse users.',
    '#default_value' => (variable_get('sites_taxonomy_hide_sites_on_node_form', 0) ? variable_get('sites_taxonomy_hide_sites_on_node_form') : 1),
  );
  
  return system_settings_form($form);
}

/**
 * Form for associating the currently selected vocabulary's terms with sites.
 *
 * @return
 *   Form object.
 */
function sites_taxonomy_admin_form_terms_sites() {
  $form = array();
  
  $sites_vid = sites_taxonomy_get_vid();
  if ($sites_vid === NULL) {
    $form['warning'] = array(
      '#value' => 'Nothing will appear here until you select a vocabulary to associate with the Sites module.  You will find that option under the "Vocabulary" tab.',
    );
    return $form;
  }
  
  $voc = taxonomy_get_tree($sites_vid);
  if (count($voc) == 0) {
    $form['warning'] = array(
      '#value' => 'The vocabulary you have associated with the Sites module does not have any terms.  Nothing will appear on this page until you add terms to that vocabulary.',
    );
    return $form;
  }

  $options = array();
  foreach ($voc as $term) {
    $options[$term->tid] = $term->name;
  }
  
  $form['all_sites'] = array(
    '#type' => 'select',
    '#title' => 'Term for nodes that should be available on all sites (optional)',
    '#options' => array(0 => '<none>') + $options,
    '#default_value' => variable_get('sites_taxonomy_tid_all_sites', NULL),
  );
  
  foreach (_sites_get_sites() as $sid => $site) {
    $form['site_' . $sid] = array(
      '#type' => 'select',
      '#title' => 'Term for site \'' . $site->name . '\'',
      '#options' => array(0 => '<none>') + $options,
      '#default_value' => $site->tid ? $site->tid : 0,
    );
  }
  
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => 'Save settings',
  );
  
  $form['#submit'][] = 'sites_taxonomy_admin_form_terms_sites_submit';
  
  return $form;
}

/**
 * Submit hook for form that associates Taxonomy terms with sites.
 */
function sites_taxonomy_admin_form_terms_sites_submit($form, &$form_state) {
  variable_set('sites_taxonomy_tid_all_sites', $form_state['values']['all_sites']);
  
  $sites = _sites_get_sites();
  foreach ($form_state['values'] as $key => $val) {
    if (substr($key, 0, 5) == 'site_') {
      $sid = substr($key, 5);
      $site = _sites_get_site((int)$sid);
      $site->tid = $val;
      $site->save();
    }
  }
  drupal_set_message('Settings saved.');
}


