 <?php
include('./sites/all/themes/wanderlust/includes/header.php');
?>



    <div id="main" class="column grid-11 full  ">
		<div class="header-12"></div>

		<div id="main-content" class="region clear-block body-11">
			<?php if ($title): ?>
			<h1 class="title header-11" id="page-title"><?php print $title; ?></h1>
			<?php endif; ?>
			<div class="content-container ">
				<?php if ($tabs): ?>
				<div class="tabs"><?php print $tabs; ?></div>
				<?php endif; ?>
				<?php print $messages; ?>
				<?php print $help; ?> 
				<?php print $content; ?>
			</div>         
		</div>
		<div class="footer-11"></div>
    </div>

 	<div   class="column sidebar region grid-5">
	<?php print $fillmoresidebar; ?>
	</div>
 
<?php
include('./sites/all/themes/wanderlust/includes/footer.php');
?>