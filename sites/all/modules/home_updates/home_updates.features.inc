<?php

/**
 * Implementation of hook_views_default_views().
 */
function home_updates_views_default_views() {
  module_load_include('inc', 'home_updates', 'home_updates.features.views');
  $args = func_get_args();
  return call_user_func_array('_home_updates_views_default_views', $args);
}
