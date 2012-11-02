<?php

// $Id$

/**
 * Helper function to quickly discern whether a form being form_altered is a node form.
 *
 * @param $form
 *   Form object passed to hook_form_alter().
 *
 * @return
 *   BOOL
 */
function _sites_form_is_node_form($form, $form_id) {
  if (isset($form['type']) && isset($form['#node']) && $form['type']['#value'] .'_node_form' == $form_id) {
    return TRUE;
  }
  return FALSE;
}




function _sites_create_menu($machine_name, $human_name, $description) {
  $path = 'admin/build/menu-customize/';
  if (substr($machine_name, 0, 5) != 'menu-') {
    $machine_name = 'menu-'. $machine_name; // Add 'menu-' to the menu name to help avoid name-space conflicts.
  }
  
  $link['link_title'] = $human_name;
  $link['link_path'] = $path . $machine_name;
  $link['router_path'] = $path .'%';
  $link['module'] = 'menu';
  $link['plid'] = db_result(db_query("SELECT mlid FROM {menu_links} WHERE link_path = '%s' AND module = '%s'", 'admin/build/menu', 'system'));
  menu_link_save($link);
  
  db_query("INSERT INTO {menu_custom} (menu_name, title, description) VALUES ('%s', '%s', '%s')", $machine_name, $human_name, $description);
  
  return array('menu_name' => $machine_name, 'title' => $human_name, 'description' => $description);
}