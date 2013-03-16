<section id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?> clearfix">

  <?php if (!empty($block->subject)): ?>
    <h2><?php print $block->subject ?></h2>
  <?php endif;?>

  <div class="content">
    <?php
    
    
    $terms = taxonomy_get_tree(5);


  foreach($terms as $term) {
    //drupal_set_message('<pre>' . print_r($term, 1) . '</pre>');
   print '<div class="deschiden  term' .  $term->tid .'"><div class="termdescr"><div class="categtitle">' . l($term->name, "taxonomy/term/{$term->tid}") . '</div>' . $term->description . '</div></div>';

    }
  ?>
  </div>

</section> <!-- /.block -->
