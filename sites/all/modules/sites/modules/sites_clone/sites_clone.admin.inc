<?php

// $Id$

/**
 * Form for cloning a site.
 *
 * @return
 *   Form array.
 */
function sites_clone_admin_form() {
  $sites = _sites_get_sites();
  foreach ($sites as $sid => $site) {
    $sites[$sid] = $site->name;
  }
  
  $menus = menu_get_menus();
  
  $form = array();
  /*$form['sid_to_clone'] = array(
    '#type' => 'select',
    '#title' => 'Site to clone',
    '#description' => 'Select which site you want to clone.',
    '#options' => $sites,
  );*/
  
  $form['sid_to_clone_into'] = array(
    '#type' => 'select',
    '#title' => 'Site into which to insert new cloned content',
    '#description' => 'Select which site should receive the cloned data.',
    '#options' => $sites,
  );
  
  $form['clone_menu'] = array(
    '#type' => 'fieldset',
    '#title' => 'Clone a menu and its nodes',
  );
  
  $form['clone_menu']['clone_menu_enabled'] = array(
    '#type' => 'checkbox',
    '#title' => 'Enabled',
  );
  
  $form['clone_menu']['menu_to_clone'] = array(
    '#type' => 'select',
    '#title' => 'Menu to clone',
    '#description' => 'Select which menu will be cloned to populate the new site with content.',
    '#options' => $menus,
  );
  
  $form['clone_menu']['new_machine_name'] = array(
    '#type' => 'textfield',
    '#title' => 'Machine-readable name of new menu',
    '#description' => 'Only alphanumeric characters and hyphens.  Whatever you enter will automatically be prefixed with "menu-".',
  );
  
  $form['clone_menu']['new_human_name'] = array(
    '#type' => 'textfield',
    '#title' => 'Human-readable name of new menu',
    '#description' => 'Used in the administrative interface.  Use any characters.',
  );
  
  $form['clone_menu']['new_description'] = array(
    '#type' => 'textfield',
    '#title' => 'Description (optional)',
    '#description' => 'Describe the menu.',
  );
  
  $form['clone_by_nid'] = array(
    '#type' => 'fieldset',
    '#title' => 'Clone nodes by nid',
  );
  
  $form['clone_by_nid']['clone_by_nid_enabled'] = array(
    '#type' => 'checkbox',
    '#title' => 'Enabled',
  );
  
  $form['clone_by_nid']['nids_to_clone'] = array(
    '#type' => 'textfield',
    '#title' => 'List of nids',
    '#description' => 'Enter a comma-separated list of nids to clone.  This is useful when there are a few nodes outside of the cloned menu that also need to be cloned.',
  );
  
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => 'Submit',
  );
  
  $form['#submit'] = array('sites_clone_admin_form_submit');
  
  return $form;
}

/**
 * Validate handler for clone form.
 */
function sites_clone_admin_form_validate($form, &$form_state) {
  $item = $form_state['values'];
  if ($item['clone_menu_enabled']) {
    if (empty($item['new_machine_name'])) {
      form_set_error('new_machine_name', 'Required fields are misssing.');
    }
    if (empty($item['new_human_name'])) {
      form_set_error('new_human_name', 'Required fields are misssing.');
    }
    
    if (preg_match('/[^a-z0-9-]/', $item['new_machine_name'])) {
      form_set_error('new_machine_name', t('The menu name may only consist of lowercase letters, numbers, and hyphens.'));
    }
    if (strlen($item['new_machine_name']) > MENU_MAX_MENU_NAME_LENGTH_UI) {
      form_set_error('new_machine_name', format_plural(MENU_MAX_MENU_NAME_LENGTH_UI, "The menu name can't be longer than 1 character.", "The menu name can't be longer than @count characters."));
    }

    // We will add 'menu-' to the menu name to help avoid name-space conflicts.
    $item['new_machine_name'] = 'menu-'. $item['new_machine_name'];
    if (db_result(db_query("SELECT menu_name FROM {menu_custom} WHERE menu_name = '%s'", $item['new_machine_name'])) ||
      db_result(db_query_range("SELECT menu_name FROM {menu_links} WHERE menu_name = '%s'", $item['new_machine_name'], 0, 1))) {
      form_set_error('new_machine_name', t('The menu already exists.'));
    }
  }
  
  if ($item['clone_by_nid_enabled']) {
    if (empty($item['nids_to_clone'])) {
      form_set_error('nids_to_clone', 'You must list the nodes to clone.');
    }
    
    if (preg_match('/[^0-9, ]/', $item['nids_to_clone'])) {
      form_set_error('nids_to_clone', t('You must enter a list of numerical node IDs separated by commas.'));
    }
  }
}

/**
 * Submit handler for clone form.
 */
function sites_clone_admin_form_submit($form, &$form_state) {
  if ($form_state['values']['clone_menu_enabled']) {
    $new_menu = _sites_create_menu($form_state['values']['new_machine_name'], $form_state['values']['new_human_name'], $form_state['values']['new_description']);
    sites_clone_menu_tree($form_state['values']['menu_to_clone'], $new_menu['menu_name'], $form_state['values']['sid_to_clone_into']);
    drupal_set_message('Menu and nodes have been cloned.');
  }
  if ($form_state['values']['clone_by_nid_enabled']) {
    $nids = preg_split('/[, ]/', $form_state['values']['nids_to_clone'], NULL, PREG_SPLIT_NO_EMPTY);
    sites_clone_clone_by_nid($nids, $form_state['values']['sid_to_clone_into']);
    drupal_set_message('Nodes have been cloned by node ID.');
  }
  
  $form_state['redirect'] = 'admin/build/sites/clone';
}

function sites_clone_undo_form() {
/*  static $j = FALSE;
  if (!$j) {
  $c = sites_clone_get_archived_clone_records(3);
  $c['messages'] = array('Message 1', 'Message 2');
  sites_clone_add_undo_step($c);$j = TRUE;
}*/

  
  $form = array();
  $data = unserialize(variable_get('sites_clone_undo_data', ''));
  
  if (!is_array($data) || count($data) < 1) {
    $form['message'] = array(
      '#value' => 'There are no clones to undo.',
    );
    return $form;
  }
  
  foreach ($data as $clone_id => $clone) {
    $form[$clone_id] = array(
      '#type' => 'fieldset',
      '#title' => t('Clone #' . $clone_id),
    );
    
    $form[$clone_id]['summary-' . $clone_id] = array(
      '#prefix' => '<h4>Summary</h4><ul>',
      '#suffix' => '</ul>',
    );
    
    $form[$clone_id]['summary-' . $clone_id]['timestamp-' . $clone_id] = array(
      '#prefix' => '<li>',
      '#value' => 'Clone performed at ' . date('g:i:sa, l M j, Y', (int)$clone['timestamp']) . '.',
      '#suffix' => '</li>',
    );
    
    if (!empty($clone['original menu name']) && !empty($clone['new menu name'])) {
      $form[$clone_id]['summary-' . $clone_id]['menu-detail-' . $clone_id] = array(
        '#value' => 'Cloned menu <strong>' . $clone['original menu name'] . '</strong> as <strong>' . $clone['new menu name'] . '</strong>',
      );
    }
    
    if (is_array($clone['messages']) && count($clone['messages']) > 0) {
      $form[$clone_id]['summary-' . $clone_id]['messages-' . $clone_id] = array(
        '#prefix' => '<li>Log messages:<ul>',
        '#suffix' => '</ul></li>',
      );
      foreach($clone['messages'] as $i => $message) {
        $form[$clone_id]['summary-' . $clone_id]['messages-' . $clone_id]['message-' . $i . '-' . $clone_id] = array(
          '#prefix' => '<li style="list-style: disc;margin-left: 20px;">',
          '#value' => $message,
          '#suffix' => '</li>',
        );
      }
    }
    
    $form[$clone_id]['nodes-' . $clone_id] = array(
      '#prefix' => '<h4>Cloned nodes</h4><ul>',
      '#suffix' => '</ul>',
    );
    foreach($clone['nodes'] as $original_nid => $new_nid) {
      $original_node = node_load($original_nid);
      $new_node = node_load($new_nid);
      $form[$clone_id]['nodes-' . $clone_id]['node-' . $new_nid . '-' . $clone_id] = array(
        '#prefix' => '<li>',
        '#value' => 'Original node: ' . l($original_node->title . ' (nid: ' . $original_node->nid . ')', 'node/' . $original_node->nid) . ' >> New node: ' . l($new_node->title . ' (nid: ' . $new_node->nid . ')', 'node/' . $new_node->nid),
        '#suffix' => '</li>',
      );
    }
    
    $form[$clone_id]['nodes-already-cloned-' . $clone_id] = array(
      '#prefix' => '<h4>Duplicate clone requests</h4><em>These nodes were prevented from being cloned more than once:</em><ul>',
      '#suffix' => '</ul>',
    );
    foreach($clone['nodes already cloned'] as $nid) {
      $node = node_load($nid);
      $form[$clone_id]['nodes-already-cloned-' . $clone_id]['node-' . $nid . '-' . $clone_id] = array(
        '#prefix' => '<li>',
        '#value' => l($node->title . ' (nid: ' . $node->nid . ')', 'node/' . $node->nid),
        '#suffix' => '</li>',
      );
    }
    
    $form[$clone_id]['global-nodes-' . $clone_id] = array(
      '#prefix' => '<h4>Uncloned global nodes</h4><em>These nodes are set to display on all sites and therefore were not cloned:</em><ul>',
      '#suffix' => '</ul>',
    );
    foreach($clone['global nodes'] as $nid) {
      $node = node_load($nid);
      $form[$clone_id]['global-nodes-' . $clone_id]['node-' . $nid] = array(
        '#prefix' => '<li>',
        '#value' => l($node->title . ' (nid: ' . $node->nid . ')', 'node/' . $node->nid),
        '#suffix' => '</li>',
      );
    }
    
    $form[$clone_id]['undo-' . $clone_id] = array(
      '#prefix' => '<div class="undo-clone" style="margin-top:15px; font-weight: bold">',
      '#value' => l('Click here to undo this clone (deletes all new nodes and the new menu)', 'admin/build/sites/clone/undo/' . $clone_id),
      '#suffix' => '</div>',
    );
  }
  
  return $form;
  
  /*$options = array();
  foreach ($data as $clone_id => $clone) {
    $options[$clone_id] = $clone['title'];
  }
  
  $form['clone_to_undo'] = array(
    '#type' => 'select',
    '#title' => 'Clone to undo',
    '#description' => 'Select which clone will be rolled back (cloned nodes will be deleted as well as the menu created during the clone).',
    '#options' => $options,
  );
  
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => 'Submit',
  );*/
  
  //$form['#submit'] = array('sites_clone_undo_form_submit');
}





function sites_clone_undo_confirm_form($form_state, $cid) {
  $form = array();
  $form['clone_id'] = array(
    '#type' => 'hidden',
    '#value' => $cid
  );
  $form = confirm_form($form, 'Are you sure you want to undo this clone?', 'admin/build/sites/clone/undo');
  return $form;
}

function sites_clone_undo_confirm_form_submit($form, &$form_state) {
  $cid = $form_state['values']['clone_id'];
  sites_clone_undo_clone($cid);
  $form_state['redirect'] = 'admin/build/sites/clone/undo';
}



function sites_clone_undo_form_submit($form, &$form_state) {
  $cid = $form_state['values']['clone_to_undo'];
  if (!sites_get_clone_records($cid)) {
    drupal_set_message('');
  }
  else {
    sites_clone_undo_clone($cid);
    drupal_set_message('Clone has been rolled back successfully.');
  }
  $form_state['redirect'] = 'admin/build/sites/clone/undo';
}

