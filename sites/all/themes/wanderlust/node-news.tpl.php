<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">
	<?php if (!$page): ?>
	  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
	<?php endif; ?>
	<div class="content">
		<div class="detail-image">
			<?php print theme('imagecache', 'Blog', $node->field_news_img[0]['filepath']); ?>			
		</div> 
		<?php print $content ?>
	</div>
 
	<?php echo $facebook_comments; ?>
	
 </div>