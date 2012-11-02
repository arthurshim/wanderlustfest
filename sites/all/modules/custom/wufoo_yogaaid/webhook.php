<?php

  /*this maps wufoo field names with YogaAid*/
  $field_map = array(
    'emailAddress' => 'Field3',
    'confirmEmail' => 'Field3',
    'surname' => 'Field2',
    'firstName' => 'Field1',
    'password' => 'Field222',
    'confirmPassword' => 'Field222',
    'targetAmount' => 'Field234',
    'personalMessage' => 'Field226',
  );

  $data_for_yoga_aid = array();

  foreach ($field_map as $key=>$value) {
    $data_for_yoga_aid[$key] = $_POST[$value];
  }
  $data_for_yoga_aid['sex'] = strtolower($_POST['Field223']);

  $charity_map = array (
    'Ganga Action Parivar' => 'd43f70ff-3e4e-4136-b1ed-8bf064f8d787',
    'Yoga Across America' => 'c011e571-301a-4617-9865-ff29845bf463',
    'Yoga Gangsters' => '468c8bfb-8bb3-42f7-9cff-b19f29e4b9d7',
    'Off the Mat' => 'a7c22637-b153-4c05-b1fb-eba86ee1aca0',
    'Africa Yoga Project' => 'b497856c-6094-419d-99c7-0aaca9c559c3',
    '4 OneWorld' => '05b8e92c-a97f-431b-adf5-20f4f3156a72',
  );
  $matches = array();
  if (preg_match('/<b>(.*)<\/b>.*/', $_POST['Field232'],$matches)) {
    $_POST['Field232'] = trim($matches[1]);
  }

  //$_POST['Field232'] = trim(substr($_POST['Field232'], 0, strpos($_POST['Field232'],'<br')));
  $data_for_yoga_aid['selectedCharity'] = $charity_map[$_POST['Field232']];

  $_POST['Field4'] = trim($_POST['Field4']);
  $locationId = NULL;
  
  /*note:
  vC2SQ5Rx is a unique sequence of characters that most likely will not be part of the event details
  we will use it as a key to get event id
  */
  $event_location_map = array(
    'LA' => array(
      '1:30pm' => 'b8837e26-e922-420a-a1bc-ff157323b5fc',
      '4:00pm' => '00b03314-93c2-489a-b334-da7dd792a4e1',
      'vC2SQ5Rx' => 'c89e83c4-f706-4da7-b64f-f2baa45f659d',
    ),
		'NY' => array(
      '1:30PM' => 'a2992e72-416e-44be-afbe-0eb946314f69',
      '4:00PM' => 'd532d502-e8a3-4b29-8094-8dc3675b2d1c',
      'vC2SQ5Rx' => 'c89e83c4-f706-4da7-b64f-f2baa45f659d',
    ),
    'SF' => array(
      '12:30PM' => '5fc00902-97c3-4c42-90d9-b5d1806bcef1',
      '3:00PM' => 'db3a9a59-3e22-4434-aea5-46bd3a1b64fa',
      'vC2SQ5Rx' => '48efbe20-56f0-4766-b469-1652d79ecb31',
    ),
    
	);
	/*whatever they do in the frontend we compare it in upper case*/
//  $_POST['Field4'] = strtoupper($_POST['Field4']);
	if (isset($event_location_map[$_POST['HandshakeKey']])) {
    foreach ($event_location_map[$_POST['HandshakeKey']] as $key => $id) {
      if (strpos($_POST['Field4'], $key) !== FALSE) {
        $data_for_yoga_aid['locationId'] = $id;
        break;
      }
    }
    /*Event ID for the program, see http://dev.yogaaid.com/USA/eventfeed.json?jsoncallback=*/
    $data_for_yoga_aid['eventId'] = $event_location_map[$_POST['HandshakeKey']]['vC2SQ5Rx'];
  

  $data_for_yoga_aid['agreeToTermsAndConditions'] = TRUE;
  /*change this to production URL when we go live*/
  $req_url = 'http://dev.yogaaid.com/RemoteSignup.axd';
  $curl = curl_init($req_url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, FALSE);
  curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data_for_yoga_aid, '', '&'));
  curl_setopt($curl, CURLOPT_POST, TRUE);
  $response = curl_exec($curl);
  $result_status = curl_getinfo($curl);
  $res = json_decode($response);
 
	$varname = '/tmp/wufoo_'.$_POST['EntryId']; 
  /*In case this is already registered it will show an error and URL will be set*/
  if ($res && $res->URL && !empty($res->URL)) {
    /*We need to notify that this went through*/
	file_put_contents($varname,$res->URL);
  }
  elseif ($res && $res->Status == 'Error')  {
	file_put_contents($varname,"Error\n".$res->Message);
  }
}

  file_put_contents('/tmp/webhook.txt',
    print_r($_POST,true).
    print_r($data_for_yoga_aid,true).
    http_build_query($data_for_yoga_aid, '', '&').
    print_r($res, true).
		print_r($matches, true).
		print_r($event_location_map[$_POST['HandshakeKey']], true),
   FILE_APPEND
  );
  
