<?php 

 //drupal_set_message('---------------------------------------------------------------------------');
$i = TRUE;
foreach($node->field_photos_images as $k=>$v) {
   // drupal_set_message('<pre>' . print_r($v['filepath'], 1) . '</pre>');
    if($i){
       print '<p><a class="fancybox-thumbs" data-fancybox-group="thumb" href="/' . $v['filepath'] . '"><img src="/' . $v['filepath'] . '" alt="" width="200" height="150" /></a></p>';
    }
    else{
           print '<p><a class="fancybox-thumbs hid" data-fancybox-group="thumb" href="/' . $v['filepath'] . '"><img src="/' . $v['filepath'] . '" alt="" width="200" height="150" /></a></p>';
    }
   $i = FALSE;
}
print $node->title; ?>