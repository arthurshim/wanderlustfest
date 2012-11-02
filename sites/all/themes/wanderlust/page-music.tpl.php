 <?php
include('./sites/all/themes/wanderlust/includes/header.php');
?>

 	<div id="main" class="column grid-12 full  page-music">
		<div class="header-12"></div>
		<div id="main-content" class="region body-12 clear-block">
			<?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
 			<div class="content-container">
				<?php if ($tabs): ?>
				<div class="tabs"><?php print $tabs; ?></div>
				<?php endif; ?>
				<?php print $messages; ?>
				<?php print $help; ?> 
 				<?php print $content; ?>
			</div>
		</div>
		<div class="footer-12"></div>
	</div>
	<div id="sidebar-right" class="column sidebar region grid-4 omega">
		<?php print $yogamusicsidebar; ?>
	</div>

<?php
include('./sites/all/themes/wanderlust/includes/footer.php');
?>