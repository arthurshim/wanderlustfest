<?php
	require_once './includes/bootstrap.inc';
	//Load Drupal
	drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);


header('Access-Control-Allow-Origin: *');

//header('Access-Control-Allow-Methods: POST, GET, OPTIONS');


 
   // $url = 'https://subscribe.hearstmags.com/api/circ/xml/Transaction';
  
		$post_data ="email=test2@40test.com&FirstName=test&LastName=test2&State2FProv=AZ&ZipCode=45852&Country=United+States&EventName=VT&HearAbout=&goto=&iehack=%E2%98%A0";
                $ch = curl_init();  
		curl_setopt($ch, CURLOPT_URL,"http://track.namastelight.com/oi/1/7a247953b9dcd02ea3275d0b3195bce6");
		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($ch, CURLOPT_TIMEOUT,60);
		curl_setopt($ch, CURLOPT_HEADER,0);  // DO NOT RETURN HTTP HEADERS 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);  // RETURN THE CONTENTS OF THE CALL
		$res = curl_exec($ch);	 
		curl_close($ch);



 print 'result' . print_r($res, 1);


?> 