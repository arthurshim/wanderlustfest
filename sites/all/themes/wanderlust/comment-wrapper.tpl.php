 
<div id="comments">
 
    <?php if ($node->comment_count) { ?>
        <h4 class="comments-title"><?php print format_plural($node->comment_count, '1 Comment', '@count Comments'); ?></h4>
    <?php } ?>
  <?php print $content; ?>
  
   
</div>