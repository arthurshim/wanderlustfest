<?php

function sitesdropdown_init() {
  
}
/*
 * Implementation of hook_block
 */
function sitesdropdown_block($op = 'list', $delta = 0, $edit = array()) {
  $block = array();
  $blocks = array();
  switch ($op) {
    case 'list':
	    $blocks[0] = array(
          'info' => 'Megamenu Dropdown',
		  'cache' => BLOCK_NO_CACHE,
		  'title' => 'Megamenu Dropdown'
        );
		$blocks[1] = array(
          'info' => 'Site Identifier',
		  'cache' => BLOCK_NO_CACHE,
		  'title' => 'Megamenu Dropdown'		);
		$blocks[2] = array(
		  'info' => 'Homepage Top Navigation',
		  'title' => '',
		  'cache' => BLOCK_NO_CACHE,
		
		);
	    $blocks[3] = array(
		  'info' => 'Homepage Main Content',
		  'title' => ''
		
		);
        return $blocks;
      break;        
    
    case 'view':
        if ($delta == 0) {
			$block['content'] = sitesdropdown_create_menu();
		}
		elseif($delta == 1) {
		  $block['content'] = sitesdropdown_site_id();	
		}
		elseif($delta == 2) {
		  $block['content'] = sitesdropdown_menutop();	
		}
	     elseif($delta == 3) {
		  $block['content'] = sitesdropdown_homepage();	
		}
        return $block;
      break;      
  }
}

/*
 * Implementation of hook_block
 */
function sitesdropdown_form_alter(&$form, &$form_state, $form_id) {
  if($form_id == 'simplenews_block_form_91' || substr($form_id, 0, 15) == 'simplenews_block') {
	$form['mail'] = array(
      '#type' => 'textfield',
      '#title' => '',
      '#size' => 20,
      '#maxlength' => 128,
      '#required' => TRUE,
	  '#prefix' => '<table><tr><td>',
	  '#suffix' => '</td>'
    );
    $form['action'] = array('#type' => 'value', '#value' => 'subscribe');
    $form['#attributes'] = array('class' => 'simplenews-subscribe');
	$form['submit']['#value'] = 'JOIN';
	$form['submit']['#prefix'] = '<td>';
	$form['submit']['#suffix'] = '</td></tr></table>';
  }
}
/******************************************************************************
 * HELPER FUNCTIONS
 */
 
 
/**
 * Get all defined sites.
 *
 * @return
 *   Associative array of "sid" => {id, title, purl_prefix, front_page}.
 */
function get_sites() {
  $sites = array();

  $q = 'SELECT * FROM {sites}';
  $res = db_query($q);

  while($row = db_fetch_object($res)) {
    $sites[$row->sid] = $row;
  }
  
  return array_map(create_function('$o', 'return $o->name;'), $sites);
}


/*
 * Currently just dumps all site data to screen
 */

function sitesdropdown_create_menu($reset = FALSE) {
 // drupal_add_js(drupal_get_path('module', 'sitesdropdown').'/jkmegamenu.js');
//  drupal_add_js(drupal_get_path('module', 'sitesdropdown').'/sitesdropdown.js');
 // drupal_add_css(drupal_get_path('module', 'sitesdropdown').'/jkmegamenu.css');

  //Get all sites
  require_once drupal_get_path('module', 'sites') . '/sites.core.inc';
  
  
  static $sitelist;
  $sites = array();
  if(empty($sitelist) || $reset):
  
    $q = 'SELECT * FROM {sites}';
    $res = db_query($q);

    while($row = db_fetch_object($res)) {
    if ($nid = sites_extra_fields_get_associated_nid($row->sid)) {
        if ($node = node_load($nid)) {
          $row->extra_fields = $node;
        }
      }
      $sites[$row->sid] = $row;
    }
  
  endif;
  
 //if(function_exists('sites_get_current_site')) {
   $current_site = sites_get_current_site();
//  }
  
  //Sort sites by event date
  
  $sites = sitesdropdown_quicksort($sites);
  
  foreach($sites as $site) {
   if($site['extra_fields']['field_event_date'][0]['value'] && $site['status'] == 1 && $site['extra_fields']['field_event_hide'][0]['value'] == 'enabled'):
	$item = '<div class="event-item"><div class="event-item-image"><img src="/'.$site['extra_fields']['field_event_image'][0]['filepath'].'" /></div><div class="event-right"><div class="item-date">'.date('F j -', strtotime($site['extra_fields']['field_event_date'][0]['value'])).' '.date('j, Y', strtotime($site['extra_fields']['field_event_date'][0]['value2'])).'</div>';
	$item .= '<div class="event-item-title"><a href="'.$site['extra_fields']['field_event_url'][0]['value'].'">'.$site['title'].'</a></div>';
	$item .= '<div class="event-item-address">'.$site['extra_fields']['field_event_venue'][0]['value'].' &middot; '.$site['extra_fields']['field_event_city'][0]['value'].' ,'.$site['extra_fields']['field_event_state'][0]['value'].'</div></div></div>';
	$data[] = $item;
	
	endif;
  }
  
  $col1 = $col2 = $col3 = '<div class="column">';
  while(count($data) > 0) {
	for($x = 0; $x < 3; $x++) {
	  switch($x) {
		case 0:
		  $col1 .= $data[$x];
		  unset($data[$x]);
		  break;
		 case 1:
		   $col2 .= $data[$x];
		   unset($data[$x]);
		   break;
		 case 2:
		   $col3 .= $data[$x];
		   unset($data[$x]);
		   break;		   
	  }
	}
  }
  $col1 .= '<div class="col-footer"></div></div>';
  $col2 .= '<div class="col-footer"></div></div>';
  $col3 .= '<div class="col-footer"></div></div>';
  
  return '<a href="#" id="megaanchor">California</a><div id="megamenu1" class="megamenu">'.$col1.$col2.$col3.'</div>';
}

/*
 * Function to sort items by date
 */

function sitesdropdown_quicksort($obj) {
  $arr = sitesdropdown_objectsIntoArray($obj);
  $less = $greater = $rand_val = array();
  if(count($arr) <= 1) {
	return $arr;  
  }
  else {
	 //Get random value
	$arr_rand = sitesdropdown_getrandom($arr);
    $rand_val = array();
	
	$rand_val = $arr[$arr_rand];
	 unset($arr[$arr_rand]);
	 
	 foreach($arr as $a) {
	   if(strtotime($a['extra_fields']['field_event_date'][0]['value']) < strtotime($rand_val['extra_fields']['field_event_date'][0]['value'])) {
		   if($a['extra_fields']['field_event_hide'][0]['value'] == 'enabled'  && $a->status = 1) {
			  $less[] = $a;
		   }
		}
		else {
		  if($a['extra_fields']['field_event_hide'][0]['value'] == 'enabled'  && $a->status == 1) {
		    $greater[] = $a;
		  }
		}
	 }
	 
	$ret[] = $rand_val;
	
	return array_merge(sitesdropdown_quicksort($less), sitesdropdown_quicksort($greater));
	  
  }
	
}

/*
 * Funciton to convert object into array
 */

function sitesdropdown_objectsIntoArray($arrObjData, $arrSkipIndices = array()) {
    /*Converts an object to an array*/
    $arrData = array();
    // if input is object, convert into array
    if (is_object($arrObjData))
    {
        $arrObjData = get_object_vars($arrObjData);
    }
    if (is_array($arrObjData))
    {
        foreach ($arrObjData as $index => $value)
        {
            if (is_object($value) || is_array($value))
            {
                // recursive call
                $value = sitesdropdown_objectsIntoArray($value, $arrSkipIndices);
            }
            if (in_array($index, $arrSkipIndices))
            {
                continue;
            }
            $arrData[$index] = $value;
        }
    }
    return $arrData;
}

/*
 * Returns random value from an array
 */ 
 
function sitesdropdown_getrandom($arr) {
  
  $arr_rand = array_rand($arr);
  if($arr[$arr_rand]['extra_fields']['field_event_hide'][0]['value'] == 'enabled' && $arr[$arr_rand]['status'] == 1) {
	   return $arr_rand;
   }
   else {
	 $arr_rand = sitesdropdown_getrandom($arr);
   }
   return $arr_rand;
}

function sitesdropdown_site_id() {
  $host = explode('.', $_SERVER['HTTP_HOST']);
//  if(count($host_exp) == 3) {
//	  $vars['subdomain'] = $host_exp[0]; 
//  }
 // else {
	//if(count($host) <  3 || ( count($host[0]) > 3 && $current_domain_name != $host[0])) {
	  $result = db_result(db_query("SELECT s.sid FROM sites s WHERE s.purl_prefix = '%s'", $host[0]));
	 
	  if($result > 0) {
	    $node_res = node_load(variable_get('sites_extra_fields_site_'.$result.'_nid', 1));
	  }
	  else {
		$node_res = node_load(variable_get('sites_extra_fields_site_1_nid', 1));
	  }
	
      $_SESSION['subdomain'] = serialize($node_res);
	  static $current_domain, $current_domain_name;
	  $current_domain = $node_res;
	  $current_domain_name = $host[0];
	  
	// 
      $site = sitesdropdown_objectsIntoArray($node_res);
	 //  print '<pre>'.print_r($site, TRUE).',/pre>';
	  if($site['field_event_date'][0]['value']){
	   $item = '<div class="event-item">';
	   $item .= '<div class="event-item-title">'.$site['title'].'</div>';
	   $item .= '<div class="event-right"><div class="item-date">';
	 //If event starts / ends on same day, don't repeat day
	 if (substr($site['field_event_date'][0]['value'], 0 , 10) == substr($site['field_event_date'][0]['value2'], 0 , 10)) {
	   $item .= date('F j, Y', strtotime($site['field_event_date'][0]['value'])).'</div>';
	  }   
	  else {
	    $item .= date('F j -', strtotime($site['field_event_date'][0]['value'])).' '.date('j, Y', strtotime($site['field_event_date'][0]['value2'])).'</div>';
	   } 
	   $item .= '<div class="event-item-address">'.$site['field_event_venue'][0]['value'].' <br /> '.$site['field_event_city'][0]['value'].', '.$site['field_event_state'][0]['value'].'</div></div></div>';
	 }
	 else {
       $item = '<div class="event-item"><div class="event-right">';
	   $item .= '<div class="event-item-title"><a href="'.$site['field_event_url'][0]['value'].'">'.$site['title'].'</a></div>';
	   $item .= '<div class="event-item-address">'.$site['field_event_venue'][0]['value'].' <br />'.$site['field_event_city'][0]['value'].', '.$site['field_event_state'][0]['value'].'</div></div></div>';	 
	 }
	 
	 return $item;
	/*}
	else {
     $site = unserialize($_SESSION['subdomain']);
	 if($site['field_event_date'][0]['value']){
	   $item = '<div class="event-item"><div class="event-item-image"><img src="/'.$site['field_event_image'][0]['filepath'].'" /></div><div class="event-right"><div class="item-date">';
	   $item .= date('F j -', strtotime($site['field_event_date'][0]['value'])).' '.date('j', strtotime($site['field_event_date'][0]['value2'])).'</div>';
	   $item .= '<div class="event-item-title"><a href="'.$site['field_event_url'][0]['value'].'">'.$site['title'].'</a></div>';
	   $item .= '<div class="event-item-address">'.$site['field_event_venue'][0]['value'].' &middot; '.$site['field_event_city'][0]['value'].', '.$site['field_event_state'][0]['value'].'</div></div></div>';
	 }
	 else {
       $item = '<div class="event-item"><div class="event-item-image"><img src="/'.$site['field_event_image'][0]['filepath'].'" /></div><div class="event-right">';
	   $item .= '<div class="event-item-title"><a href="'.$site['field_event_url'][0]['value'].'">'.$site['title'].'</a></div>';
	   $item .= '<div class="event-item-address">'.$site['field_event_venue'][0]['value'].' &middot; '.$site['field_event_city'][0]['value'].', '.$site['field_event_state'][0]['value'].'</div></div></div>';	 
	 }
	 */
	 return $item;
	//}
//  }	
}

function sitesdropdown_menutop($reset = FALSE) {

  static $menus;
  if(empty($menus) || $reset):
    if (!$reset && ($cache = cache_get('sitesdd_menu'))) {
      $node_items = $cache->data;
	  $menus = $node_items;
    }
    else {
    //Select all event nodes
    $result = db_query("SELECT n.nid FROM node n INNER JOIN content_type_event cte ON n.nid = cte.nid where n.type = '%s' ORDER BY cte.field_event_date_value ASC", 'event');
    while($items = db_fetch_array($result)) {
	  $nodes[] = $items;  
    }
     $node_items = sitesdropdown_objectsIntoArray($node_items);
    foreach($nodes as $n) {
	  $node_items[] = node_load($n['nid']);	  
	  if($nd->field_event_subdomain[0]['value'] == $crrsite->purl_prefix) {
	  //  $menulink = $nd->field_scheduler_url[0]['url'];
	  }
    }
	cache_set('sitesdd_menu',$node_items, 'cache');
	$menus = $node_items;
	}
  endif;
  
  $menu_node = unserialize($_SESSION['subdomain']);
  $menulink = $menu_node->field_scheduler_url[0]['url'];
  $node_items = $menus;

  foreach($node_items as $ni) {
    foreach($ni->taxonomy as $n) {
	  if($n->tid == 93) {
		 $festivals .= sitesdropdown_menucreate($ni); 
	  }
	  elseif($n->tid == 92) {
	    $escapes .= sitesdropdown_menucreate($ni);
	  }
	  elseif($n->tid == 94) {
	    $retreats .= sitesdropdown_menucreate($ni); 
	  }
	}
	  
  }
  $output = '<table><tr><td class="label">Choose your Wanderlust Adventure</td><td class="dropdown-column fest-down"><div class="dropdown-column-div"><span class="menu-title">Festivals</span><div id="festival-col" class="dropdown-column fest-down">'.$festivals.'</div></div></td>';
  $output .= '<td class="dropdown-column esc-down"><div class="dropdown-column-div"><span class="menu-title">Escapes</span><div id="escapes-col" class="dropdown-column esc-down">'.$escapes.'</div></div></td>'; /*$escapes*/
  $output .= '<td class="dropdown-column ret-down"><div class="dropdown-column-div"><span class="menu-title">Retreats</span><div id="retreat-col" class="dropdown-column ret-down"></div></div></td>'; /*$retreats*/
  $output .= '<td class="dropdown-column studios-down"><span class="menu-title">Studios</span></td><td class="schedule"><a href="'.$menulink.'" target="_blank">Schedule Activities</a></td>';
  $output .= '</tr></table>';
  $output .= '';
 
  return $output;
  	
	
	
}

/*
 *  Formats date for event, given start and end time
 */
function sitesdropdown_format_date($start, $end) {
  //If event starts / ends on same day, don't repeat day
  if (substr($start, 0 , 10) == substr($end, 0 , 10)) {
    $date = date('F j, Y', strtotime($start));
  }   
  else {
    $date('F j -', strtotime($start)) .' '. date('j, Y', strtotime($end));
  } 
  return $date;
}




function sitesdropdown_menucreate($node) {
     
	 
	  //$site = sitesdropdown_objectsIntoArray($node);
	 
	 //  print '<pre>'.print_r($site, TRUE).',/pre>';
	  if($node->field_event_date[0]['value']  && $node->status == 1){
	   $item = '<div class="event-item">';
	   $item .= '<a href="'.$node->field_event_url[0]['url'].'"><div class="event-item-title">'.$node->title.'</div>';
	   $item .= '<div class="event-right"><div class="item-date">';
	   $item .= date('F j - ', strtotime($node->field_event_date[0]['value'])).''.date('j, Y', strtotime($node->field_event_date[0]['value2'])).'</div>';
	  
	   $item .= '<div class="event-item-address">'.$node->field_event_venue[0]['value'].' &middot; '.$node->field_event_city[0]['value'].', '.$node->field_event_state[0]['value'].'</div></div></a></div>';
	 }
	 else if ($node->status == 1){
       $item = '<div class="event-item"><div class="event-right">';
	   $item .= '<a href="'.$node->field_event_url[0]['url'].'"><div class="event-item-title">'.$node->title.'</div>';
	   $item .= '<div class="event-item-address">'.$node->field_event_venue[0]['value'].' &middot; '.$node->field_event_city[0]['value'].', '.$node->field_event_state[0]['value'].'</div></a></div></div>';	 
	 }
	 
	 return $item;	
}

function sitesdropdown_homepage($reset = FALSE) {
  static $query0, $query3;
  $current_site = sites_get_current_site();
  $sids = sites_taxonomy_get_tids_by_sid($current_site->sid);
  $sids = implode(',', $sids); 
  if(!isset($query1) || $reset) {
	  if (!$reset && ($cache = cache_get('sitesdd_query1'))) {
		  $news_array = $cache->data;
		  $query0 = $news_array;
	  }
	  else {
  		$result1 = db_query("SELECT node.nid AS nid FROM node node LEFT JOIN content_field_feature_date cff ON node.nid = cff.nid LEFT JOIN term_node site ON site.nid = node.nid WHERE (node.type in ('news', 'videos', 'photos', 'blog')) AND node.status = 1 AND (cff.field_feature_date_value > NOW() || cff.field_feature_date_value IS NULL) AND (tid IN ($sids) OR tid IS NULL) 
 					 ORDER BY cff.field_feature_date_value ASC, node.created DESC, RAND() LIMIT 0,12");
        while($items = db_fetch_array($result1)) {
	      $news[] = $items['nid'];  
  		}
	   	foreach($news as $n) {
		  $news_array[] = node_load($n);  
   		 }
  		cache_set('sitesdd_query1', $news_array);
		$query0 = $news_array;
      }
    }
  if(!isset($query3) || $reset) {
    if (!$reset && ($cache = cache_get('sitesdd_query2'))) {
	  $ad_array = $cache->data;
	  $query3 = $ad_array;
	}
	else {
      $result2 = db_query("SELECT node.nid AS nid, node_weight.sticky AS node_weight_sticky FROM node node  LEFT JOIN node node_weight ON node.nid = node_weight.nid LEFT JOIN site_node site ON site.nid = node.nid WHERE node.type in ('callouts')  AND node.status = 1 AND (sid = %d OR sid IS NULL) ORDER BY node_weight_sticky DESC LIMIT 0,2;", $current_site);
      while($item = db_fetch_array($result2)) {
	    $ads[] = $item['nid'];  
     }
     if(!empty($ads)) {
        foreach($ads as $n) {
	      $ad_array[] = node_load($n);  
	    }
	    cache_set('sitesdd_query2', $ad_array);
	    $query3 = $ad_array;
	    }
      }
	}
	
	$news_array = $query0;
    for($x = 0; $x < count($ad_array); $x++) {
	  array_pop($news_array);  
    }

  $num1 = rand(0, 4);
  $num2 = rand(5, 9);
  $ad1 = array($ad_array[0]);
  $ad2 = array($ad_array[1]);
  if(!empty($ad1) && is_object($ad_array[0])) {
    $news_array = sitesdropdown_array_insert($news_array, $ad1, $num1);
  }
  if(!empty($ad2) && is_object($ad_array[1])) {
     $news_array = sitesdropdown_array_insert($news_array, $ad2, $num2);
  }
  $output = '<table><tr>';
  for($x = 0; $x < count($news_array); $x++) {
	
	$output .= '<td>'.node_view($news_array[$x], TRUE).'</td>';
	if($x == 3 || $x == 7) {
	  $output .= '</tr><tr>';	
	}
  }
  $output .= '</tr></table>';
  return $output;
}

function sitesdropdown_array_insert($src,$ins,$pos,$rep=0) { 
  array_splice($src,$pos,$rep,$ins); 
  return($src); 
} 
