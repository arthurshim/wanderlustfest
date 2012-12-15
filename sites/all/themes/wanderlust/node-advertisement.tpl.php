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
    <?php //print $content;

    $img = theme('imagecache', '200x300', $node->field_adv_image[0]['filepath']);
    $link = $node->field_ad_link[0]['url'];
    print l($img, "$link", array('attrivutes' => array('target' => '_blank'), 'html' => TRUE));
   // drupal_set_message('<pre>counter' . print_r($node->content['field_adv_image'], 1) . '</pre>');
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
