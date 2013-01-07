<?php

// $Id: sites.admin.inc,v 1.1.2.3 2010/05/06 15:47:56 brynbellomy Exp $

/**
 * Admin landing page registered in hook_menu()
 */
#echo "t<pre>"; print_r(_sites_get_sites()); echo "</pre>";exit;
function sites_list_sites() {
  $sites = _sites_get_sites();
  
  $rows = array();
  foreach ($sites as $sid => $site) {
    $edit_link = l('edit', 'admin/build/sites/edit/' . $site->sid);
    $delete_link = l('delete', 'admin/build/sites/delete/' . $site->sid);
    $rows[] = array($site->title, $site->name, $site->purl_prefix, $edit_link . ' ' . $delete_link);
  }
  $output = theme('table', array(t('Administrative name'), t('Site name (visible to users)'), t(variable_get('purl_method_sites', 'path')), ''), $rows);
  $output .= drupal_get_form('sites_settings_form');
  return $output;
}

function sites_settings_form(&$form_state) {
  $form = array();
  return system_settings_form($form);
}

/**
 * Add/edit sites form
 */
function sites_site_form(&$form_state, $site_id = NULL) {
  $site = NULL;
  if (!$site_id) {
      $site = new site();
  }
  else {
      $site = _sites_get_site($site_id);
  }

  $form = array();

  $form['title'] = array(
    '#title' => 'Site title (used in administrative interface only)',
    '#type' => 'textfield',
    '#default_value' => $site->title,
  );

  $form['front_page'] = array(
    '#title' => 'Front page',
    '#description' => 'Leave blank to use sitewide frontpage',
    '#type' => 'textfield',
    '#default_value' => $site->front_page,
  );
  
  $form['site_name'] = array(
    '#title' => 'Site name',
    '#description' => 'Used by some themes.  Will be visible to users.',
    '#type' => 'textfield',
    '#default_value' => $site->name,
  );

  $form['primary_links'] = array(
    '#title' => 'Primary links',
    '#description' => 'Unique menu name of the menu to insert into $primary_links (leave blank to use default Primary Links menu)',
    '#type' => 'textfield',
    '#default_value' => $site->menu_primary_links,
  );

  $form['secondary_links'] = array(
    '#title' => 'Secondary links',
    '#description' => 'Unique menu name of the menu to insert into $secondary_links (leave blank to use default Secondary Links menu)',
    '#type' => 'textfield',
    '#default_value' => $site->menu_secondary_links,
  );

  // Add context prefix form
  $form['purl'] = purl_form('sites', $site_id, $site->purl_prefix);

  $form['site_id'] = array(
    '#type' => 'hidden',
    '#value' => $site_id,
  );
  
  $form['end'] = array(
    '#weight' => 999,
  );

  $form['end']['submit'] = array(
    '#value' => 'Submit',
    '#type' => 'submit',
  );

  if ($site_id) {
    $form['end']['delete'] = array(
      '#value' => l('Delete','admin/build/sites/delete/' . $site_id),
    );
  }

  return $form;
}

/**
 * Add/edit site submit handler
 */
function sites_site_form_submit($form, &$form_state) {
  if ($form_state['values']['site_id'] == 0) {
    $site = new site();
  }
  else {
    $site = _sites_get_site($form_state['values']['site_id']);
  }

  $site->title = $form_state['values']['title'];
  $site->front_page = $form_state['values']['front_page'];
  $site->name = $form_state['values']['site_name'];
  $site->menu_primary_links = $form_state['values']['primary_links'];
  $site->menu_secondary_links = $form_state['values']['secondary_links'];

  if (isset($form_state['values']['purl']['value'])) {
    $site->purl_prefix = $form_state['values']['purl']['value'];
  }
  
  if ($site->sid) {
    $op = 'update';
  }
  else {
    $op = 'insert';
  }
  
  sites_invoke_siteapi($site, "before $op site", $form_state, 'sites_site_form');
  $site->save();
  sites_invoke_siteapi($site, "after $op site", $form_state, 'sites_site_form');
}

/**
 * Confirmation form for deleting a site.
 */
function sites_site_delete_form($form_state, $site_id) {
  $site = _sites_get_site($site_id);
  if (!$site) {
    drupal_goto('admin/build/sites');
    return;
  }

  $form = array();
  $form['site_id'] = array(
    '#type' => 'value',
    '#value' => $site_id
  );

  $form = confirm_form($form, t('Are you sure you want to delete the site \'@sitename\'?', array('@sitename' => $site->title)), 'admin/build/sites');

  return $form;
}

/**
 * Submit handler for delete confirmation form.
 */
function sites_site_delete_form_submit($form, &$form_state) {
  $site_id = $form_state['values']['site_id'];

  _sites_delete_site($site_id);
  $form_state['redirect'] = 'admin/build/sites';
}

/**
 * Form for changing shared login settings.
 */
/*function sites_admin_form_shared_login() {
  $form = array();
  
  $form['instructions'] = array(
    '#value' => 'Choose which sites should be ',
  );
  
  return 
}*/
