<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">
<?php print $picture ?>

	<?php if (!$page): ?>
	  <h3><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h3>
	<?php endif; ?>
	<div class="content">
		<?php print $node->field_videos_embed[0]['view'] ?>
		 <?php print $node->content['body']['#value'] ?>
 		Tags: <?php print $terms ?>
 
		
		</div>
		
		<?php echo $facebook_comments; ?>
		
</div>