<?php

// $Id: sites.core.inc,v 1.1.2.4 2010/05/06 15:47:56 brynbellomy Exp $

/**
 * Get all defined sites.
 *
 * @return
 *   Associative array of "sid" => site object.
 */
function _sites_get_sites() {
  $sites = array();

  $q = 'SELECT * FROM {sites}';
  $res = db_query($q);

  while($row = db_fetch_object($res)) {
    sites_invoke_siteapi($row, 'load site');
    $sites[$row->sid] = $row;
  }

  return $sites;
}

/**
 * Get a single site.
 *
 * @param $sid
 *   Unique site id.
 *
 * @return
 *   Site object.
 */
function _sites_get_site($sid) {
  if (!empty($sid)) {
    $q = 'SELECT * FROM {sites} s WHERE s.sid = %d LIMIT 1';
    $res = db_query($q, (int)$sid);
    $obj = db_fetch_object($res);

    if ($obj === FALSE) {
      $obj = NULL;
      sites_invoke_siteapi($obj, 'load site');
      return $obj;
    }
    else {
      $to_return = new site;//$obj->title, $obj->purl_prefix, $obj->name, $obj->front_page, $obj->menu_primary_links, $obj->menu_secondary_links, $obj->sid, $obj->tid);
      foreach ((array)$obj as $key => $value) {
        $to_return->$key = $value;
      }
      sites_invoke_siteapi($to_return, 'load site');
      return $to_return;
    }
  }
  else return NULL;
}

/**
 * Delete a single site.
 *
 * @param $sid
 *   Unique site id.
 */
function _sites_delete_site($sid) {
  sites_invoke_siteapi($sid, 'before delete site');
  db_query('DELETE FROM {sites} WHERE sid = %d', $sid);
  db_query('DELETE FROM {site_node} WHERE sid = %d', $sid);

  // delete PURL prefix
  purl_delete(array(
    'provider' => 'sites',
    'id' => $sid,
  ));
  
  sites_invoke_siteapi($sid, 'after delete site');
}

/**
 * Get the current site object.
 *
 * @return
 *   Site object or NULL if no current site.
 */
function sites_get_current_site() {
  return sites_set_current_site();
}

/**
 * Set the current site or return current site without setting.
 *
 * @param $site
 *   Populated site object or numerical site id.
 *
 * @return
 *   Current site object.
 */
function sites_set_current_site($site = NULL) {
  static $current_site = NULL;
  
  if ($site !== NULL) {
    if ((is_int($site) || is_string($site)) && !empty($site)) { // if $site is the sid
      $site = _sites_get_site((int)$site);
      if ($site) {
        $current_site = $site;
      }
    }
    else if (is_object($site)) { // if $site is already a populated site object
      $current_site = $site;
    }
  }
  return $current_site;
}

/**
 * Check if the given node object has a sites array with at least one entry.
 *
 * @param $node
 *   Node object.
 *
 * @return
 *   Bool.
 */
function sites_node_has_sites($node) {
  if (!empty($node) && is_object($node) && isset($node->sites) && is_array($node->sites) && count($node->sites) > 0) {
    return TRUE;
  }
  return FALSE;
}

/**
 * Invoked by PURL.  Registers each prefix associated with a site.
 */
function sites_purl_set_current_site($sid) {
  sites_invoke_siteapi($sid, 'before set current site');
  // Activate the Context module context condition
  if ($plugin = context_get_plugin('condition', 'site')) {
    $plugin->execute($sid);
  }

  $site = sites_set_current_site($sid);

  if (!empty($site->front_page) && ($_GET['q'] == '' || $_GET['q'] == variable_get('site_frontpage','node'))) {
    //$_GET['q'] = $site->front_page; // This will require module weights to be set appropriately
    drupal_goto($site->front_page);
  }
  sites_invoke_siteapi($site, 'after set current site');
}

/**
 * Clear all records in site_node for a given nid, then re-add the
 * current set of site/node relationships.
 *
 * @param $nid
 *   Unique node id.
 *
 * @param $sids
 *   Array of unique site ids or NULL to remove node from all sites.
 *
 * @return
 *   Boolean - TRUE if all queries execute successfully, FALSE otherwise.
 */
function _sites_attach_node_to_sites($nid, $sids = NULL) {
  sites_invoke_siteapi($sids, 'attach node to sites', $nid);
  $q = 'DELETE FROM {site_node} WHERE nid = %d';
  db_query($q, $nid);
  $success = TRUE;
    
  if ($sids) {
    foreach ($sids as $sid) {
      $q = 'INSERT INTO {site_node} (nid, sid) VALUES (%d, %d)';
      if (db_query($q, (int)$nid, (int)$sid) == FALSE) {
        $success = FALSE;
      }
    }
  }
  return $success;
}

/**
 * Get all sites a node belongs to.
 *
 * @param $nid
 *   Unique node id.
 *
 * @return
 *   Array of site IDs.
 */
function sites_get_node_sites($nid) {
  $q = 'SELECT sid FROM {site_node} WHERE nid = %d';
  $res = db_query($q, $nid);
  $sites = array();
  while($site = db_fetch_object($res)) {
    $sites[$site->sid] = $site->sid;
  }

  return $sites;
}


/**
 * Get all nodes belonging to a site.
 *
 * @param $sid
 *   Unique site id.
 *
 * @return
 *   Array of node ids.
 */
function sites_get_nodes_for_site($sid) {
  $q = 'SELECT nid FROM {site_node} WHERE sid = %d';
  $res = db_query($q, $sid);
  $nids = array();
  while($nid = db_result($res)) {
    $nids[$nid] = $nid;
  }

  return $nids;
}



/**
 * Get the unique name of the menu to be used in place of the menu specified
 * in the $menu_name argument (right now, can only be primary_links or
 * secondary_links).
 *
 * @param $menu_name
 *   Either 'primary_links' or 'secondary_links'.
 *
 * @return
 *   If the requested menu is set, its name is returned.  Otherwise, FALSE.
 */
function sites_get_current_menu_source($menu_name) {
  $current_site = sites_get_current_site();
  if (!empty($current_site->{'menu_' . $menu_name})) {
    return $current_site->{'menu_' . $menu_name};
  }
  return FALSE;
}


