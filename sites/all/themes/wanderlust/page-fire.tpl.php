 <?php
include('./sites/all/themes/wanderlust/includes/header.php');
?>

	<?php if ($left): ?>
	<div id="sidebar-left" class="column sidebar region grid-5">
	<?php print $left; ?>
	</div>
	<?php endif; ?>

    <div id="main" class="column grid-11 full  ">
		<div class="header-12"></div>
		<div id="main-content" class="region clear-block body-11">
			<?php if ($title): ?>
			<h1><?php print $title; ?></h1>
			<?php endif; ?>
			<div class="content-container ">
				<?php if ($tabs): ?>
				<div class="tabs"><?php print $tabs; ?></div>
				<?php endif; ?>
				<?php print $messages; ?>
				<?php print $help; ?> 
				<?php print $content; ?>
				<script type="text/javascript">var host = (("https:" == document.location.protocol) ? "https://secure." : "http://");document.write(unescape("%3Cscript src='" + host + "wufoo.com/scripts/embed/form.js' type='text/javascript'%3E%3C/script%3E"));</script>

				<script type="text/javascript">
				var z7x4a9 = new WufooForm();
				z7x4a9.initialize({
				'userName':'velour', 
				'formHash':'z7x4a9', 
				'autoResize':true,
				'height':'464', 
				'ssl':true});
				z7x4a9.display();
				</script>
				
			</div>         
		</div>
		<div class="footer-11"></div>
    </div>

 

<?php
include('./sites/all/themes/wanderlust/includes/footer.php');
?>