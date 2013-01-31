





<?php
if ($teaser) {
  $i = TRUE;  ?>
  
  <article id="node-<?php print $node->nid; ?>" class="node clearfix">
    <div class="content">
      <div class="homepage-table">
        <div class="node-type homenodes"><a href="/media/photos">PHOTOS</a></div>


  
 <?php
 foreach($node->field_photos_images as $k=>$c) {
    
        if($i){
       print '<a class="frimage" data-fancybox-group="thumb" href="/' . $c['filepath'] . '">'. theme('imagecache','node_teaser_image', $c['filepath']) .'</a>';
        print '<h2><a class="frimage" data-fancybox-group="thumb" href="/' . $c['filepath'] . '">'. $node->title . '</a></h2>' ;
    }
    else{
           print '<a class="frimage hid" data-fancybox-group="thumb" href="/' . $c['filepath'] . '"><img src="/' . $c['filepath'] . '" alt="" width="200" height="150" /></a>';
    }
   $i = FALSE;
  //   drupal_set_message('<pre>' . print_r($c['filepath']) . '</pre>');
  }
  ?>
  
  <?php $_page_url = $_SERVER['SERVER_NAME'].'/'.arg(0).'/'.arg(1); ?>


      </div>


<?php /* COMMENTED OUT SOCIAL BUTTONS

<div id="easysocial-box">

  <span class="easysocial-widget-twitter">
    <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
    <a href="https://twitter.com/share" data-count="horizontal" data-url="<?php echo $node_url; ?>"class="twitter-share-button">Tweet</a>
  </span>
  <span class="easysocial-widget-facebook"> <!--usually $node_url outputs relative url but here it seems to be outputting absolute-->
    <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo $node_url; ?>;send=false&amp;layout=button_count&amp;width=87&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:87px; height:21px;" allowTransparency="true"></iframe>
    <script>
    FB.XFBML.parse();
    </script>
  </span>
</div>

*/?>



  </div>
</div>

</article>


   <?php  
}
    else {
           print $node; 
    }
 ?>
