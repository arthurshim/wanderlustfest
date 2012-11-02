 <?php
include('./sites/all/themes/wanderlust/includes/header.php');
?>
	
	<div id="container-top"></div>
	
	<div id="container-body" class="clearfix">
 	 	<div id="main" class="tickets column grid-10">
			<div class="region  clear-block">
				<?php if ($title): ?>
	 			<?php endif; ?>
				<?php if ($tabs): ?>
				<div class="tabs"><?php print $tabs; ?></div>
				<?php endif; ?>
				<?php print $messages; ?>
				<?php print $help; ?> 
				<?php print $content; ?>
			</div>
	 	</div>
	   	<div class="column sidebar region grid-6">
			<?php print $ticketsside; ?>
		</div>
 	</div>
	
<?php
include('./sites/all/themes/wanderlust/includes/footer.php');
?>