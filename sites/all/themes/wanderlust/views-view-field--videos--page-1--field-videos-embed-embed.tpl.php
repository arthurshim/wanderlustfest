<?php
print '<div class="hnid">'. $row->nid . '</div>';
if($row->node_data_field_videos_embed_field_videos_embed_provider == 'youtube') {
    $url = 'http://www.youtube.com/watch?v=' . $row->node_data_field_videos_embed_field_videos_embed_value.'?wmode=transparent';
}elseif($row->node_data_field_videos_embed_field_videos_embed_provider == 'vimeo') {
    $url = 'http://vimeo.com/' . $row->node_data_field_videos_embed_field_videos_embed_value;
}
/*
drupal_set_message('<pre>' . print_r($row->node_data_field_videos_embed_field_videos_embed_provider, 1) . '</pre>');
drupal_set_message('<pre>' . print_r($row->node_data_field_videos_embed_field_videos_embed_value, 1) . '</pre>');*/
$subject = $row->node_data_field_videos_embed_field_videos_embed_data;
$pattern =  '/(files\/emvideo\/)(.*?)\"/i';
preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE);
/*
$pattern2 = '/\b(?:vimeo|youtube|dailymotion)\.com(.*?)\"/i';
preg_match($pattern2, $subject, $matches2, PREG_OFFSET_CAPTURE);
drupal_set_message('<pre>' . print_r($matches2, 1) . '</pre>');*/
//print  '<p><img class="" width="200" height="112" title="" alt="" src="/files/imagecache/node_teaser_image/emvideo/' . $matches[2][0] .'"></p>';
print '<a class="fancybox-media" href="' . $url . '"><img class="" width="200" height="112" title="" alt="" src="/files/imagecache/node_teaser_image/emvideo/' . $matches[2][0] .'"></a>';
//print '<div class="aal"><a class="fancybox-media" href="' . $row->node_data_field_videos_embed_field_videos_embed_embed . '"><img class="" width="200" height="112" title="" alt="" src="/files/imagecache/node_teaser_image/emvideo/' . $matches[2][0] .'"></a></div>';
 ?>
