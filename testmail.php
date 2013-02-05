<?php
	require_once './includes/bootstrap.inc';
	//Load Drupal
	drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
/*


foreach($_POST as $key=>$value) {
	$fields_string .= $key.'='.$value.'&';
}

$fields_string = rtrim($fields_string,'&');

curl_setopt($ch,CURLOPT_POST,count($_POST));
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);


*/

 
   // $url = 'https://subscribe.hearstmags.com/api/circ/xml/Transaction';
  
	$postArray = $_POST;
	
$url = 'http://track.namastelight.com/oi/1/7a247953b9dcd02ea3275d0b3195bce6';		
		
		
		
		$curlDefault = array(
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_FOLLOWLOCATION => TRUE,
    CURLOPT_ENCODING => '',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postArray,
    CURLOPT_HTTPHEADER => array(
        'Proxy-Connection: Close',
        'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1017.2 Safari/535.19',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*//**;q=0.8',
        'Accept-Encoding: gzip,deflate,sdch',
        'Accept-Language: en-US,en;q=0.8',
        'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.3',
        'Connection: Close',
    ),
    CURLOPT_VERBOSE => TRUE, 
);

    $handle = curl_init($url);
    curl_setopt_array($handle, $curlDefault);
    $result = curl_exec($handle);
    curl_close($handle);

 print 'result' . print_r($result, 1);
		
		
		

// print 'result' . print_r($res, 1);


?> 