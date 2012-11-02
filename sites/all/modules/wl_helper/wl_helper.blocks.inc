<?php

function wl_helper_blocks_home_page_photos_tab() {
  $videos_block = views_embed_view('videos', 'block_2');
  $photos_block = views_embed_view('Photos', 'block_5');

  $output = <<<EOT
  <div class="videos-block">
    <h4>Videos</h4>
    $videos_block
  </div>
  <div class="photos-block">
    <h4>Photos</h4>
    $photos_block
  </div>
EOT;

  return array('subject' => '', 'content' => $output);
}


function wl_helper_blocks_home_page_connect_tab() {
  $fb_block = block_block('view', 25);
  $tweet_block = views_embed_view('tweets', 'block_2');

  $output = <<<EOT
  <div class="tweet-block">
    <h4>ON TWITTER</h4>
    $tweet_block
  </div>
EOT;

  $output .= '<div class="fb-block">';
  $output .= $fb_block['content'] ;
  $output .= '</div>';



  return array('subject' => '', 'content' => $output);
}


function wl_helper_blocks_lineup_copy() {
  switch (strtolower($_GET['q'])) {
    case 'theatrical-performers':
      $shorten = 'theatrical';
    case 'music':
    case 'yoga':
    case 'speakers':
    case 'healers':
    case 'meditation':
    case 'theatrical-performers':
    case 'presenters':
      $page = ($shorten ? $shorten : $_GET['q']);
      $current_site = sites_get_current_site();
      $field_name = 'field_' . $page . '_lineup_copy';
      //$text = $current_site->extra_fields->{$field_name}[0]['value'];
      $system_types = _content_type_info();
      $field = $system_types['fields'][$field_name];
      $text = content_view_field($field, $current_site->extra_fields);
      $subject = ucwords(str_replace('-', ' ', $_GET['q']));
      return array('subject' => 'About ' . $subject, 'content' => $text);
      break;

    default:
      break;
  }
}

/*function wl_helper_blocks_smart_menu() {
  $site = sites_get_current_site();
  if (!empty($site->menu_primary_links)) {
    module_load_include('module', 'menu_block');
    module_load_include('inc', 'menu_block', 'menu_block.follow');
    $tree = menu_tree_page_data($site->menu_primary_links);
    _menu_tree_prune_active_tree($tree, 'active');
    menu_tree_depth_trim($tree, 1);

    $data = array();
    $data['subject'] = menu_block_get_title($config['title_link'], $config);
    $data['content'] = menu_block_tree_output($tree, $config);
    if ($data['content']) {
      $hooks = array();
      $hooks[] = 'menu_block_wrapper__' . $config['delta'];
      $hooks[] = 'menu_block_wrapper__' . str_replace('-', '_', $config['menu_name']);
      $hooks[] = 'menu_block_wrapper';
      $data['content'] = theme($hooks, $data['content'], $config, $config['delta']);
    }
    return $data;
  }
  return array('subject' => '', 'content' => '');
}
*/