<?php
<<<<<<< HEAD
=======
// $Id: token_taxonomy.inc,v 1.3.4.5 2010/06/05 16:45:58 davereid Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * @file
 * Implementations of token module hooks for the core taxonomy module.
 *
 * The token module requires specific hooks to be added to modules
 * so that those modules can return data about their objects to the
 * token API.  Until and unless token becomes a part of core, the
 * implementations of the token hooks for core modules are provided
 * in the token module itself.
 *
 * @ingroup token
 */

/**
<<<<<<< HEAD
 * Implements hook_token_list().
 */
function taxonomy_token_list($type = 'all') {
  $tokens = array();

  // Taxonomy term tokens.
  if ($type == 'taxonomy' || $type == 'all') {
    $tokens['taxonomy']['tid'] = t('The unique ID of the taxonomy term.');
    $tokens['taxonomy']['cat'] = t('The name of the taxonomy term.');
    $tokens['taxonomy']['cat-raw'] = t('The name of the taxonomy term.');
    $tokens['taxonomy']['cat-description'] = t('The optional description of the taxonomy term.');
    $tokens['taxonomy']['vid'] = t("The unique ID of the taxonomy vocabulary the taxonomy term belongs to.");
    $tokens['taxonomy']['vocab'] = t("The name of the taxonomy vocabulary the taxonomy term belongs to.");
    $tokens['taxonomy']['vocab-raw'] = t("The name of the taxonomy vocabulary the taxonomy term belongs to.");
    $tokens['taxonomy']['vocab-description'] = t('The optional description of the taxonomy vocabulary the taxonomy term belongs to.');
    $tokens['taxonomy']['vocab-description-raw'] = t('The optional description of the taxonomy vocabulary the taxonomy term belongs to.');
  }

  // Vocabulary tokens.
  if ($type == 'vocabulary' || $type == 'all') {
    $tokens['vocabulary']['vocabulary-vid'] = t('The unique ID of the taxonomy vocabulary.');
    $tokens['vocabulary']['vocabulary-name'] = t('The name of the taxonomy vocabulary.');
    $tokens['vocabulary']['vocabulary-name-raw'] = t('The name of the taxonomy vocabulary.');
    $tokens['vocabulary']['vocabulary-description'] = t('The optional description of the taxonomy vocabulary.');
    $tokens['vocabulary']['vocabulary-description-raw'] = t('The optional description of the taxonomy vocabulary.');
  }

  return $tokens;
}

/**
 * Implements hook_token_values().
 */
function taxonomy_token_values($type, $object = NULL, $options = array()) {
  $values = array();

  // Taxonomy term tokens.
  if ($type == 'taxonomy' && !empty($object)) {
    $term = $object;
    $vocabulary = taxonomy_vocabulary_load($term->vid);

    $values['tid'] = $term->tid;
    $values['cat'] = check_plain($term->name);
    $values['cat-raw'] = $term->name;
    $values['cat-description'] = filter_xss($term->description);
    $values['vid'] = $term->vid;
    $values['vocab'] = check_plain($vocabulary->name);
    $values['vocab-raw'] = $vocabulary->name;
    $values['vocab-description'] = filter_xss($vocabulary->description);
    $values['vocab-description-raw'] = $vocabulary->description;
  }

  // Vocabulary tokens.
  if ($type == 'vocabulary' && !empty($object)) {
    $vocabulary = $object;

    $values['vocabulary-vid'] = $vocabulary->vid;
    $values['vocabulary-name'] = check_plain($vocabulary->name);
    $values['vocabulary-name-raw'] = $vocabulary->name;
    $values['vocabulary-description'] = filter_xss($vocabulary->description);
    $values['vocabulary-description-raw'] = $vocabulary->description;
  }

  return $values;
=======
 * Implementation of hook_token_values().
 */
function taxonomy_token_values($type, $object = NULL, $options = array()) {
  $values = array();
  switch ($type) {
    case 'taxonomy':
      $category = $object;
      $vid = $category->vid;
      $vocabulary = taxonomy_vocabulary_load($vid);

      $values['tid'] = $category->tid;
      $values['cat'] = check_plain($category->name);
      $values['cat-raw'] = $category->name;
      $values['cat-description'] = filter_xss($category->description);
      $values['vid'] = $vid;
      $values['vocab'] = check_plain($vocabulary->name);
      $values['vocab-raw'] = $vocabulary->name;
      $values['vocab-description'] = filter_xss($vocabulary->description);

      break;
  }
  return $values;
}

/**
 * Implementation of hook_token_list().
 */
function taxonomy_token_list($type = 'all') {
  if ($type == 'taxonomy' || $type == 'all') {
    $tokens['taxonomy']['tid'] = t('The id number of the category.');
    $tokens['taxonomy']['cat'] = t('The name of the category.');
    $tokens['taxonomy']['cat-raw'] = t('The unfiltered name of the category.');
    $tokens['taxonomy']['cat-description'] = t('The optional description of the taxonomy term.');
    $tokens['taxonomy']['vid'] = t("The id number of the category's parent vocabulary.");
    $tokens['taxonomy']['vocab'] = t("The vocabulary that the page's first category belongs to.");
    $tokens['taxonomy']['vocab-raw'] = t("The unfiltered vocabulary that the page's first category belongs to.");
    $tokens['taxonomy']['vocab-description'] = t('The optional description of the taxonomy vocabulary.');

    return $tokens;
  }
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
}
