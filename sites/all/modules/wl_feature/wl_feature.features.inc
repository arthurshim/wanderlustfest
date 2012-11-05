<?php

/**
 * Implementation of hook_ctools_plugin_api().
 */
function wl_feature_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => 1);
  }
}

/**
 * Implementation of hook_views_api().
 */
function wl_feature_views_api() {
  return array(
    'api' => '2',
  );
}


/**
 * Implementation of hook_siteapi()
 */

/*
function wl_feature_siteapi(&$obj, $op, $a1, $a2) {
  global $user;

  switch ($op) {


    case 'after set current site':
      if($user->uid == 1) {
	  drupal_set_message('<pre>' . print_r($obj, 1) . '</pre>');
      }
      break;

  }
}*/