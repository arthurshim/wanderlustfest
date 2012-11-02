<?php
/**
 * @file
 *   LABjs support for AdvAgg
 */

/**
 * Build and theme JS output.
 *
 * @param $external_no_preprocess
 *   array(array($src, $defer))
 * @param $output_preprocess
 *   array(array($src, $prefix, $suffix))
 * @param $output_no_preprocess
 *   array(array(array($src, $defer)))
 * @param $setting_no_preprocess
 *   array(array($code))
 * @param $inline_no_preprocess
 *   array(array($code, $defer))
 * @param $scope
 *   header or footer
 * @return
 *   String of themed JavaScript.
 */
function labjs_advagg_js_builder($external_no_preprocess, $output_preprocess, $output_no_preprocess, $setting_no_preprocess, $inline_no_preprocess, $scope, $js_settings_array, $inline_included, $files_included, $files_aggregates_included) {

  $output = '';

  // For inline Javascript to validate as XHTML, all Javascript containing
  // XHTML needs to be wrapped in CDATA. To make that backwards compatible
  // with HTML 4, we need to comment out the CDATA-tag.
  $embed_prefix = "\n<!--//--><![CDATA[//><!--\n\$LAB.queue(function() {";
  $embed_suffix = "});\n//--><!]]>\n";

  // Keep the order of JS files consistent as some are preprocessed and others are not.
  // Make sure any inline or JS setting variables appear last after libraries have loaded.
  $scripts = array();
  $excluded = array();
  if (!empty($external_no_preprocess)) {
    foreach ($external_no_preprocess as $values) {
      list ($src, $defer) = $values;
      $scripts[] = $src;
    }
  }

  if (!empty($output_preprocess)) {
    foreach ($output_preprocess as $values) {
      list ($src, $prefix, $suffix) = $values;
      $scripts[] = $src;
    }
  }

  foreach ($output_no_preprocess as $type => $list) {
    if (!empty($list)) {
      foreach ($list as $values) {
        list ($src, $defer) = $values;
        if (strpos($src, 'tinymce/jscripts/tiny_mce/tiny_mce.js') === FALSE) {
          $scripts[] = $src;
        }
        else {
          $excluded[] = $values;
        }
      }
    }
  }

  if ($scope == 'header') {
    // LABjs scripts
    $output .= _labjs_prepare_required_js();
  }

  if (!empty($scripts)) {
    $output .= '<script type="text/javascript">' . "\n";
    $output .= '<!--//--><![CDATA[//><!--' . "\n";
    $output .= LABJS_EXCLUDE ."\n";
    $output .= "\$LAB.queue(\"" . implode("\");\n\$LAB.queue(\"", $scripts) . "\"); \n";
    $output .= "//--><!]]>\n";
    $output .= "</script>\n";
  }

  if (!empty($excluded)) {
    foreach ($excluded as $values) {
      list ($src, $defer) = $values;
      $output .= '<script type="text/javascript"' . ($defer ? ' defer="defer"' : '') . ' src="' . $src . "\"></script>\n";
    }
  }

  if (!empty($setting_no_preprocess)) {
    foreach ($setting_no_preprocess as $code) {
      $output .= '<script type="text/javascript">' . $embed_prefix . $code . $embed_suffix . "</script>\n";
    }
  }

  if (!empty($inline_no_preprocess)) {
    foreach ($inline_no_preprocess as $values) {
      list ($code, $defer) = $values;
      $output .= '<script type="text/javascript"'. ($defer ? ' defer="defer"' : '') .'>' . $embed_prefix . $code . $embed_suffix . "</script>\n";
    }
  }

  return $output;
}
