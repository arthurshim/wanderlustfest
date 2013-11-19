<?php
/*EntityId of the form that was created*/
$entityId=$_GET['entityId'];
$varname = '/tmp/wufoo_'.$entityId;
$ret = '{"Status":"Waiting"}';
if (file_exists($varname)) {
  $ret = file_get_contents($varname);
  unlink($varname);
}
print $ret;

