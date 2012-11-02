<?php

/**
 * Implementation of hook_default_box().
 */
function wl_home_blocks_default_box() {
  module_load_include('inc', 'wl_home_blocks', 'wl_home_blocks.defaults');
  $args = func_get_args();
  return call_user_func_array('_wl_home_blocks_default_box', $args);
}

/**
 * Implementation of hook_ctools_plugin_api().
 */
function wl_home_blocks_ctools_plugin_api() {
  module_load_include('inc', 'wl_home_blocks', 'wl_home_blocks.defaults');
  $args = func_get_args();
  return call_user_func_array('_wl_home_blocks_ctools_plugin_api', $args);
}
