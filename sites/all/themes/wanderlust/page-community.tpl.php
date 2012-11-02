 <?php
include('./sites/all/themes/wanderlust/includes/header.php');
?>
 

    <div id="main" class="column grid-11 full  ">
		<div id="main-content" class="region clear-block body-11">
			<h3 class="title kula header-11" id="page-title">Wanderlust Kula</h3>
			<div class="content-container">
				<h4><?php print $title; ?></h4>
				<?php if ($tabs): ?>
				<div class="tabs"><?php print $tabs; ?></div>
				<?php endif; ?>
				<?php print $messages; ?>
				<?php print $help; ?> 
				<?php print $content; ?>
				<?php print $links; ?>

			</div>
      	</div>
		<div class="footer-11"></div>
    </div>

 

    <div id="sidebar-right" class="column sidebar region grid-5 omega">
 		<?php print $blogsidebar; ?>
    </div>
 


<?php
include('./sites/all/themes/wanderlust/includes/footer.php');
?>