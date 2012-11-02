<?php
	include('./sites/all/themes/wanderlust/includes/header.php');
?>

	<div id="slideshow" class="clearfix clearfix">
		<?php print $homeslideshow; ?>     			 	
	</div>
	
	<div id="container-top" class="clearfix"></div>
	<div id="container-body" class="clearfix">

	<div id="home-left" class="column grid-12 full">
		<div class="region clearfix">
			<?php if ($tabs): ?>
			<div class="tabs"><?php print $tabs; ?></div>
			<?php endif; ?>
			<?php print $messages; ?>
			<?php print $help; ?> 
			<?php print $homeleft; ?>     
			<?php print $homesubleft; ?>     			 	
		</div>
	</div>
	<div id="home-right" class="grid-4">
		<?php print $homeright; ?>
		<div class="grid-4 alpha">
			<?php print $homesubright1; ?>
		</div>
		<div class="grid-4 alpha">
			<?php print $homesubright2; ?>
		</div>
	</div>
	<div id="home-bottom" class="grid-16 clearfix alpha">
		<?php print $homebottom; ?>
	</div> 

<?php
	include('./sites/all/themes/wanderlust/includes/footer.php');
?>