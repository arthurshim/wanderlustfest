<?php
// $Id: block.tpl.php,v 1.3 2007/08/07 08:39:36 goba Exp $
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="clear-block block block-<?php print $block->module ?>">
	<img class="border" src="/sites/all/themes/wanderlust/images/grafix/border_4.gif" />
	<?php if (!empty($block->subject)): ?>
  	<h3><?php print $block->subject ?></h3>
	<?php endif;?>
  	<div class="content"><?php print $block->content ?></div>
	<img class="border" src="/sites/all/themes/wanderlust/images/grafix/border_4.gif" />

</div>
