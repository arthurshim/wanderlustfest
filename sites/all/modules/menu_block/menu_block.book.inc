<?php
<<<<<<< HEAD
=======
// $Id: menu_block.book.inc,v 1.2 2010/03/12 16:14:17 johnalbin Exp $

>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * @file
 * Provides book integration.
 */

/**
<<<<<<< HEAD
 * Implements hook_menu_block_get_menus().
 */
function book_menu_block_get_menus() {
=======
 * Implements hook_get_menus().
 */
function book_get_menus() {
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $menus = array();
  foreach (book_get_books() AS $book) {
    $menus[$book['menu_name']] = $book['title'];
  }
  return $menus;
}
<<<<<<< HEAD

/**
 * Implements hook_menu_block_get_sort_menus().
 */
function book_menu_block_get_sort_menus() {
  return array(
    '/^book\-toc\-.+/' => t('Book navigation'),
  );
}
=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
