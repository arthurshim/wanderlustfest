<?php
<<<<<<< HEAD

/**
 * @file
 * Template file for the admin settings form. Displays configuration in a neat table
=======
// $Id: page_title-admin-settings-form.tpl.php,v 1.1.2.5 2009/10/31 22:18:54 njt1982 Exp $

/**
 * @file
 * Tempalte file for the admin settings form. Displays configuration in a neat table
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 */

$rows = array();

foreach (element_children($form['pattern']) as $key) {
  $title = array(
    '#type' => 'item',
    '#title' => $form['pattern'][$key]['#title'],
    '#required' => $form['pattern'][$key]['#required'],
  );
  unset($form['pattern'][$key]['#title']);

  $row = array(
<<<<<<< HEAD
    array('data' => drupal_render($title), 'class' => 'page-type'),
    array('data' => drupal_render($form['scope'][$key]), 'class' => 'scope'),
  );
  if (isset($form['showfield'][$key .'_showfield'])) {
    $row[] = array('data' => drupal_render($form['pattern'][$key]), 'class' => 'pattern');
    $row[] = array('data' => drupal_render($form['showfield'][$key .'_showfield']), 'class' => 'showfield');
  }
  else {
    $row[] = array('data' => drupal_render($form['pattern'][$key]), 'colspan' => 2, 'class' => 'pattern');
  }
=======
    drupal_render($title),
    drupal_render($form['scope'][$key]),
    drupal_render($form['pattern'][$key]),
    isset($form['showfield'][$key .'_showfield']) ? drupal_render($form['showfield'][$key .'_showfield']) : '',
  );
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

  $rows[] = $row;
}

<<<<<<< HEAD
$headers = array(
  array('data' => t('Page Type'),   'class' => 'page-type'),
  array('data' => t('Token Scope'), 'class' => 'scope'),
  array('data' => t('Pattern'),     'class' => 'pattern'),
  array('data' => t('Show Field'),  'class' => 'showfield'),
);


drupal_add_css(drupal_get_path('module', 'page_title') .'/page_title.admin.css', 'module', 'all', FALSE);
print theme('table', $headers, $rows, array('id' => 'page-title-settings'));
=======
print theme('table', array(t('Page Type'), t('Token Scope'), t('Pattern'), t('Show Field')), $rows);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

print drupal_render($form);
