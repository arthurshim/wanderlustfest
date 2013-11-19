<?php

function sites_do_maintenance() {
  $tasks = array();
  $do_maintenance = TRUE;
  foreach (module_implements('sites_maintenance_tasks') as $module) {
    $function = $module . '_sites_maintenance_tasks';
    $list = $function();
    foreach ($list as $item) {
      if (!function_exists($item['callback'])) {
        // @@TODO: don't rely on devel here
        dsm($item, 'Callback does not exist.');
        $do_maintenance = FALSE;
      }
      $tasks[] = array('weight' => ($item['weight'] ? $item['weight'] : 0), 'module' => $module, 'callback' => $item['callback'], 'description' => (isset($item['description']) ? $item['description'] : ''));
    }
  }
  // give modules a chance to rearrange the task list, etc.
  drupal_alter('sites_maintenance_tasks', $tasks);
  
  // sort tasks by weight
  foreach ($tasks as $task) {
    if (!is_array($maintenance_tasks[$task['weight']])) {
      $maintenance_tasks[$task['weight']] = array();
    }
    $maintenance_tasks[$task['weight']][] = $task;
  }
  
  // execute all tasks
  if ($do_maintenance) {
    foreach ($maintenance_tasks as $weight) {
      foreach ($weight as $task) {
        if (function_exists($task['callback'])) {
          $task['callback']();
        }
      }
    }
  }
}



function sites_sites_maintenance_tasks() {
  // clean up the site_node table
  $tasks = array();
  $tasks[] = array(
    'description' => 'Delete site_node entries that point to an invalid node',
    'callback' => 'sites_maintenance_clean_site_node_invalid_nids',
    'weight' => -10,
  );
  $tasks[] = array(
    'description' => 'Delete site_node entries that point to an invalid site',
    'callback' => 'sites_maintenance_clean_site_node_invalid_sids',
    'weight' => -9,
  );
  
  return $tasks;
}

function sites_maintenance_clean_site_node_invalid_nids() {
  // delete site_node entries that point to an invalid node
  $to_delete = array();
  $res = db_query("SELECT sn.nid AS sites_nid, n.nid AS node_nid, sn.*, n.* FROM {site_node} sn LEFT JOIN {node} n ON sn.nid = n.nid");
  while ($row = db_fetch_object($res)) {
    if ($row->node_nid == NULL) {
      $to_delete[] = array('sid' => $row->sid, 'nid' => $row->sites_nid);
    }
  }
  
  if (count($to_delete) > 0) {
    foreach ($to_delete as $item) {
      db_query("DELETE FROM {site_node} WHERE sid = %d AND nid = %d", $item['sid'], $item['nid']);
    }
  }
}

function sites_maintenance_clean_site_node_invalid_sids() {
  // delete site_node entries that point to an invalid site
  $to_delete = array();
  $res = db_query("SELECT sn.sid AS sn_sid, s.sid AS sites_sid, sn.*, s.* FROM {site_node} sn LEFT JOIN {sites} s ON sn.sid = s.sid");
  while ($row = db_fetch_object($res)) {
    if ($row->sites_sid == NULL) {
      $to_delete[$row->sn_sid] = $row->sn_sid; // key it by sid to prevent deleting the same sid over and over
    }
  }
  if (count($to_delete) > 0) {
    $placeholders = array();
    foreach ($to_delete as $sid) {
      $placeholders[] = '%d';
    }
    $placeholders = implode(',', $placeholders);
    
    foreach ($to_delete as $sid) {
      db_query("DELETE FROM {site_node} WHERE sid IN ($placeholders)", array_values($to_delete));
    }
  }
}