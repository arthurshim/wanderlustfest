<?php
<<<<<<< HEAD
=======
// $Id: features.block.inc,v 1.1.2.3 2009/05/31 02:44:04 yhahn Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * Implementation of hook_features_api().
 */
function block_features_api() {
  return array();
}

/**
 * Implementation of hook_features_export().
 */
function block_features_export($data, &$export) {
  $pipe = array();
  foreach ($data as $bid) {
    $split = explode('-', $bid);
    $module = array_shift($split);
    $delta = implode('-', $split);

    $export['dependencies'][$module] = $module;

    switch ($module) {
      case 'views':
        if (strlen($delta) == 32) {
          $hashes = variable_get('views_block_hashes', array());
          if (!empty($hashes[$delta])) {
            $delta = $hashes[$delta];
          }
        }

        $delta_split = explode('-', $delta);
        $view_name = $delta_split[0];
        if (!empty($view_name)) {
          $pipe['views'][] = $view_name;
        }
        break;
    }
  }
  return $pipe;
}
