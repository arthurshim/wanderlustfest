<?php

// $Id$

function sites_path_aliasing_extract_sites_prefix($path) {
  preg_match('/sites:(?P<sites>[\d,]+)\//', $path, $matches);
  if (!empty($matches['sites'])) {
    return $matches['sites'];
  }
  return NULL;
}

function sites_path_aliasing_remove_sites_prefix(&$path) {
  $path = preg_replace('/sites:[\d,]+\//', '', $path);
}