<?php

/**
 * Implementation of hook_default_box().
 */
function group_sales_default_box() {
  module_load_include('inc', 'group_sales', 'group_sales.defaults');
  $args = func_get_args();
  return call_user_func_array('_group_sales_default_box', $args);
}

/**
 * Implementation of hook_ctools_plugin_api().
 */
function group_sales_ctools_plugin_api() {
  module_load_include('inc', 'group_sales', 'group_sales.defaults');
  $args = func_get_args();
  return call_user_func_array('_group_sales_ctools_plugin_api', $args);
}
