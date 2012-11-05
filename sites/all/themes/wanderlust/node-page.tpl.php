<?php
  $path = explode('sites:3', $node->path);
  $path = isset($path[1]) ? $path[1] : '';
  $_page_url = $_SERVER['SERVER_NAME'].'/'.arg(0).'/'.arg(1);
  
?>
<div id="node-<?php print $node->nid; ?>" class="node-<?php print $node->type; ?> node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clearfix">
  <div class="page-description">
    <?php print $node->field_page_description[0]['view']; ?>
  </div><!-- page description -->
  <div class="social-networks">
    <div class="like-facebook">
      <iframe src="//www.facebook.com/plugins/like.php?href=http://<?php print $_page_url; ?>;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
    </div>
    <div class="like-twitter">
      <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
      <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
    </div>
    <div class="like-googleplus">
      <script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
      <g:plusone size="medium"></g:plusone>
    </div>
  </div><!-- social networks -->
  <h2 class="sub-title"><?php print $node->field_page_subtitle[0]['view']; ?></h2>
  <div class="page-body">
    <?php print $node->content['body']['#value']; ?>
  </div><!-- page body -->
</div><!-- node -->




 
