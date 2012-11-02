<div class="header-12"></div>

 <div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="clear-block body-12 block block-<?php print $block->module ?>">
	<?php if (!empty($block->subject)): ?>
  	<h1><?php print $block->subject ?></h1>
	<?php endif;?>
  	<div class="content"><?php print $block->content ?></div>
</div>
<div class="footer-12 down"></div>
