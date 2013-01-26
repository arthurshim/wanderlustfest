<?php

/**
 * Implementation of hook_content_default_fields().
 */
function video_content_type_content_default_fields() {
  $fields = array();

  // Exported field: field_videos_embed
  $fields['videos-field_videos_embed'] = array(
    'field_name' => 'field_videos_embed',
    'type_name' => 'videos',
    'display_settings' => array(
      'weight' => '31',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'node_teaser_image_default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'video_video',
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
      'video_width' => '560',
      'video_height' => '360',
      'video_autoplay' => '',
      'preview_width' => '357',
      'preview_height' => '234',
      'preview_autoplay' => '',
      'thumbnail_width' => '174',
      'thumbnail_height' => '118',
      'thumbnail_default_path' => 'thumbs',
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
      'emthumb_label' => 'Video Embed Code custom thumbnail',
      'emthumb_description' => 'If you upload a custom thumbnail, then this will be displayed when the Video Embed Code thumbnail is called for, overriding any automatic thumbnails by custom providers.',
      'emthumb_max_resolution' => '0',
      'emimport_image_path' => 'emvideo',
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
      'label' => 'Video Embed Code',
      'weight' => '-1',
      'description' => '',
      'type' => 'emvideo_textfields',
      'module' => 'emvideo',
    ),
  );

  // Exported field: field_videos_featured
  $fields['videos-field_videos_featured'] = array(
    'field_name' => 'field_videos_featured',
    'type_name' => 'videos',
    'display_settings' => array(
      'weight' => '32',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'hidden',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'hidden',
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
    'allowed_values' => 'Off
Featured video',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => 'Off',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Featured Video',
      'weight' => 0,
      'description' => '',
      'type' => 'optionwidgets_onoff',
      'module' => 'optionwidgets',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Featured Video');
  t('Video Embed Code');

  return $fields;
}
