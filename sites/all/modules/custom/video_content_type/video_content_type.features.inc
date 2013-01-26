<?php

/**
 * Implementation of hook_node_info().
 */
function video_content_type_node_info() {
  $items = array(
    'videos' => array(
      'name' => t('Videos'),
      'module' => 'features',
      'description' => t('YouTube or Vimeo videos to appear on the Videos page and homepage'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Body'),
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}
