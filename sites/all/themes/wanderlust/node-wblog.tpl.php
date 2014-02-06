<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clearfix">
<?php endif; ?>
  <?php if ($picture || $submitted || !$page): ?>
    <?php if (!$page): ?>
      <header>
    <?php endif; ?>
    <?php if (!$teaser): ?>
      <?php print $picture ?>
    <?php endif; ?>
    <?php if ($teaser): ?>
    
    <?php endif; ?>
	  <?php if (!$page): ?>

      <?php endif; ?>

	  <?php if ($submitted && !$teaser): ?>
        <span class="submitted"><?php print $submitted; ?></span>
      <?php endif; ?>

    <?php if (!$page): ?>
      </header>
	<?php endif; ?>
  <?php endif;?>

  <div class="content">
    <?php print $content;
    
    $prefix = "<b>Sites:</b>";
    $index = strpos($node->body, $prefix) + strlen($prefix);
    $result = substr($node->body, $index);
/*
    $a = taxonomy_get_term_by_name((string)$result);

     drupal_set_message('<pre>' . print_r($a, 1) . '</pre>');*/
    
    ?>
  </div>

  <?php if (!$teaser && (!empty($terms) || !empty($links))): ?>
    <footer>
      <?php if ($terms): ?>
        <div class="terms">
          <span><?php print t('Tags: ') ?></span><?php print $terms ?>
        </div>
      <?php endif;?>
      <?php if ($links): ?>
        <div class="links">
          <?php print $links; ?>
        </div>
      <?php endif; ?>
    </footer>
  <?php endif;?>

<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif;?>
