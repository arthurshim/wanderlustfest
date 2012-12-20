<?php $_page_url = $_SERVER['SERVER_NAME'].'/'.arg(0).'/'.arg(1); ?>

<?php print $fields['field_photos_images']->content; //drupal_set_message('<pre>' . print_r($fields, 1) . '</pre>'); /*print $rows; */?>
<?php print $fields['field_photos_images_fid']->content; ?>
<?php print $fields['title']->content; ?>
<div class="social-networks">
  <div class="like-twitter">
    <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
  </div>
  <div class="like-facebook">
    <iframe src="//www.facebook.com/plugins/like.php?href=<?php print $_page_url ?>;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
  </div>
</div><!-- social networks -->