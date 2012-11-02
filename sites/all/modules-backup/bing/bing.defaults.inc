<?php

/**
 * Helper to implementation of hook_default_box().
 */
function _bing_default_box() {
  $export = array();
  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'bing';
  $box->title = '<none>';
  $box->description = 'Bing';
  $box->body = '<div id="bing">
  <div class="content">
  <div class="logo"><a href="http://www.bing.com" title="Search on Bing.com">Bing</a></div>
  <hr>
  <div class="title heading5">Learn more about:</div>
  <ul>
  <li><a href="http://www.bing.com/search?q=anusara" title="Learn more about Anusara on Bing">Anusara yoga</a></li>
  <li><a href="http://www.bing.com/search?q=kundalini" title="Learn more about kundalini on Bing">kundalini</a></li>
  <li><a href="http://www.bing.com/search?q=squaw+valley+lagoon" title="Leran more about Squaw Valley Lagoon on Bing">Squaw Valley Lagoon & Spa</a></li>
  <li><a href="http://www.bing.com/search?q=biodynamic+wine" title="Learn more about biodynamic wine on Bing">biodynamic wine</a></li>
  <li><a href="http://www.bing.com/search?q=watson+monument+at+emigrant+peak" title="Learn more about Watson Monument on Bing">Watson Monument at Emigrant peak</a></li>
  </ul>
  <hr>
  <div class="choose">Choose Your Path</div>
  </div>
  
  </div>';
  $box->format = 2;

  $export['bing'] = $box;
  return $export;
}

/**
 * Helper to implementation of hook_ctools_plugin_api().
 */
function _bing_ctools_plugin_api() {
  $args = func_get_args();
  $module = array_shift($args);
  $api = array_shift($args);
  if ($module == "boxes" && $api == "box") {
    return array("version" => 1);
  }
}
