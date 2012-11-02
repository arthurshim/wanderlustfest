<?php
<<<<<<< HEAD
=======
// $Id: menu_block.api.php,v 1.2 2010/03/12 17:30:00 johnalbin Exp $

>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * @file
 * Hooks provided by the Menu Block module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Alter the menu tree and its configuration before the tree is rendered.
 *
 * @param $tree
 *   An array containing the unrendered menu tree.
 * @param $config
 *   An array containing the configuration of the tree.
 */
function hook_menu_block_tree_alter(&$tree, &$config) {
}

/**
 * Return a list of menus to use with the menu_block module.
 *
 * @return
 *   An array containing the menus' machine names as keys with their menu titles
 *   as values.
 */
<<<<<<< HEAD
function hook_menu_block_get_menus() {
  $menus = array();
  // For each menu, add the following information:
  $menus['menu_name'] = 'menu title';

  return $menus;
}

/**
 * Return a list of menus to use on menu block's settings form.
 *
 * Menu block's settings page sorts menus for use with its "the menu selected by
 * the page" option.
 *
 * @return
 *   An array containing the menus' machine names as keys with their menu titles
 *   as values. The key may optionally be a regular expression to match several
 *   menus at a time; see book_menu_block_get_sort_menus() for an example.
 */
function hook_menu_block_get_sort_menus() {
  $menus = array();
  // For each menu, add the following information:
  $menus['menu_name'] = 'menu title';
  // Optionally, add a regular expression to match several menus at once.
  $menus['/^my\-menus\-.+/'] = t('My menus');
=======
function hook_get_menus() {
  $menus = array();
  // For each menu, add the following information:
  $menus['menu_name'] = 'menu title';
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

  return $menus;
}

/**
 * @} End of "addtogroup hooks".
 */
