<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block clearfix">
	<?php print $picture ?>
	<?php if (!$page): ?>
	  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
	<?php endif; ?>
  	<div class="content">
		<div class="blog-meta">
			<span class="author">written by <?php print $name ?></a> on <?php print date('m/d/y',$created);?></span>
			<span class="cateogry">
		<?php 
			foreach((array)$node->taxonomy as $nid => $term){
			$out = str_replace(" ", "-", strtolower($term->name));  
		}?> 
		<?php 
			if($term->name){
			print 'Filed under: <a href="/community/'.$term->tid.'">'.$term->name.'</a>' ;
			}
		?></span>
 
 		</div>
		<?php if ($node->field_blog_image[0]['filepath'] ): ?>
		<div class="detail-image">
			<?php print theme('imagecache', 'Blog', $node->field_blog_image[0]['filepath']); ?>			
		</div> 		
		<?php endif; ?>

		<?php print $node->content['#children'] ?>
	</div>
 
 	<?php print $bloggerinfo; ?>

  <?php echo $facebook_comments; ?>

</div>