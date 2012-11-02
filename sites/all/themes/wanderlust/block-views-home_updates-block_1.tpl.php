 

<div class="header-12"></div>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="body-12 clear-block block block-<?php print $block->module ?>">
 	<?php if (!empty($block->subject)): ?>
  	<h1><?php print $block->subject ?></h1>
	<?php endif;?>
  	<div class="content"><?php print $block->content ?></div>
	<div class="footer-12 down"></div>

</div>
