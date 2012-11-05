<?php

/**
 * @file
 * Theme functions for Image Browser.
 */


/**
 * Setup variables for the Image Browser thumbnail template.
 *
 * @param array $vars
 */
function template_preprocess_imagebrowser_thumbnail(&$vars) {
  $vars['fid'] = $vars['row']->files_fid;
  $vars['path'] = $vars['row']->files_filepath;
  $vars['title'] = t('File') .': '. $vars['row']->files_fid;
}