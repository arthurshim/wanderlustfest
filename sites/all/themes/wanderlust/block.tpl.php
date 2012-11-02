<<<<<<< HEAD
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
=======
<?php
// $Id: block.tpl.php,v 1.3 2007/08/07 08:39:36 goba Exp $
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="clear-block block block-<?php print $block->module ?>">

<?php if (!empty($block->subject)): ?>
  <h4><?php print $block->subject ?></h4>
<?php endif;?>

  <div class="content"><?php print $block->content ?></div>
</div>
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
