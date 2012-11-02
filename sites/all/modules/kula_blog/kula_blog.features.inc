<?php

/**
 * Implementation of hook_default_box().
 */
function kula_blog_default_box() {
  module_load_include('inc', 'kula_blog', 'kula_blog.defaults');
  $args = func_get_args();
  return call_user_func_array('_kula_blog_default_box', $args);
}

/**
 * Implementation of hook_content_default_fields().
 */
function kula_blog_content_default_fields() {
  module_load_include('inc', 'kula_blog', 'kula_blog.defaults');
  $args = func_get_args();
  return call_user_func_array('_kula_blog_content_default_fields', $args);
}

/**
 * Implementation of hook_ctools_plugin_api().
 */
function kula_blog_ctools_plugin_api() {
  module_load_include('inc', 'kula_blog', 'kula_blog.defaults');
  $args = func_get_args();
  return call_user_func_array('_kula_blog_ctools_plugin_api', $args);
}

/**
 * Implementation of hook_views_default_views().
 */
function kula_blog_views_default_views() {
  module_load_include('inc', 'kula_blog', 'kula_blog.features.views');
  $args = func_get_args();
  return call_user_func_array('_kula_blog_views_default_views', $args);
}
