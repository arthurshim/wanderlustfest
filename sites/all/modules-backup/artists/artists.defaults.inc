<?php

/**
 * Helper to implementation of hook_default_box().
 */
function _artists_default_box() {
  $export = array();
  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'music_description';
  $box->title = 'Music at Wanderlust';
  $box->description = 'Music description';
  $box->body = '<p><span style="font-family: Times; font-size: 16px; line-height: normal;"><span style="font-family: georgia, Helvetica, Arial, sans-serif; font-size: 12px; line-height: 15px;">Wanderlust is a feast for the body, senses and the mind, and like yoga, music is something that touches on all three. &nbsp;Music results in peace, concentration, relaxation, spiritual elevation and also forms a common bond between large groups of people. &nbsp;Creating community is one of Wanderlust\'s core goals, and we\'ve selected artists who we believe will be the muse and soundtrack for our growing community.</span></span></p><div style="color: #000000; font-family: georgia !important; font-size: 12px; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: #ffffff; vertical-align: baseline; line-height: 1.3; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;"><p style="font-size: 12px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;"><br>At Wanderlust, you\'ll find a mix of styles and genres ranging from indie rock to electronic to alternative world to kirtan. From the outside, it may seem strange to present the kirtan master Jai Uttal on the same day as, say, the mashup DJ Girl Talk, but when one experiences the effect of their music on the audience – both reverence and revelry – you get to the heart of what we\'re trying to achieve.<br><br>While many of our performers are well-known artists – last year\'s performers included Common, Andrew Bird, Girl Talk, and Jenny Lewis – part of the Wanderlust experience is discovery. &nbsp;Wanderlust is a place where the band or artist that you\'ve never even heard of might leave the deepest impression. &nbsp;It\'s also a place where a well-known artist feels empowered to depart from the script. &nbsp;<br><br><span class="heading1" style="margin-top: 0px; margin-right: 0px; margin-bottom: 5px; margin-left: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; font-weight: bold; text-transform: uppercase; color: #176b71; background-position: initial initial; padding: 0px; border: 0px initial initial;">LATE NIGHT</span><br>After the Pulse closes down at midnight, Wanderlust\'s hearty late-night revelers can continue to get down at the Olympic Plaza Bar. &nbsp;We\'ll have two separate rooms going until 2 a.m. with dueling DJ sets in dueling styles. &nbsp;Get your freak on – but make sure you book your yoga classes later in the day!</p></div>';
  $box->format = 1;

  $export['music_description'] = $box;
  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'yoga_description';
  $box->title = 'Yoga at Wanderlust';
  $box->description = 'Yoga description';
  $box->body = '<p>Yoga, like music, is an internal inquiry and an exuberant physical expression -- a deeply personal experience yet also a communal celebration. &nbsp;It is a powerful vehicle for the journey that Wanderlust hopes to inspire in all the teachers, artists and participants who attend the festival. &nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>We are not affiliated to any one yogic tradition; in fact, we embrace the diversity of the modern yoga movement. &nbsp; We are dedicated to bringing a range of teachers, classes and styles that will inspire and challenge all practitioners, from the curious beginner to teachers and longtime students. &nbsp;</p><p>&nbsp;</p><p>Most of the teachers in our lineup will be familiar to you, but we also have included some emerging&nbsp; talents, as well as a group of the finest local teachers.&nbsp; We firmly believe that yoga "stars" can be a powerful inspiration, but it is our local teachers who are the glue of our yoga community. &nbsp;&nbsp;</p><p>&nbsp;</p><p>Wanderlust means <em>a very strong or irresistible impulse to travel</em>. &nbsp;Your yogic journey this weekend will undoubtedly leave you high, loose, inspired and thirsting for more.</p>';
  $box->format = 1;

  $export['yoga_description'] = $box;
  return $export;
}

/**
 * Helper to implementation of hook_content_default_fields().
 */
function _artists_content_default_fields() {
  $fields = array();

  // Exported field: field_bands_facebook
  $fields[] = array(
    'field_name' => 'field_bands_facebook',
    'type_name' => 'artists',
    'display_settings' => array(
      'weight' => '37',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'rows' => 5,
      'size' => '60',
      'default_value' => array(
        '0' => array(
          'value' => '',
          '_error_element' => 'default_value_widget][field_bands_facebook][0][value',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Facebook URL',
      'weight' => '37',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_bands_myspace
  $fields[] = array(
    'field_name' => 'field_bands_myspace',
    'type_name' => 'artists',
    'display_settings' => array(
      'weight' => '33',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'rows' => 5,
      'size' => '60',
      'default_value' => array(
        '0' => array(
          'value' => '',
          '_error_element' => 'default_value_widget][field_bands_myspace][0][value',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Myspace URL',
      'weight' => '33',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_bands_photo
  $fields[] = array(
    'field_name' => 'field_bands_photo',
    'type_name' => 'artists',
    'display_settings' => array(
      'weight' => '31',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => '300x200_default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => '400x267_default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'filefield',
    'required' => '0',
    'multiple' => '0',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => '0',
    'list_default' => 1,
    'description_field' => '0',
    'widget' => array(
      'file_extensions' => 'png gif jpg jpeg',
      'file_path' => 'artist-images',
      'progress_indicator' => 'bar',
      'max_filesize_per_file' => '',
      'max_filesize_per_node' => '',
      'max_resolution' => 0,
      'min_resolution' => 0,
      'alt' => '',
      'custom_alt' => 0,
      'title' => '',
      'custom_title' => 0,
      'title_type' => 'textfield',
      'default_image' => NULL,
      'use_default_image' => 0,
      'label' => 'Promo photo',
      'weight' => '31',
      'description' => '',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Exported field: field_bands_playlist
  $fields[] = array(
    'field_name' => 'field_bands_playlist',
    'type_name' => 'artists',
    'display_settings' => array(
      'weight' => '40',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '1',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'rows' => 5,
      'size' => '60',
      'default_value' => array(
        '0' => array(
          'value' => '',
          'format' => '1',
          '_error_element' => 'default_value_widget][field_bands_playlist][0][value',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Playlist Embed Code',
      'weight' => '40',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_bands_twitter
  $fields[] = array(
    'field_name' => 'field_bands_twitter',
    'type_name' => 'artists',
    'display_settings' => array(
      'weight' => '36',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'rows' => 5,
      'size' => '60',
      'default_value' => array(
        '0' => array(
          'value' => '',
          '_error_element' => 'default_value_widget][field_bands_twitter][0][value',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Twitter URL',
      'weight' => '36',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_bands_url
  $fields[] = array(
    'field_name' => 'field_bands_url',
    'type_name' => 'artists',
    'display_settings' => array(
      'weight' => '32',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'rows' => 5,
      'size' => '60',
      'default_value' => array(
        '0' => array(
          'value' => '',
          '_error_element' => 'default_value_widget][field_bands_url][0][value',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Website URL',
      'weight' => '32',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_bands_youtube
  $fields[] = array(
    'field_name' => 'field_bands_youtube',
    'type_name' => 'artists',
    'display_settings' => array(
      'weight' => '45',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'emvideo',
    'required' => '0',
    'multiple' => '0',
    'module' => 'emvideo',
    'active' => '1',
    'widget' => array(
      'video_width' => '425',
      'video_height' => '350',
      'video_autoplay' => '',
      'preview_width' => '280',
      'preview_height' => '230',
      'preview_autoplay' => '',
      'thumbnail_width' => '120',
      'thumbnail_height' => '90',
      'thumbnail_default_path' => '',
      'thumbnail_link_title' => 'See video',
      'providers' => array(
        'vimeo' => TRUE,
        'youtube' => TRUE,
        '0' => 1,
        'archive' => FALSE,
        'bliptv' => FALSE,
        'dailymotion' => FALSE,
        'google' => FALSE,
        'guba' => FALSE,
        'imeem' => FALSE,
        'lastfm' => FALSE,
        'livevideo' => FALSE,
        'metacafe' => FALSE,
        'myspace' => FALSE,
        'revver' => FALSE,
        'sevenload' => FALSE,
        'spike' => FALSE,
        'tudou' => FALSE,
        'twistage' => FALSE,
        'ustream' => FALSE,
        'ustreamlive' => FALSE,
        'voicethread' => FALSE,
        'yahoomusic' => FALSE,
        'zzz_custom_url' => FALSE,
      ),
      'emthumb' => 0,
      'emthumb_label' => 'YouTube custom thumbnail',
      'emthumb_description' => 'If you upload a custom thumbnail, then this will be displayed when the YouTube thumbnail is called for, overriding any automatic thumbnails by custom providers.',
      'emthumb_max_resolution' => '0',
      'emimport_image_path' => '',
      'emthumb_custom_alt' => 0,
      'emthumb_custom_title' => 0,
      'emthumb_store_local_thumbnail' => 1,
      'emthumb_start_collapsed' => 0,
      'default_value' => array(
        '0' => array(
          'embed' => '',
          'value' => '',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'YouTube Embed Code',
      'weight' => '45',
      'description' => '',
      'type' => 'emvideo_textfields',
      'module' => 'emvideo',
    ),
  );

  // Translatables
  array(
    t('Facebook URL'),
    t('Myspace URL'),
    t('Playlist Embed Code'),
    t('Promo photo'),
    t('Twitter URL'),
    t('Website URL'),
    t('YouTube Embed Code'),
  );

  return $fields;
}

/**
 * Helper to implementation of hook_context_default_contexts().
 */
function _artists_context_default_contexts() {
  $items = array();

  $items[] = array(
    'namespace' => 'bands',
    'attribute' => 'section',
    'value' => 'bands',
    'description' => '',
    'node' => array(
      '0' => 'bands',
    ),
    'views' => array(
      '0' => 'bands',
    ),
    'block' => array(),
  );
  return $items;
}

/**
 * Helper to implementation of hook_ctools_plugin_api().
 */
function _artists_ctools_plugin_api() {
  $args = func_get_args();
  $module = array_shift($args);
  $api = array_shift($args);
  if ($module == "boxes" && $api == "box") {
    return array("version" => 1);
  }
}

/**
 * Helper to implementation of hook_imagecache_default_presets().
 */
function _artists_imagecache_default_presets() {
  $items = array(
    '212x140' => array(
      'presetname' => '212x140',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale',
          'data' => array(
            'width' => '212',
            'height' => '140',
            'upscale' => 0,
          ),
        ),
      ),
    ),
    '300x200' => array(
      'presetname' => '300x200',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale',
          'data' => array(
            'width' => '300',
            'height' => '200',
            'upscale' => 0,
          ),
        ),
      ),
    ),
    '400x267' => array(
      'presetname' => '400x267',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale',
          'data' => array(
            'width' => '400',
            'height' => '267',
            'upscale' => 0,
          ),
        ),
      ),
    ),
  );
  return $items;
}
