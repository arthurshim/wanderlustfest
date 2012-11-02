<?php
header("Connection: Keep-Alive");
  /*EntityId of the form that was created*/
$entityId=$_GET['entityId'];
  $varname = '/tmp/wufoo_'.$entityId;
	$url = NULL;
	$error = FALSE;
	$count = 0;
  /*the max we will wait is 50 seconds*/
  $max_count = 20;
	
  /*we can use variable_get as variables are cached
    so we query directly
  */
$html='<html><body ><center><div style="padding-left: 20px;">Please wait while we process your registration...<br/><img class="loader" src="/sites/all/modules/custom/wufoo_yogaaid/ajax-loader.gif"></center></div>';
print $html;
	while ($count < $max_count) {
	
		if (!file_exists($varname)) {
			$count++;
	print "\n";
      /*sleep for 5 seconds and try again*/
      sleep(5);
      //variable_set($varname, 'http://www.yahoo.com');
    }
		else {
			/*terminate the loop*/
			$count = $max_count;
			$f = fopen($varname, 'r');
			$url = fgets($f);
			/*There was an error on registration, we need to show an error message and exit*/
			if ($url == 'Error') {
				$error = TRUE;
				$url = fgets($f);
			}
			fclose($f);
    }
  }
	file_put_contents('/tmp/webredirect.txt', 
		$varname
		.print_r($url, true)
		."count $count"
		."error $error"
		, FILE_APPEND);
	@unlink($varname);
	print "<style>.loader{display:none;}</style>";
	if (!$error && !empty($url)) {
	  //header('Location: '.$url);
		print '<script type="text/javascript">window.location.href="'.$url.'"</script><noscript><meta http-equiv="refresh" content="0;url='.$url.'" /></noscript>';
	}
	elseif($error) {
		print "There was an error registering your account with YogaAid.</br>".$url;
	}
	else {
		print "We are having some technical difficulties, please try again in a short while";
	}
	print '</body></html>';	
