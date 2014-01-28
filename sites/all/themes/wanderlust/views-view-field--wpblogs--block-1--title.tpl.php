<?php print $output;
$alter['max_length'] = 80;
$alter['ellipsis'] = true;
//$alter['html'] = true;
print  	views_trim_text($alter, $row->node_revisions_body) ; //truncate_utf8($row->node_revisions_body, 80, TRUE);  //node_teaser($row->node_revisions_body, 'filter_html', $size = 80);
//drupal_set_message('<pre>' . print_r($row , 1) . '</pre>');?>