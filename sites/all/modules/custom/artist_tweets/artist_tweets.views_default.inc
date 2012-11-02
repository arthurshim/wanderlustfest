<?php

/**
 * Implementation of hook_views_default_views().
 */
function artist_tweets_views_default_views() {
  $views = array();

  // Exported view: artist_tweets
  $view = new view;
  $view->name = 'artist_tweets';
  $view->description = '';
  $view->tag = '';
  $view->base_table = 'twitter';
  $view->core = 0;
  $view->api_version = '2';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('fields', array(
    'text' => array(
      'label' => '',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'html' => 0,
        'strip_tags' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'link_urls' => 1,
      'link_usernames' => 1,
      'link_hashtags' => 0,
      'hashtags_url' => 'http://search.twitter.com/search?q=%23',
      'exclude' => 0,
      'id' => 'text',
      'table' => 'twitter',
      'field' => 'text',
      'relationship' => 'none',
    ),
    'created_time' => array(
      'label' => '',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'html' => 0,
        'strip_tags' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'date_format' => 'medium',
      'custom_date_format' => '',
      'exclude' => 0,
      'id' => 'created_time',
      'table' => 'twitter',
      'field' => 'created_time',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('sorts', array(
    'created_time' => array(
      'order' => 'DESC',
      'id' => 'created_time',
      'table' => 'twitter',
      'field' => 'created_time',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('arguments', array(
    'screen_name' => array(
      'default_action' => 'default',
      'style_plugin' => 'default_summary',
      'style_options' => array(),
      'wildcard' => 'all',
      'wildcard_substitution' => 'All',
      'title' => '',
      'breadcrumb' => '',
      'default_argument_type' => 'context',
      'default_argument' => '',
      'validate_type' => 'none',
      'validate_fail' => 'not found',
      'glossary' => 0,
      'ignorecase' => 0,
      'limit' => '0',
      'case' => 'none',
      'path_case' => 'none',
      'transform_dash' => 0,
      'id' => 'screen_name',
      'table' => 'twitter_account',
      'field' => 'screen_name',
      'validate_user_argument_type' => 'uid',
      'validate_user_roles' => array(
        2 => 0,
        5 => 0,
        4 => 0,
        3 => 0,
      ),
      'relationship' => 'none',
      'default_options_div_prefix' => '',
      'default_argument_fixed' => '',
      'default_argument_user' => 0,
      'default_argument_image_size' => '_original',
      'namespace' => 'wl_current_node',
      'attribute' => 'twitter_url',
      'default_argument_php' => '',
      'validate_argument_node_type' => array(
        'blog' => 0,
        'image' => 0,
        'panel' => 0,
        'activity' => 0,
        'artists' => 0,
        'background_image' => 0,
        'callouts' => 0,
        'event' => 0,
        'homepage_slider' => 0,
        'home_promo' => 0,
        'home_slideshow' => 0,
        'news' => 0,
        'page' => 0,
        'page_slideshow' => 0,
        'photos' => 0,
        'simplenews' => 0,
        'slideshow' => 0,
        'videos' => 0,
        'webform' => 0,
      ),
      'validate_argument_node_access' => 0,
      'validate_argument_nid_type' => 'nid',
      'validate_argument_vocabulary' => array(
        7 => 0,
        1 => 0,
        5 => 0,
        9 => 0,
        10 => 0,
        4 => 0,
        6 => 0,
        3 => 0,
      ),
      'validate_argument_type' => 'tid',
      'validate_argument_transform' => 0,
      'validate_user_restrict_roles' => 0,
      'image_size' => array(
        '_original' => '_original',
        'thumbnail' => 'thumbnail',
        'preview' => 'preview',
      ),
      'validate_argument_php' => '',
      'default_taxonomy_tid_term_page' => 0,
      'default_taxonomy_tid_node' => 0,
      'default_taxonomy_tid_limit' => 0,
      'default_taxonomy_tid_vids' => array(
        7 => 0,
        1 => 0,
        5 => 0,
        9 => 0,
        10 => 0,
        4 => 0,
        6 => 0,
        3 => 0,
      ),
    ),
  ));
  $handler->override_option('access', array(
    'type' => 'none',
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
  $handler->override_option('title', 'Recent Tweets');
  $handler->override_option('items_per_page', 5);
  $handler = $view->new_display('block', 'Block', 'block_1');
  $handler->override_option('block_description', '');
  $handler->override_option('block_caching', -1);

  $views[$view->name] = $view;

  return $views;
}
