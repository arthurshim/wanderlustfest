<section id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?> clearfix">


  <h2>Explore the Blog</h2>

  <div class="content">
    <?php
    
    
    $terms = taxonomy_get_tree(5);


  foreach($terms as $term) {
   // drupal_set_message('<pre>' . print_r($term, 1) . '</pre>');
   print '<div class="deschiden  term' .  $term->tid .'">' .  l($term->name, "taxonomy/term/{$term->tid}", array('attributes' => array('class' => 'toblog')))  . '<div class="termdescr"><div class="categtitle">' . l($term->name, "taxonomy/term/{$term->tid}") . '</div>' . $term->description . '</div></div>';

    }
  ?>
  </div>

</section> <!-- /.block -->
