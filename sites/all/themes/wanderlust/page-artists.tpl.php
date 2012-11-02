  <?php
include('./sites/all/themes/wanderlust/includes/header.php');
?>

	<p class="section-title"><?php print $section_title; ?></p>

	<div id="container-top" class="full"></div>
	
	<div id="container-body" class="full clearfix">
 	
	    <div id="main" class="column grid-10 full  ">
 			<div id="main-content" class="region clear-block  ">
 
				<div class="content-container ">
					<?php if ($tabs): ?>
					<div class="tabs"><?php print $tabs; ?></div>
					<?php endif; ?>
					<?php print $messages; ?>
					<?php print $help; ?> 
					<?php print $abovecontent; ?>
					<?php print $content; ?>
 				</div>         
			</div>
		</div>
		
 		<div id="sidebar-left" class="column sidebar region grid-6 omega">
			<?php print $left; ?>
		</div>
  
 	</div>
  
<?php
include('./sites/all/themes/wanderlust/includes/footer.php');
?>