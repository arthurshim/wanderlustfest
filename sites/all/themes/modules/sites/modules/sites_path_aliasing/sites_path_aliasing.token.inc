<?php

// $Id$

/**
 * Implementation of hook_token_list().
 */
function sites_path_aliasing_token_list($type = 'all') {
  $tokens = array();
  switch ($type) {
    case 'all':
    case 'node':
      $tokens['node']['sites-path-prefix'] = t('A URL prefix for us by the Sites module -- only use this in your Pathauto configuration.');
      break;
    default:
      break;
  }
  
  return $tokens;
}

/**
 * Implementation of hook_token_values().
 */
function sites_path_aliasing_token_values($type, $object = NULL, $options = array()) {
  $values = array();
  
  switch ($type) {
    case 'all':
    case 'node':
      if (!is_null($object)) {
        $node = (object)$object;
        $values['sites-path-prefix'] = sites_path_aliasing_make_prefix($node);
      }
      break;
    default:
      break;
  }
  
  return $values;
}