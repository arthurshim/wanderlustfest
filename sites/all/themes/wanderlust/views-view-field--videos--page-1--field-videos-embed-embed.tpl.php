<?php

print '<div class="hnid">'. $row->nid . '</div>';
//drupal_set_message('<pre>' . print_r($row, 1) . '</pre>');
$subject = $row->node_data_field_videos_embed_field_videos_embed_data;
$pattern =  '/(files\/emvideo\/)(.*?)\"/i';
preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE);

//drupal_set_message('<pre>' . print_r($matches[2][0], 1) . '</pre>');

//print  '<p><a class="" data-fancybox-group="thumb"  href="/files/imagecache/node_teaser_image/emvideo/' . $matches[2][0] . '"><img class="" width="200" height="112" title="" alt="" src="/files/imagecache/node_teaser_image/emvideo/' . $matches[2][0] .'"></a></p>'; 
print  '<p><img class="" width="200" height="112" title="" alt="" src="/files/imagecache/node_teaser_image/emvideo/' . $matches[2][0] .'"></p>'; 

print '<div class="aal"></div>';
//print $output;
/*
print '<div class="hnid">'. $row->nid . '</div>';
print '<p>' . theme('imagecache', 'node_teaser_image', $row->files_node_data_field_photos_images_filepath) . '</p>';


print '<div class="aal"></div>';
*/
//print $output;














/*
if ($teaser) {
  $i = TRUE; 
  foreach($node->field_photos_images as $k=>$c) {
    
        if($i){
       print '<p><a class="" data-fancybox-group="thumb" href="/' . $c['filepath'] . '"><img src="/' . $c['filepath'] . '" alt="" width="200" height="150" /></a></p>';
    }
    else{
           print '<p><a class="hid" data-fancybox-group="thumb" href="/' . $c['filepath'] . '"><img src="/' . $c['filepath'] . '" alt="" width="200" height="150" /></a></p>';
    }
   $i = FALSE;
  //   drupal_set_message('<pre>' . print_r($c['filepath']) . '</pre>');
  }
  print $node->title;?>
  
  <?php $_page_url = $_SERVER['SERVER_NAME'].'/'.arg(0).'/'.arg(1); ?>


<div class="social-networks">
  <div class="like-twitter">
    <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
  </div>
  <div class="like-facebook">
    <iframe src="//www.facebook.com/plugins/like.php?href=<?php print $_page_url ?>;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
  </div>
</div><!-- social networks -->
   <?php  
}
    else {
           print $node; 
    }*/
 ?>