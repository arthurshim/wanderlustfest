<<<<<<< HEAD
<article class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ' '. $status; print ' '. $zebra; ?> clearfix">

  <header>
    <?php print $picture ?>

    <h3><?php print $title ?></h3>

    <span class="submitted"><?php print $submitted; ?></span>

    <?php if ($comment->new) : ?>
      <span class="new"><?php print $new ?></span>
    <?php endif; ?>
  </header>

  <div class="content">
    <?php print $content ?>
    <?php if ($signature): ?>
      <div class="user-signature clearfix">
        <?php print $signature ?>
      </div>
    <?php endif; ?>
  </div>

  <?php if ($links): ?>
    <footer>
      <?php print $links ?>
    </footer>
  <?php endif; ?>

</article> <!-- /.comment -->
=======
<div class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ' '. $status ?> clear-block">
  	
  	<?php print $picture ?>
  	<p class="date"><?php print format_date($comment->timestamp, 'custom', 'm/j/y'); ?></p>
   	<?php if ($comment->new): ?>
    <!--<span class="new"><?php print $new ?></span>-->
	<?php endif; ?>
	
	<div class="entry">
	  	<div class="content">
			<p class="username"><?php print theme('username', $comment); ?></p>
     		<?php print $content ?>
    		<?php if ($signature): ?>
	    	<div class="user-signature clear-block">
      			<?php print $signature ?>
    		</div>
    		<?php endif; ?>
  		</div>
  		<?php print $links ?>
	</div>
	
</div>
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
