<?php

/**
 * Implementation of hook_default_box().
 */
function bing_default_box() {
  module_load_include('inc', 'bing', 'bing.defaults');
  $args = func_get_args();
  return call_user_func_array('_bing_default_box', $args);
}

/**
 * Implementation of hook_ctools_plugin_api().
 */
function bing_ctools_plugin_api() {
  module_load_include('inc', 'bing', 'bing.defaults');
  $args = func_get_args();
  return call_user_func_array('_bing_ctools_plugin_api', $args);
}
