<?php
<<<<<<< HEAD
// $Id: imagefield.inc,v 1.1.2.2 2010/01/11 06:07:16 deciphered Exp $
=======
// $Id: imagefield.inc,v 1.1.2.1 2009/06/16 01:52:35 deciphered Exp $

>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * @file
 * Provides ImageField module specific functions for FileField Paths.
 */

/**
<<<<<<< HEAD
 * Implements hook_filefield_paths_process_file().
=======
 * Implementation of hook_filefield_paths_process_file().
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 */
function imagefield_filefield_paths_process_file($new, $file, $settings, $node, $update) {
  if ($new) {
    // Delete ImageField thumbnail.
    if (isset($file['widget']) && $file['widget'] == 'imagefield' && file_exists($thumbnail_source = imagefield_file_admin_thumb_path(array('filepath' => $file['filepath']['old'])))) {
      file_delete($thumbnail_source);
    }
  }
}

/**
<<<<<<< HEAD
 * Implements hook_filefield_paths_cleanup().
=======
 * Implementation of hook_filefield_paths_cleanup().
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 */
function imagefield_filefield_paths_cleanup(&$ffp, $paths, $name) {
  // Check for ImageFields.
  $imagefield = FALSE;
  foreach ($ffp['#files'] as $file) {
    if ($file['name'] == $name) {
      if (isset($file['widget']) && $file['widget'] == 'imagefield') {
        $imagefield = TRUE;
      }
      break;
    }
  }
  // Cleanup ImageFields temporary thumbnail paths.
  if ($imagefield) {
    array_unshift($paths, 'imagefield_thumbs');
    filefield_paths_cleanup_temp($paths);
  }
}
