<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _artists_node_info() {
  $items = array(
    'artists' => array(
      'name' => t('Artists'),
      'module' => 'features',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Bio'),
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}
