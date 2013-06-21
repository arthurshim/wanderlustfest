<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">
<head>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>  <script type="text/javascript">
    
    $(document).ready(function() {
      $(".toolbar a").click(function(){
        $(this).next().toggle();
      }); 
      
      $(".toolbar .close").click(function(){
        $(".content").hide();
      }); 
      
    });
	
	

  </script>
  <link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/mobile/css/mobile-stylesheet.css" />
  <title><?php print $head_title ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />



<?php
    $base = wl_get_base_domain();
   $url = explode('.', str_replace('http://', '', $_SERVER['HTTP_HOST']));
   $subdomain  =  strtolower(trim($url[0])); 
    if ($subdomain == 'wanderfest' || $subdomain == 'wonderlustfest' || $subdomain == 'wanderlustfestival') {
    $myfront = TRUE;
    
     }   else {
    $myfront = FALSE; ?>
<?php print $styles; ?>
      <link rel="stylesheet" type="text/css" href="/sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.css" media="screen" />
      <link rel="stylesheet" type="text/css" href="/sites/all/themes/wanderlust/js/fancybox/source/helpers/jquery.fancybox-thumbs.css" />
      <?php print $scripts; ?>
      <script type="text/javascript" src="/sites/all/libraries/swfobject/swfobject.js?Gu"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/lib/jquery-1.8.2.min.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/lib/jquery.mousewheel.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
      <script type="text/javascript">
      $.noConflict();
      jQuery(document)
          .ready(function ($) {
          jQuery('.fancybox-media')
              .fancybox({
              openEffect: 'none',
              closeEffect: 'none',
              helpers: {
                  media: {}
              }
          });
          $(".pane-content td")
              .hover(
      
          function () {
              jQuery(this)
                  .find('a.frimage')
                  .addClass('fancybox-thumbs');
          },
      
          function () {
              jQuery(this)
                  .find('a.frimage')
                  .removeClass("fancybox-thumbs");
          });
          
		  
		  /*
           *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
           */
          jQuery('.fancybox-thumbs')
              .fancybox({
              prevEffect: 'none',
              nextEffect: 'none',
              closeBtn: true,
              arrows: true,
              nextClick: true,
              helpers: {
                  thumbs: {
                      width: 50,
                      height: 50
                  }
              }
          });
          $(".email")
              .click(function () {
              $.fancybox.open('#newsletter');
          });
      });
      </script>
<?php  } ?>

</head>
 <body class="<?php print $body_classes; ?>">

    <?php
    $now = time();
    if ($myfront) {
	
	
     $base = wl_get_base_domain();
     $result = db_query("SELECT n.nid FROM node n INNER JOIN content_type_event cte ON n.nid = cte.nid where n.type = '%s'  and n.status = 1 ORDER BY cte.field_event_date_value DESC", 'event');

      while ($items = db_fetch_array($result)) {
          $nodes[] = $items;
      }
      
      
      $q    = 'SELECT * FROM {sites}'; //get all sites; 
      $res  = db_query($q);
      $nids = array();
      while ($row = db_fetch_object($res)) {
	// drupal_set_message('<pre>' . print_r($base, 1) . '</pre>');
          if ($nid = sites_extra_fields_get_associated_nid($row->sid)) {
	    
              if ($node = node_load($nid)) {
                  /* load event node*/
                  $row->extra_fields = $node;
                  if ($node->field_event_hide[0]['value'] == 'enabled') {
                      $nids[] = $node->nid;
                  }
		 // print '<pre>' . print_r($node->field_event_hide[0]['value'], 1) . '</pre>';
              }
          }
 
	/*   if($now > strtotime($row->extra_fields->field_event_date[0]['value'])) {
	     $sexpired[$row->sid] = $row;
	   }*/
	   
	   // print '<pre>' . print_r(date("m.d.y", $row->extra_fields->field_event_date[0]['value']), 1) . '</pre>';
	 //   print '<pre>' . print_r(date("m.d.y", $now), 1) . '</pre>';
	 
	 $x = strtotime(date("m.d.y", $now));
	 $z = strtotime(date("m.d.y", strtotime($row->extra_fields->field_event_date[0]['value'])));
	//   print '<pre>' . $x . ' = ' .  print_r($z, 1) . '</pre>';
	   if($x > $z) {	   
	     $sexpired[$row->sid] = $row;
	   }   
	   else{
	     $sites[$row->sid] = $row;
	   }
         
      }
      
      


 function compare($a, $b) { 
    $a = strtotime($a->extra_fields->field_event_date[0]['value']);
    $b = strtotime($b->extra_fields->field_event_date[0]['value']);

    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
  }

   usort($sites, "compare");   
   usort($sexpired, "compare");   
   
      foreach ($nodes as $s) {	 
          if (!in_array($s['nid'], $nids)) {
              $row->extra_fields           = node_load($s['nid']);
              //drupal_set_message('<pre>' . print_r($row->extra_fields, 1) . '</pre>');
              $sites['studio' . $s['nid']] = $row;
          }
      }  
	   //  print '<pre>' . print_r($sites, 1) . '</pre>';
	  
	  
	  
	//  if($site->extra_fields->status == 1 && isset($site->purl_prefix) && $site->extra_fields->field_event_hide[0]['value'] == 'enabled' && $class != 'studio') {
    // drupal_set_message('<pre>' . print_r($site, 1) . '</pre>');?>
      
      
  <!-- BEGIN FESTIVAL & YITC MARKERS -->	
  
  <!-- BEGIN DIV CLASS="MARK" -->
  <!--value title-->

  <?php
  
  $sites = array_merge ($sites, $sexpired);
  foreach ($sites as $site): // print  checkboxes for sites  with own data ?> 
      
    <?php
    if(!$site->title) {
        
    }
       //     print '<pre>' . print_r($site->purl_prefix, 1) . '</pre>';
    foreach($site->extra_fields->taxonomy as $n) {

      
  	  if($n->tid == 93) {
  	     $class = 'festival'; 
  	  }
  	  elseif($n->tid == 92) {
  	    $class = 'yoga';
  	  }
  	  elseif($n->tid == 94) {
  	    $class = ''; 
  	  }
  	  elseif($n->tid == 180) {
  	    $class = 'studio'; 
  	  }
    }
	
    if($site->extra_fields->status == 1 && isset($site->purl_prefix) && $site->extra_fields->field_event_hide[0]['value'] == 'enabled' && $class != 'studio') {
     // drupal_set_message('<pre>' . print_r($site, 1) . '</pre>');?>  
  <!-- BEGIN FESTIVAL & YITC MARKERS -->	
  <!-- BEGIN DIV CLASS="MARK" -->
  <!--value title-->
    <?php
    if ($site->extra_fields->field_event_date[0]['value']) {
	//$st = strtotime($site->extra_fields->field_event_date[0]['value']);
  $z = strtotime(date("m.d.y", strtotime($site->extra_fields->field_event_date[0]['value'])));
	
	if($class == 'festival' &&  $z < $x) {
	     $item = '<div class="site-item  expire">';
	}
	
	else if ($class == 'yoga' &&  $z < $x) {
	     $item = '<div class="site-item  expire">';
	}
	
	else {
	    $item = '<div class="site-item">';
	}
	
  $item .= '<div class="site-marker"></div><div class="item-date">';

  // CODE FOR DATE WHEN START AND END DATE ARE EXACTLY THE SAME
  if (substr($site->extra_fields->field_event_date[0]['value'], 0, 10) == substr($site->extra_fields->field_event_date[0]['value2'], 0, 10)) {
      $item .= date('F j, Y', strtotime($site->extra_fields->field_event_date[0]['value'])).'</div>';
  }	  

  // CODE FOR DATE WHEN START AND END DATE HAVE THE SAME MONTH
  elseif (substr($site->extra_fields->field_event_date[0]['value'], 0, 7) == substr($site->extra_fields->field_event_date[0]['value2'], 0, 7)) {
      $item .= date('F j-', strtotime($site->extra_fields->field_event_date[0]['value'])).date('j, Y', strtotime($site->extra_fields->field_event_date[0]['value2'])). '</div>';
  }
	  
	  
  // CODE FOR DATE WHEN START & ENDING MONTHS ARE DIFFERENT
  else {
      $item .= date('F j -', strtotime($site->extra_fields->field_event_date[0]['value'])) . ' ' . date('F j, Y', strtotime($site->extra_fields->field_event_date[0]['value2'])) . '</div>';
  }
     
      $item .= '<div class="site-title"><a href="http://' . $site->purl_prefix . '.' . $base . '">' . $site->title . '</a></div>';
      $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_venue[0]['value'] . ' &bull;</div>';
      $item .= '<div class="siteaddress venue">' . $site->extra_fields->field_event_city[0]['value'] . ', ' . $site->extra_fields->field_event_state[0]['value'] . ', ' . $site->extra_fields->field_event_country[0]['value'] . '</div></div>';   
	        
      $item .= '<div class="siteevent">';

      //   print '<pre>' . print_r($site->extra_fields->field_event_date[0]['value'], 1) . '</pre>';
        // CODE FOR DATE WHEN START & ENDING DATE ARE THE SAME

	
	   /*if there is a date and is yoga display register now else buy tickets*/
	   if ($class !== 'yoga') {
		$item .= '<div class="site-tickets"><a href="http://' . $site->purl_prefix . '.' . $base .'/tickets'. '"> Buy Tickets</a></div>';
        }

     
	   else if ($class == 'yoga') {
	    $item .= '<div class="site-register"><a href="http://' . $site->purl_prefix . '.' . $base .'/register'. '"> Register now</a></div>';
        }		

    }	
	/*if no date and is yoga*/
      elseif(!$site->extra_fields->field_event_date[0]['value'] && $class == 'yoga') {
        $item = '<div class="site-item">';
        $item .= '<div class="site-marker"></div>';
        $item .= '<div class="site-title"><a href="http://' . $site->purl_prefix . '.' . $base . '">' . $site->title . '</a></div>';
        $item .= '<div class="siteevent"><div class="item-date">';
      //   print '<pre>' . print_r($site->extra_fields->field_event_date[0]['value'], 1) . '</pre>';
        // CODE FOR DATE WHEN START & ENDING DATE ARE THE SAME
        $item .= 'Stay tuned for more info' . '</div>';
      //  $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_venue[0]['value'] . '</div>';
        $item .= '</div></div>';
    } 
    
    else { /*TODO remove this*/
        $item .= '<div class="site-item"><div class="event-right">';
        $item .= '<div class="site-title"><a href="' . $site->extra_fields->field_event_url[0]['value'] . '">' . $site->title . '</a></div>';
        $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_venue[0]['value'] . '</div>';
        $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_city[0]['value'] . ', ' . $site->extra_fields->field_event_state[0]['value'] . ', ' . $site->extra_fields->field_event_country[0]['value'] . '</div></div>';
        $item .= '<div class="site-tickets"><a href="http://' . $site->purl_prefix . '.' . $base .'/tickets'. '"> Buy Tickets</a></div>';
	}
    $options = array(
        'html' => TRUE
    );		
			//festivals mobile
     if ($class == 'festival') {
      
        $fests1 .= '<li>' . $item . '</li>';
        
        // yoga mobile
    } elseif ($class == 'yoga') {
      
        $yogas1 .= '<li>' . $item . '</li>';

    } 	elseif($class == 'studio' && $site->extra_fields->field_event_hide[0]['value'] == 'enabled') { 
      $studios1 .= '<li>' . $item . '</li>';
}	

   // print $item;
    // FESTIVALS POPOVER DISPLAY
    if ($class == 'festival') {
   
        $fests .= '<div class="event-list"><div class="bl ">' . $item . '<div id="site-checkbox"><input type="checkbox" value="0" name="' . $site->purl_prefix . '"' . $c . 'onClick="SetCookie(\'mysite\', ' . $site->purl_prefix . ', 30);"><div id="saveDefualt">Save as my default</div></div></div></div>';
        
        // YITC POPOVER DISPLAY
    } elseif ($class == 'yoga') {
  
        $yogas .= '<div class="bl">' . $item . '<div id="site-checkbox"><input type="checkbox" value="0" name="' . $site->purl_prefix . '"' . $c . 'onClick="SetCookie(\'mysite\', ' . $site->purl_prefix . ', 30);">Save as my default</div></div>';

    }
  //  print $item;
    ?>
	<!-- SAVE AS DEFAULT CHECKBOX-->
  <?php }
  
  elseif($class == 'studio' && $site->extra_fields->field_event_hide[0]['value'] == 'enabled') { ?>
      
	
	<!-- BEGIN STUDIO MARKERS -->	

  <div class="mark <?php print 'studio' . $site->extra_fields->nid . ' ' . $class;?>">
    <div class="icon"></div>
  	<div class="innersite <?php print 'studio' . $site->extra_fields->nid . ' ' . $class;?>" >	
	<div class="xSplash"></div>
    	<?php
    //  drupal_set_message('<pre>' . print_r($site, 1) . '</pre>');
      if (isset($site->extra_fields->field_event_date[0]['value'])) {
	unset($item);
          $item = '<div class="site-item">';
          $item .= '<div class="site-title">' . $site->extra_fields->title . '</div>';
          $item .= '<div class="siteevent"><div class="item-date">';
	  
          if (substr($site->extra_fields->field_event_date[0]['value'], 0, 10) == substr($site->extra_fields->field_event_date[0]['value2'], 0, 10)) {
              $item .= date('F j, Y', strtotime($site->extra_fields->field_event_date[0]['value'])) . '</div>';
          } else {
              $item .= date('F j -', strtotime($site->extra_fields->field_event_date[0]['value'])) . ' ' . date('j, Y', strtotime($site->extra_fields->field_event_date[0]['value2'])) . '</div>';
          }
          $item .= '<div class="siteaddress">' /*. $site->extra_fields->field_event_venue[0]['value'] . */ . $site->extra_fields->field_event_city[0]['value'] . ', ' . $site->extra_fields->field_event_state[0]['value'] . '</div></div></div>';
      } else {
          $item = '<div class="site-item"><div class="site-marker"></div><div class="event-right">';
          $item .= '<div class="site-title"><a target="_blank" href="' . $site->extra_fields->field_event_url[0]['url'] . '">' . $site->extra_fields->title . '</a></div>';
          $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_venue[0]['value'] . ' <br />' . $site->extra_fields->field_event_city[0]['value'] . ', ' . $site->extra_fields->field_event_state[0]['value'] . '</div></div></div>';
      }
      $studios .= '<div class="bl">' . $item . '</div>';
     // print $item;?>

	
	</div>
	
	
	
	
	</div>	
	  <?php } ?>
	  
	  <?php endforeach;  ?>


<div class="splash-mobile">
  <div class="header">
    <h1><img src="/sites/all/themes/wanderlust/images/splash-mobile-logo.gif"></h1>
  </div>  
  <h2>Wanderlust Festivals</h2>
  
  <div class="section">
    <ul>
       <?php print $fests1; ?>
    </ul>
  </div>

  <h2>Wanderlust Studios</h2>
  
  <div class="section">
    <ul>
      <?php print $studios; ?>
    </ul>
  </div>
   
  <h2>Wanderlust Yoga in The City</h2>
  
  <div class="section">
    <ul>
      <?php print $yogas1; ?>
    </ul>
  </div> 
   
  <div class="toolbar">
    <ul>
      <li>
        <a href="#">ABOUT</a>
        <div class="content">
          <div class="wrapper">
          <div class="close"></div>
          <h5>About</h5>
          Wanderlust Festival is the largest celebration of its kind in the world: a 4-day celebration of yoga, music, and nature. Bringing together thousands of people from myriad backgrounds to experience adventure and transformation, Wanderlust provides the opportunity to bring your yoga practice to new heights, to enjoy the freedom of live music and to follow your spirit of adventure in spectacular outdoor settings, all the while creating community with like-minded seekers.
          </div>
        </div>
      </li>
      <li><a href="#">MISSION</a>
        <div class="content">
          <div class="wrapper">
          <div class="close"></div>
          <h5>Mission</h5>
          Wanderlust's core mission is to create community around mindful living. Mindful living is a conscious, value-based approach to leading a balanced & fulfilling life. We focus on yoga, eating well, being green, practicing purpose in our partnerships, creating awareness, showcasing art, and encouraging adventure.          
          </div>
        </div>      
      </li>
      <li class="last"><a href="http://journal.wanderlustfestival.com" target="_blank">BLOG</a></li>
    </ul>
  </div>

  </div>
   <?php } elseif($f == FALSE) { ?>
   
   
     <div id="container" class="clearfix">
    <div id="skip-link">
      <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
      <?php if ($primary_links): ?>
        <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
      <?php endif; ?>
    </div>

    <!-- BEGIN HEADER -->
    <header id="header" role="banner" class="clearfix">

      <div id="event-info">      
  
          <?php
	$site = sites_get_current_site();	
	if($site->purl_prefix == 'tremblant') {
	  $block = module_invoke('locale', 'block', 'view', 0);
	  print '<div class="swlang">' . $block['content'] . '</div>';
	}	
	//print $language_region; ?>
	
        <?php print $header; ?>
        
      </div>
      <div class="tomap">	
        <?php
		if(  $language->language == 'en'){
		/* add  $_GET['m']  value  to check where  user  came, from site or  external.  and do redirect or not  */
          $im = '<img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2013-images/see-all-events-v2.png" alt="To map" />';   
          print l($im, "http://{$base}", array( 'query' => array('m' => '1'), 'html' => TRUE));
		  } else {
		  $im = '<img src="/sites/all/themes/wanderlust/images/see-all-events-fr.png" alt="To map" />';   
          print l($im, "http://{$base}", array( 'query' => array('m' => '1'), 'html' => TRUE));
		  }
        ?>
      </div>
    </header>
    <!-- END HEADER -->
    
    <!-- BEGIN NAVIGATION -->  
	 
    <?php if ($primary_links || $secondary_links || !empty($navigation)): ?>
    <nav id="navigation" role="navigation" class="clearfix ">
      <?php  print $navigation ?>
      <div class="social-media-links">
        <a class="facebook" href="http://facebook.com/wanderlust" target="_blank" onClick="_gaq.push(['_trackEvent', 'Social Media', 'Facebook', 'follow',, false]);">Facebook</a>
        <a class="twitter" href="http://twitter.com/wanderlustfest" target="_blank" onClick="_gaq.push(['_trackEvent', 'Social Media', 'Twitter', 'follow',, false]);">Twitter</a>
        <a class="instagram" href="http://instagram.com/wanderlustfest" target="_blank" onClick="_gaq.push(['_trackEvent', 'Social Media', 'Instagram', 'follow',, false]);">Instagram</a>
        <a class="youtube" href="http://youtube.com/wanderlustfestival" target="_blank" onClick="_gaq.push(['_trackEvent', 'Social Media', 'YouTube', 'follow',, false]);">YouTube</a>
        <a class="email" id="email" >Email</a>        
      </div>
    </nav> 
    <?php endif; ?>
    <!-- HEADER EMAIL POPUP-->
    <?php print $connect ;?>
    <!-- END NAVIGATION -->
      

   
    <div id="slideshows" role="slideshow" class="slideshowhome">
      <?php if (!empty($slidemain)): ?>
      <div class="slidemain-container">
        <div class="slidemain">
          <?php print $slidemain; ?>
        </div>
      </div>
      <?php endif; ?>
       
    <?php if (!empty($slides)): ?>
      <div class="slides">
        <?php print $slides; ?>
      </div>
      <?php endif; ?>
    </div>
    
          <div id="main"  role="main" class="clearfix">
        <?php if (!empty($messages)): print $messages; endif; ?>
        <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title ?></h1><?php endif; ?>
        <?php if (!empty($tabs)): ?><div class="tabs-wrapper clearfix"><?php print $tabs; ?></div><?php endif; ?>
        <?php if (!empty($help)): print $help; endif; ?>
        <?php print $content; ?>
        
        <?php if (!empty($right)): ?>
        <div id="sidebar-right" role="complementary" class="sidebar clearfix">
          <?php print $right; ?>
        </div> <!-- /sidebar-right -->
        <?php endif; ?>
      </div> <!-- /#main -->
	  
	  
	  
	  
    
    <!-- CODE FOR CUSTOM ADS ON YITC SITES -->
    <?php 
    list($subdomain, $domain) = explode('.', $_SERVER['SERVER_NAME'], 2); 
    
    if ($subdomain == 'la' || $subdomain == 'nyc' || $subdomain == 'chi'){
      print '<img class="thankyou-partners" src="/sites/all/themes/wanderlust/images/thankyou-partners.png">
      <ul class="sponsor-logos">
                <li><a target="_blank" href="http://www.health.com/"><img src="/sites/all/themes/wanderlust/images/health.png"></a></li>
                <li><a target="_blank"  href="http://www.avocadosfrommexico.com/"><img src="/sites/all/themes/wanderlust/images/avocados.png"></a></li>
                <li><a target="_blank"  href="http://www.evolutionfresh.com/"><img src="/sites/all/themes/wanderlust/images/evolution.png"></a></li>
                <li><a target="_blank"  href="http://lyfekitchen.com/"><img src="/sites/all/themes/wanderlust/images/lyfe.png"></a></li>                                                
                <li><a target="_blank"  href="http://www.lunabar.com/"><img src="/sites/all/themes/wanderlust/images/luna.png"></a></li>                
                <li class="last"><a target="_blank"  href="https://www.facebook.com/resourcewater"><img src="/sites/all/themes/wanderlust/images/resource.png"></a></li>                
      </ul>';
    }

    elseif ($subdomain == 'sf'){
      print '<img class="thankyou-partners" src="/sites/all/themes/wanderlust/images/thankyou-partners.png">
      <ul class="sponsor-logos">
                <li><a target="_blank"  href="http://www.avocadosfrommexico.com/"><img src="/sites/all/themes/wanderlust/images/avocados.png"></a></li>
                <li><a target="_blank"  href="http://www.evolutionfresh.com/"><img src="/sites/all/themes/wanderlust/images/evolution.png"></a></li>
                <li><a target="_blank"  href="http://lyfekitchen.com/"><img src="/sites/all/themes/wanderlust/images/lyfe.png"></a></li>                                                
                <li><a target="_blank"  href="http://www.lunabar.com/"><img src="/sites/all/themes/wanderlust/images/luna.png"></a></li>                
                <li class="last"><a target="_blank"  href="https://www.facebook.com/resourcewater"><img src="/sites/all/themes/wanderlust/images/resource.png"></a></li>                
      </ul>';
    }

    else{
    }

  ?>
    
    
    
      </div> <!-- /#container -->
    
  <!-- BEGIN FOOTER -->
  <footer class="footer clearfix">
    <div class="copy">&copy; <?php echo date("Y"); ?> Wanderlust Festival LLC.</div>
    <div class="footer-links">
    <?php  
    global $language;
    if($language->language == 'fr') { ?>
	  <?php print l('Conditions d\'utilisation', 'node/4079'); ?> |
	  <?php print l('Politique de confidentialit&#233', 'node/4080', array('html' => true)); ?> 
      <?php } else { ?>
      <a href="<?php global $base_url; print $base_url; ?>/terms-of-use">Terms of Use</a> |
	  <a href="<?php global $base_url; print $base_url; ?>/privacy-policy">Privacy Policy</a> 
  
      <?php } ?>
    </div>
	<?php  

    if($language->language == 'fr') { ?>
    <div class="site-credits">
      site web par <a href="http://rootdownmedia.com" target="_blank">Root Down</a>
    </div> <?php } else {?>
	<div class="site-credits">
      Site by <a href="http://rootdownmedia.com" target="_blank">Root Down</a>
    </div>
	   <?php } ?>
  </footer>
  </div>
  <!-- END FOOTER -->

  <?php  print $closure ?>
	  
	  
	  
	  
	  
	  
	  
      
  <?php } ?>
  
  
  
</body>
</html>