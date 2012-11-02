<?php

// $Id: site.inc,v 1.2.2.3 2010/05/06 15:47:56 brynbellomy Exp $

/**
 * Essentially, this is a PURL record wrapper with some extra data.
 * (brynbellomy)
 */

class site {
  /*protected $sid; // Unique site id
  protected $purl_prefix;
  protected $title;
  protected $name;
  protected $front_page;
  protected $menu_primary_links;
  protected $menu_secondary_links;
  protected $tid;*/
  var $sid; // Unique site id
  var $purl_prefix;
  var $title;
  var $name;
  var $front_page;
  var $menu_primary_links;
  var $menu_secondary_links;
  var $tid;
  

  function __construct($title = '', $purl_prefix = '', $name = '', $front_page = '', $mpl = '', $msl = '', $sid = NULL, $tid = NULL) {
    /*
    $this->__set('title', $title);
    $this->__set('purl_prefix', $purl_prefix);
    $this->__set('name', $name);
    $this->__set('front_page', $front_page);
    $this->__set('menu_primary_links', $mpl);
    $this->__set('menu_secondary_links', $msl);
    if ($sid) {
      $this->__set('sid', $sid);
    }
    if ($tid) {
      $this->__set('tid', $tid);
    }*/
    
    $this->title = $title;
    $this->purl_prefix = $purl_prefix;
    $this->name = $name;
    $this->front_page = $front_page;
    $this->menu_primary_links = $mpl;
    $this->menu_secondary_links = $msl;
    $this->sid = $sid;
    $this->tid = $tid;
  }
  
  function __clone() {
    // hackish for the sake of thoroughness and brevity -- this will break all references instantly without any recursion
    foreach ((array)$this as $key => $val) {
      if (is_object($val) || (is_array($val))) {
        $this->$key = unserialize(serialize($val));
      }
    }
    // proper OOP approach
    /*foreach ($this->data as $plugin_key => $objects) {
      foreach ($objects as $id => $object_or_settings) {
        if (is_object($object_or_settings)) {
          $this->data[$plugin_key][$id] = clone $this->data[$plugin_key][$id];
        }
      }
    }*/
  }
  
  /*function __set($field, $value) {
    if (in_array($field, array('sid', 'tid'))) { // integers
      $this->$field = (int)$value;
    }
    else { // strings
      $this->$field = (string)$value;
    }
  }
  
  function __get($field) {
    return $this->$field;
  }*/
  
  function load($sid) {
    $site = _sites_get_site((int)$sid);
    if ($site) {
      $this->__construct($site->title, $site->purl_prefix, $site->name, $site->front_page, $site->menu_primary_links, $site->menu_secondary_links, $site->sid, $site->tid);
      return TRUE;
    }
    return FALSE;
  }

  function save() {
    $success = NULL;
    if ($this->sid == NULL) {
      /*if (count(_sites_get_sites()) == 0) {
        $this->sid = 1;
      }
      else {
        $this->sid = max(array_keys(_sites_get_sites())) + 1;
      }*/
      $success = drupal_write_record('sites', $this);
    }
    else {
      $success = drupal_write_record('sites', $this, 'sid');
    }
    
    if (!$success) {
      drupal_set_message('Failed to write site to DB.', 'error');
      if (function_exists('dsm')) {
        dsm($this);
      }
      return FALSE;
    }
    else {
      $modifier = array(
        'provider' => 'sites',
        'id' => $this->sid,
        'value' => $this->purl_prefix,
      );
      $success = purl_save($modifier);

      if (!$success) {
        drupal_set_message('Failed to write purl record to DB.', 'error');
      }
    }
    
    return $success;
  }
}
