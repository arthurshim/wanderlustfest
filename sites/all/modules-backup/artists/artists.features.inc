<?php

/**
 * Implementation of hook_default_box().
 */
function artists_default_box() {
  module_load_include('inc', 'artists', 'artists.defaults');
  $args = func_get_args();
  return call_user_func_array('_artists_default_box', $args);
}

/**
 * Implementation of hook_content_default_fields().
 */
function artists_content_default_fields() {
  module_load_include('inc', 'artists', 'artists.defaults');
  $args = func_get_args();
  return call_user_func_array('_artists_content_default_fields', $args);
}

/**
 * Implementation of hook_context_default_contexts().
 */
function artists_context_default_contexts() {
  module_load_include('inc', 'artists', 'artists.defaults');
  $args = func_get_args();
  return call_user_func_array('_artists_context_default_contexts', $args);
}

/**
 * Implementation of hook_ctools_plugin_api().
 */
function artists_ctools_plugin_api() {
  module_load_include('inc', 'artists', 'artists.defaults');
  $args = func_get_args();
  return call_user_func_array('_artists_ctools_plugin_api', $args);
}

/**
 * Implementation of hook_imagecache_default_presets().
 */
function artists_imagecache_default_presets() {
  module_load_include('inc', 'artists', 'artists.defaults');
  $args = func_get_args();
  return call_user_func_array('_artists_imagecache_default_presets', $args);
}

/**
 * Implementation of hook_node_info().
 */
function artists_node_info() {
  module_load_include('inc', 'artists', 'artists.features.node');
  $args = func_get_args();
  return call_user_func_array('_artists_node_info', $args);
}

/**
 * Implementation of hook_views_default_views().
 */
function artists_views_default_views() {
  module_load_include('inc', 'artists', 'artists.features.views');
  $args = func_get_args();
  return call_user_func_array('_artists_views_default_views', $args);
}
