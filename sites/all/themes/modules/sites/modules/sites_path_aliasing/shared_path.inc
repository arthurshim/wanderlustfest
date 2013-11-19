<?php

// $Id$

class shared_path {
  public $spid = NULL;
  public $pid = NULL;
  public $alias = NULL;
  public $sites = NULL;
  
  function __construct($spid = 0, $pid = 0, $alias = '', $sites = NULL) {
    $this->spid = $spid;
    $this->pid = $pid;
    $this->alias = $alias;
    if (!empty($this->alias)) {
      require_once 'sites_path_aliasing.helpers.inc';
      sites_path_aliasing_remove_sites_prefix($this->alias);
    }
    if (is_array($sites) && count($sites) > 0) {
      $this->sites = implode(',', $sites);
    }
    else if (is_string($sites)) {
      $this->sites = $sites;
    }
  }
}