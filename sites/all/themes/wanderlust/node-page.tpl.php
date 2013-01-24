<?php
  //$path = explode('sites:3', $node->path);
  //$path = isset($path[1]) ? $path[1] : '';
  //$_page_url = $_SERVER['SERVER_NAME'].'/'.arg(0).'/'.arg(1);
  
?>
<div id="node-<?php print $node->nid; ?>" class="node-<?php print $node->type; ?> node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clearfix">

  <h2 class="sub-title"><?php print $node->field_page_subtitle[0]['view']; ?></h2>
  <div class="page-body">
    <?php print $node->content['body']['#value']; ?>
  </div><!-- page body -->
</div><!-- node -->




 
