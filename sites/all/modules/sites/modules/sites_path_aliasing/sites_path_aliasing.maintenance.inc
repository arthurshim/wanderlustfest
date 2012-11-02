<?php

function sites_path_aliasing_sites_maintenance_tasks() {
  $tasks = array();
  $tasks[] = array(
    'description' => 'Ensures sites_shared_path table is aligned with the site_node table.',
    'callback' => 'sites_path_aliasing_align_shared_path_records_with_nodes',
    'weight' => -8,
  );
  $tasks[] = array(
    'description' => 'Delete sites_shared_path records that point to an invalid pid',
    'callback' => 'sites_path_aliasing_cull_alias_table',
  );
  $tasks[] = array(
    'description' => 'Recreates sites_sid_spid records using the site_node, sites_shared_paths, and url_alias tables.',
    'callback' => 'sites_path_aliasing_regenerate_sid_spid_table',
  );
  $tasks[] = array(
    'description' => 'Rebuilds the sites prefixes for all aliases that already have one.',
    'callback' => 'sites_path_aliasing_rebuild_prefixes',
    'weight' => 101, // this should come last, generally speaking
  );
  $tasks[] = array(
    'description' => 'Ensures that any entry in the sites_shared_path table with a corresponding url_alias entry that should be sites-prefixed actually is.',
    'callback' => 'sites_path_aliasing_ensure_prefixes',
    'weight' => 100, // this should also come last
  );
  $tasks[] = array(
    'description' => 'Clears the shared alias cache.',
    'callback' => 'sites_path_aliasing_clear_shared_path_cache',
    'weight' => 102, // super lastest
  );
  
  return $tasks;
}


function sites_path_aliasing_align_shared_path_records_with_nodes() {
  $res = db_query("SELECT * FROM {site_node}");
  while ($row = db_fetch_object($res)) {
    if (!is_array($sids[$row->nid])) {
      $sids[$row->nid] = array();
    }
    $sids[$row->nid][] = $row->sid;
  }
  
  $queries = array();
  $vars = array();
  
  $res = db_query("SELECT * FROM {sites_shared_paths} ssp LEFT JOIN {url_alias} u ON u.pid = ssp.pid");
  while ($row = db_fetch_object($res)) {
    $nid = (int)substr($row->src, 5);
    if (!$sids[$nid]) { // node has no sites, so it can't have a shared path
      $queries[] = "DELETE FROM {sites_shared_paths} WHERE spid = %d";
      $vars[] = $row->spid;
      $queries[] = "DELETE FROM {sites_sid_spid} WHERE spid = %d";
      $vars[] = $row->spid;
    }
    else if ($row->sites != implode(',', $sids[$nid])) {
      $queries[] = "UPDATE {sites_shared_paths} SET sites = '%s' WHERE spid = %d";
      $vars[] = implode(',', $sids[$nid]);
      $vars[] = $row->spid;
      $queries[] = "DELETE FROM {sites_sid_spid} WHERE spid = %d";
      $vars[] = $row->spid;
    }
  }
  
  foreach ($queries as $q) {
    $a1 = array_shift($vars);
    if (substr($q, 0, 6) == 'UPDATE') {
      $a2 = array_shift($vars);
      db_query($q, $a1, $a2);
    }
    else {
      db_query($q, $a1);
    }
  }
}

function sites_path_aliasing_clear_shared_path_cache() {
  _sites_path_aliasing_cache_ready(FALSE);
}

/**
 * Ensures that any entry in the sites_shared_path table with a corresponding url_alias entry
 * that should be sites-prefixed is actually prefixed.
 */
function sites_path_aliasing_ensure_prefixes() {
  $queries = array();
  $vars = array();
  $res = db_query("SELECT u.pid AS u_pid, ssp.pid AS ssp_pid, ssp.*, u.* FROM {sites_shared_paths} ssp LEFT JOIN {url_alias} u ON ssp.pid = u.pid");
  
  while ($row = db_fetch_object($res)) {
    $node = node_load((int)substr($row->src, 5));
    $prefix = sites_path_aliasing_make_prefix($node);
    if ($prefix) {
      $alias = $row->alias;
      sites_path_aliasing_remove_sites_prefix($alias);
      if ($row->dst != ($prefix . '/' . $alias)) {
        $queries[] = "UPDATE {url_alias} SET dst = '%s' WHERE pid = %d";
        $vars[] = $prefix . '/' . $alias;
        $vars[] = $row->u_pid;
      }
    }
    else {
      if (sites_path_aliasing_extract_sites_prefix($row->dst) && !sites_node_has_sites($node)) {
        sites_path_aliasing_remove_sites_prefix($row->dst);
        $queries[] = "UPDATE {url_alias} SET dst = '%s' WHERE pid = %d";
        $vars[] = $row->dst;
        $vars[] = $row->u_pid;
        $queries[] = "DELETE FROM {sites_shared_paths} WHERE pid = %d";
        $vars[] = $row->ssp_pid;
      }
    }
  }

  foreach ($queries as $q) {
    $a1 = array_shift($vars);
    if (substr($q, 0, 6) == 'UPDATE') {
      $a2 = array_shift($vars);
      db_query($q, $a1, $a2);
    }
    else {
      db_query($q, $a1);
    }
  }
}


/**
 * Rebuilds the sites prefixes for all aliases that already have one.
 */
function sites_path_aliasing_rebuild_prefixes() {
  $queries = array();
  $variables = array();
  $res = db_query("SELECT pid, dst, src FROM {url_alias}");
  
  while ($row = db_fetch_object($res)) {
    if (sites_path_aliasing_extract_sites_prefix($row->dst) && substr($row->src, 0, 5) == 'node/') {
      $node = node_load((int)substr($row->src, 5));
      $prefix = sites_path_aliasing_make_prefix($node);

      if ($prefix) {
        $alias = $row->dst;
        sites_path_aliasing_remove_sites_prefix($alias);
        
        $dst = $prefix . '/' . $alias;
        $queries[] = "UPDATE {url_alias} SET dst = '%s' WHERE pid = %d";
        $variables[] = $dst;
        $variables[] = $row->pid;
        $queries[] = "UPDATE {sites_shared_paths} SET alias = '%s' WHERE pid = %d";
        $variables[] = $alias;
//        $variables[] = implode(',', $node->sites);
        $variables[] = $row->pid;
        dsm("UPDATE url_alias SET dst = '{$dst}' WHERE pid = {$row->pid}");
        dsm("UPDATE sites_shared_paths SET alias = '$alias', sites = '$sites' WHERE pid = {$row->pid}");
      }
    }
  }
  
//  $zebra = 0;
  foreach ($queries as $q) {
//    if (!$zebra) {
      $a1 = array_shift($variables);
      $a2 = array_shift($variables);
      db_query($q, $a1, $a2);
//      $zebra = 1;
//    }
/*    else {
      $a1 = array_shift($variables);
      $a2 = array_shift($variables);
      $a3 = array_shift($variables);
      db_query($q, $a1, $a2, $a3);
      $zebra = 0;
    }*/
  }
}

function sites_path_aliasing_cull_alias_table() {
  // delete sites_shared_path records that point to an invalid pid, have an empty 'sites' field
  $res = db_query("SELECT ssp.pid AS ssp_pid, u.pid AS u_pid, ssp.*, u.* FROM {sites_shared_paths} ssp LEFT JOIN {url_alias} u ON u.pid = ssp.pid");
  $to_delete = array();
  while ($row = db_fetch_object($res)) {
    if ($row->ssp_pid == NULL || $row->u_pid == NULL) {
      watchdog('Sites Path Aliasing', 'Unused shared path record has been found and will be deleted (spid: '.$row->spid.', pid: '.$row->ssp_pid.', alias: "'.$row->alias.'")', array(), WATCHDOG_ERROR);
      $to_delete[] = $row->spid;
    }
    /*else if (trim($row->sites) == '') {
      watchdog('Sites Path Aliasing', 'Broken shared path record has been found and will be deleted (spid: '.$row->spid.', pid: '.$row->pid.', alias: "'.$row->alias.'")', array(), WATCHDOG_ERROR);
      $to_delete[] = $row->spid;
    }*/
  }
  
  if (count($to_delete) > 0) {
    $placeholders = array();
    foreach ($to_delete as $spid) {
      $placeholders[] = '%d';
    }
    $placeholders = implode(',', $placeholders);
  
    db_query("DELETE FROM {sites_shared_paths} WHERE spid IN ($placeholders)", $to_delete);
    db_query("DELETE FROM {sites_sid_spid} WHERE spid IN ($placeholders)", $to_delete);
  }
}

function sites_path_aliasing_regenerate_sid_spid_table() {
  db_query("DELETE FROM {sites_sid_spid}");
  $res = db_query("SELECT * FROM {sites_shared_paths} ssp JOIN {url_alias} u ON ssp.pid = u.pid");
  while ($row = db_fetch_object($res)) {
    $items[] = array('nid' => (int)substr($row->src, 5), 'spid' => (int)$row->spid);
  }
  foreach ($items as $item) {
    $sids = array();
    $res = db_query("SELECT sid FROM {site_node} sn WHERE nid = %d", $item['nid']);
    while ($sid = db_result($res)) {
      $sids[] = $sid;
    }
    foreach ($sids as $sid) {
      db_query("INSERT INTO {sites_sid_spid} (sid, spid) VALUES (%d, %d)", $sid, $item['spid']);
    }
  }
  
  /*$to_delete = array();
  $res = db_query("SELECT sss.spid AS sss_spid, ssp.spid AS ssp_spid, ssp.*, sss.* FROM {sites_sid_spid} sss LEFT JOIN {sites_shared_paths} ssp ON sss.spid = ssp.spid");
  while ($row = db_fetch_object($res)) {
    if ($row->ssp_spid == NULL) {
      $to_delete[$row->sss_spid] = $row->sss_spid;
    }
  }
  
  if (count($to_delete) > 0) {
    $placeholders = array();
    foreach ($to_delete as $spid) {
      $placeholders[] = '%d';
    }
    $placeholders = implode(',', $placeholders);
    db_query("DELETE FROM {sites_sid_spid} WHERE spid IN ($placeholders)", array_values($to_delete));
  }*/
}