 <?php
include('./sites/all/themes/wanderlust/includes/header.php');
?>

	LKJSDLFJLSDJFLSJDLF

 	<?php if ($left): ?>
	<div id="sidebar-left" class="column sidebar region grid-5">
	<?php print $left; ?>
	</div>
	<?php endif; ?>
	
	<div id="main" class="column grid-11 full body-11  ">
	<div id="main-content" class="region clear-block">
		<h1 class="title" id="page-title"><?php print $title; ?></h1>
		<div class="content-container">
			<?php if ($tabs): ?>
			<div class="tabs"><?php print $tabs; ?></div>
			<?php endif; ?>
			<?php print $messages; ?>
			<?php print $help; ?> 
			<?php print $content; ?>
		</div>
		<div class="footer-11"></div>
	</div>
	
	<?php print $feed_icons; ?>
	</div>
	
	
	
	<?php if ($right): ?>
	<div id="sidebar-right" class="column sidebar region grid-5 omega">
	
	
	<?php print $right; ?>
	</div>
	<?php endif; ?>


<?php
include('./sites/all/themes/wanderlust/includes/footer.php');
?>