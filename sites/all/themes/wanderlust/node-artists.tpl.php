<div class="field-item">
 	
	<h1 class="artist-name"><?php print $title ?></h1>
	<div class="share-links">
		<div class="fbshare">
			<fb:like href="<?php echo url('node/' . $node->nid, array('absolute' => TRUE)); ?>" show_faces="true" width="300"></fb:like>
		</div>
 		<div class="twshare">
			<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
			<a href="http://twitter.com/share?url=<?php echo url('node/' . $node->nid, array('absolute' => TRUE)); ?>" class="twitter-share-button">Tweet</a>
 		</div>
	<?php print $links;?>
	</div>
	

</div>

<div class="body">
	<?php print $node->content['body']['#value'] ?>
	<?php print $node->content['tweetmeme']['#value'] ?>
 </div>

<div class="artist-links">
	<?php if ($node->field_bands_url[0]['view']): ?><li class="site"><a href="<?php print $node->field_bands_url[0]['view'] ?>">Official Website</a></li><?php endif; ?>
	<?php if ($node->field_bands_myspace[0]['view']): ?><li class="myspace"><a href="<?php print $node->field_bands_myspace[0]['view'] ?>">Myspace</a></li><?php endif; ?>
</div>

<?php echo $facebook_comments; ?>