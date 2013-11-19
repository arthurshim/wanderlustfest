<?php $path = drupal_get_path('module', 'itunes_promo'); ?>
<?php global $base_url; ?> 
<div class='download-link'><a href="<?php print url('itunes_promo/click/'. $campaign); ?>">
<?php if($type == 'music'): ?>
<img src="<?php print url($path .'/itunes_button.png'); ?>">
<?php else: ?>
<img src="<?php print url($path .'/iBookstore.png'); ?>">
<?php endif; ?>
</a></div>
<div class="download-code">Download Code: <strong><?php print $code; ?></strong></div>
