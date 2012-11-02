<?php

/**
 * Implementation of hook_ctools_plugin_api().
 */
function wl_standard_deploy_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "context" && $api == "context") {
    return array("version" => 3);
  }
}

/**
 * Implementation of hook_imagecache_default_presets().
 */
function wl_standard_deploy_imagecache_default_presets() {
  $items = array(
    'highlighted_artists' => array(
      'presetname' => 'highlighted_artists',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale',
          'data' => array(
            'width' => '457',
            'height' => '295',
            'upscale' => 0,
          ),
        ),
      ),
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function wl_standard_deploy_views_api() {
  return array(
    'api' => '2',
  );
}
