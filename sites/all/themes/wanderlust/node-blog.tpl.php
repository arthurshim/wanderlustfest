<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clearfix">
<?php endif; ?>

  <?php
  
  if ($teaser) { ?>
    <div class="node-type homenodes">
<a href="/news">BLOG</a>
</div>
  <?php  //print '<a  target="_blank" href="/node/' . $node->nid . '">'. theme('imagecache','node_teaser_image', $node->field_blog_image['0']['filepath']) .'</a>';
  //drupal_set_message('<pre>' . print_r($node->content['body']['#value'], 1) . '</pre>');
 
  $img = theme('imagecache','node_teaser_image', $node->field_blog_image['0']['filepath']) ;
  print l($img, 'http://journal.wanderlustfestival.com/node/' . $node->nid, array('attributes' => array('target' => '_blank'),'html' => true)); 
  ?>
  <div class="node-title homenodes">
  <h2>
    <?php print l($node->title, 'http://journal.wanderlustfestival.com/node/' . $node->nid, array('attributes' => array('target' => '_blank')));  ?>
  </h2>
 </div>
  <div class="node-text homenodes"><?php
      $text = "$node->title"; 
      $count = count(explode(" ", $text)); 
      if ( $count < 6 ){
        print truncate_utf8(strip_tags($node->content['body']['#value']), 100, TRUE, TRUE); 
      }
      if ( $count > 5 ){
        print truncate_utf8(strip_tags($node->content['body']['#value']), 50, TRUE, TRUE); 
      } ?>
  </div>
    <?php
  }   else {
  ?>


	  <?php if ($submitted && !$teaser): ?>
        <span class="submitted"><?php print $submitted; ?></span>
      <?php endif; ?>

  <div class="content">
    <?php print $content; ?>
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

<?php } ?>

<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif;?>
