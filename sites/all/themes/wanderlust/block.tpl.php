<section id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?> clearfix">

  <?php if (!empty($block->subject)): ?>
    <h2><?php print $block->subject ?></h2>
  <?php endif;?>

  <div class="content">
    <?php if (isset($edit_links)): ?>
      <?php print $edit_links; ?>
    <?php endif;?>
    <?php print $block->content ?>
  </div>

</section> <!-- /.block -->
