<?php
if ($teaser) {
  $i = TRUE;  ?>
  
  <article id="node-<?php print $node->nid; ?>" class="node clearfix">
    <div class="content">
      <div class="homepage-table">
        <div class="node-type homenodes"><a href="/media/videos">VIDEOS</a></div>


  
 <?php
 //print '<div class="hnid">'. $node->nid . '</div>';
$provider = $node->field_videos_embed[0]['provider'];
$value = $node->field_videos_embed[0]['value'];
if($provider == 'youtube') {
    $url = 'http://www.youtube.com/watch?v=' . $value;
}elseif($provider == 'vimeo') {
    $url = 'http://vimeo.com/' . $value;
}

$img = $node->field_videos_embed[0]['data']['emthumb']['filepath'];
   //   drupal_set_message('<pre>' . print_r($node,1) . '</pre>');

print '<a class="fancybox-media" href="' . $url . '"><img class="" width="200" height="112" title="" alt="" src="/'  . $img . '"></a>'; 
print '<div class="node-title homenodes"><h2><a href="' . $url . '" class="fancybox-media">'. $node->title.'</a></h2></div>';

?>
  <?php $_page_url = $_SERVER['SERVER_NAME'].'/'.arg(0).'/'.arg(1); ?>


      </div>


<div id="easysocial-box">

  <span class="easysocial-widget-twitter">
    <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
  </span>
  <span class="easysocial-widget-facebook">
    <iframe src="//www.facebook.com/plugins/like.php?href=<?php print $_page_url ?>;send=false&amp;layout=button_count&amp;width=87&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:87px; height:21px;" allowTransparency="true"></iframe>
  </span>

</div>
  </div>
</div>

</article>


   <?php  
}
    else {
           print $node; 
    }
 ?>
