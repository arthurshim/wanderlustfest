<?php
<<<<<<< HEAD
=======
// $Id: filefield.token.inc,v 1.6 2010/06/17 00:07:06 quicksketch Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * @file
 * Token hook implementations. Included if token.module is installed.
 */

/**
 * Implementation of hook_token_list().
 *
 * Provide a user readable list of FileField tokens.
 */
function filefield_token_list($type = 'all') {
  if ($type == 'field' || $type == 'all') {
    $tokens = array();
    $tokens['file']['filefield-fid']                = t('File ID');
    $tokens['file']['filefield-description']        = t('File description');
    $tokens['file']['filefield-filename']           = t('File name');
    $tokens['file']['filefield-filepath']           = t('File path');
<<<<<<< HEAD
    $tokens['file']['filefield-fileurl']            = t('File URL');
=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    $tokens['file']['filefield-filemime']           = t('File MIME type');
    $tokens['file']['filefield-filesize']           = t('File size (in bytes)');
    $tokens['file']['filefield-filesize_formatted'] = t('File size (pretty printed)');
    $tokens['file']['filefield-view']               = t('Fully formatted HTML file tag');
    $tokens['file']['filefield-onlyname']           = t('File name without extension');
    $tokens['file']['filefield-extension']          = t('File extension');
    return $tokens;
  }
}

/**
 * Implementation of hook_token_values().
 *
 * Provide the token values for a given file item.
 */
function filefield_token_values($type, $object = NULL) {
  $tokens = array();
  if ($type == 'field' && isset($object[0]['fid'])) {
    $item = $object[0];
    $tokens['filefield-fid']                = $item['fid'];
    $tokens['filefield-description']        = isset($item['data']['description']) ? check_plain($item['data']['description']) : '';
    $tokens['filefield-filename']           = check_plain($item['filename']);
    $tokens['filefield-filepath']           = check_plain($item['filepath']);
<<<<<<< HEAD
    $tokens['filefield-fileurl']            = file_create_url($item['filepath']);
=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    $tokens['filefield-filemime']           = $item['filemime'];
    $tokens['filefield-filesize']           = $item['filesize'];
    $tokens['filefield-filesize_formatted'] = format_size($item['filesize']);
    $tokens['filefield-view']               = $item['view'];
    $double_extensions = array('tar.gz', 'tar.bz2');
    foreach ($double_extensions as $ext) {
      $length = strlen($ext) + 1;
      $filename = drupal_strtolower($item['filename']);
      $pos = strrpos($filename, '.'. $ext);
      if ($pos !== FALSE && strlen($filename) - $pos == $length) {
        $tokens['filefield-onlyname']  = substr($item['filename'], 0, $pos);
        $tokens['filefield-extension'] = $ext;
        break;
      }
    }
    if (!isset($tokens['filefield-extension'])) {
      $info = pathinfo($item['filename']);
<<<<<<< HEAD
      $tokens['filefield-onlyname'] = basename($info['basename'], '.'. $info['extension']);
=======
      $tokens['filefield-onlyname'] = $info['filename'];
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      $tokens['filefield-extension'] = $info['extension'];
    }
  }
  return $tokens;  
}
