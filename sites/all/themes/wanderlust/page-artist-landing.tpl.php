 <?php
include('./sites/all/themes/wanderlust/includes/header.php');
?>
	<p class="section-title"><?php print $title; ?></p>
	
	<div id="container-top" class="tw"></div>
	
	<div id="container-body" class="tw clearfix">
   		
	    <div id="main" class="column grid-12 full">
 			<div id="main-content" class="region clear-block  ">
 
				<div class="content-container ">
 					<?php if ($tabs): ?>
					<div class="tabs"><?php print $tabs; ?></div>
					<?php endif; ?>
					<?php print $messages; ?>
					<?php print $help; ?> 
					<?php print $headliners; ?>
   					<?php print $content; ?>
 				</div>         
			</div>
		</div>
		<div id="left" class="column grid-4 full">
			<?php print $left; ?>
		</div>

 	</div>
 
 

<?php
include('./sites/all/themes/wanderlust/includes/footer.php');
?>