<?php  
$res = db_query("SELECT f.filepath FROM {content_field_photos_images}  c
                         INNER JOIN {files} f ON c.field_photos_images_fid = f.fid
                         WHERE c.vid = %d", $row->node_revisions_vid);
$i = TRUE;
while($r = db_fetch_object($res)) { 
    if($i){
       print '<p><a class="" data-fancybox-group="thumb" href="/' . $r->filepath . '"><img src="/' . $r->filepath . '" alt="" width="200" height="150" /></a></p>';
    }
    else{
           print '<p><a class="hid" data-fancybox-group="thumb" href="/' . $r->filepath . '"><img src="/' . $r->filepath . '" alt="" width="200" height="150" /></a></p>';
    }
   $i = FALSE;
}
?>