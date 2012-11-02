<?php

/**
 * Implementation of hook_default_box().
 */
function fillmore_default_box() {
  module_load_include('inc', 'fillmore', 'fillmore.defaults');
  $args = func_get_args();
  return call_user_func_array('_fillmore_default_box', $args);
}

/**
 * Implementation of hook_ctools_plugin_api().
 */
function fillmore_ctools_plugin_api() {
  module_load_include('inc', 'fillmore', 'fillmore.defaults');
  $args = func_get_args();
  return call_user_func_array('_fillmore_ctools_plugin_api', $args);
}
