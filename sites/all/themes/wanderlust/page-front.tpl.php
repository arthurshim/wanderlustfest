<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title><?php print $head_title; ?></title>
  <?php header("Connection: keep-alive");?>
  <?php print $styles; ?>
  <?php print $scripts; ?>


  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  
   <meta property="og:description" content="Wanderlust is a one-of-a-kind festival bringing together the world's leading yoga teachers, top musical acts and DJs, renowned speakers, top chefs and winemakers, and much, much more -- all in a setting of breathtaking natural beauty."/>
   <meta property="og:title" content="Wanderlust Festival 2012"/>
   <meta property="og:type" content="website"/>
   <!--<meta property="og:url" content="http://www.wanderlustfestival.com"/>-->
   <meta property="og:image" content="http://wanderlustfestival.com/wlbird.jpg"/>
   <meta property="og:site_name" content="Wanderlust"/>
   <meta property="fb:admins" content="1407657,1149492126,515565663,508316132,6911729"/>
<meta property="fb:app_id" content="321576251186267"/>
  <!-- <script type="text/javascript">
    // cross domain tracking code for Schedule Activities link - to open in new window
  
	function openWindow(link) {
      _gaq.push(function() {
        var tracker = _gaq._getAsyncTracker();  //add name param if needed
        window.open(tracker._getLinkerUrl(link.href));
      });
      return false;
    }


  </script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12068308-1']);
  _gaq.push(['_setDomainName', 'wanderlustfestival.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  <script type="text/javascript">
function recordOutboundLink(link, category, action) {
try {
var myTracker=_gat._getTrackerByName();
_gaq.push(['myTracker._trackEvent', category , action ]);
setTimeout('document.location = "' + link.href + '"', 100)
}catch(err){}
}
</script>
-->

<script>
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-12068308-1']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_setDomainName', 'wanderlustfestival.com']);
_gaq.push(['_trackPageview']);



  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	
    <?php
      $base = wl_get_base_domain();
      $url = explode('.', str_replace('http://', '', $_SERVER['HTTP_HOST']));
      $subdomain = strtolower(trim($url[0]));
      $f = FALSE;
      if ($subdomain == 'wanderfest') {   /*check  if we on front page  'wanderfest.com' */
	$f = TRUE;  /*set  true  for check display  slider   or map  in bottom*/ ?>
   
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script>
   
<script type="text/javascript">
 $(document).ready(function() {
  
 $('input[type=checkbox]').change(function(){
   if ($(this).is(":checked")){
       $.cookie("mysite", $(this).attr('name'), {expires:30, path: '/', domain: '.wanderfest.com'});     
       $(location).attr('href', 'http://' +  $(this).attr('name') + '.wanderfest.com');
   }
  });


 $("#map-1").mapz();
 
});
 </script>

<script language="javascript">
<!--
function doSubmit(oForm) {
  if ("" == oForm.email.value) {
    alert("Please enter your Email Address");
    oForm.email.focus();
    return false;
  }if ("" == oForm.postal_code.value) {
    alert("ZIP/Postal Code is a required field");
    oForm.postal_code.focus();
      return false;
  } else {
    return true;
  }
  
  return false;
}
//-->
</script>
     <?php } ?>
	 <?php  if (!$f) { ?>
	 
	 <script>
	  $(document).ready(function(){
    // Floating sidebars on page nodes
    var sidebartop = $('.page-node .panels-flexible-region-node_layout-right').offset().top;
    $(window).scroll(function(){
        if( $(window).scrollTop() > sidebartop ) {
            $('.page-node .panels-flexible-region-node_layout-right').css({position: 'fixed', top: '40px', margin: '0 0 0 650px'});
        } else {
            $('.page-node .panels-flexible-region-node_layout-right').css({position: 'static', margin: '-35px 0 0 0'});
        }
    });
});
</script>
	 <?php } ?>
	 
	  <?php  if (!$f) { ?>
	  <!--scripts and css for frontpage go here-->
	 <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" href="sites/all/themes/wanderlust/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />


	<?php}?>
	 
 </head>

 <body class="<?php print $body_classes; ?>">
  <?php print $google_marketing; ?>
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  
  <div id="container" class="clearfix">
<?php  if (!$f) { ?>
    <div id="skip-link">
      <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
      <?php if ($primary_links): ?>
        <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
      <?php endif; ?>
    </div>
    
    
    <!-- BEGIN HEADER -->
    <header id="header" role="banner" class="clearfix">

      <div id="event-info">      
        <?php print $header; ?>
      </div>

      <div class="logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo"><img src="<?php print  base_path() . path_to_theme() . '/images/new_logo.png'//print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        <?php print $topnav; ?>
      </div>

      <div class="tomap">
        <a href="<?php print "http://{$base}"; ?>" title="<?php print t('To map'); ?>"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2013/global-splash-callout.jpg" alt="<?php print t('To map'); ?>" /></a>
      </div>
      
    </header>
    <!-- END HEADER -->
    
    <!-- BEGIN NAVIGATION -->  
    <?php if ($primary_links || $secondary_links || !empty($navigation)): ?>
    <nav id="navigation" role="navigation" class="clearfix ">
      <?php print $navigation ?>
    </nav> 
    <?php endif; ?>
    <!-- END NAVIGATION -->
      
   
 
    <?php
    }
    
      if ($f) {  ?>
      
 <?php
     $result = db_query("SELECT n.nid FROM node n INNER JOIN content_type_event cte ON n.nid = cte.nid where n.type = '%s'  and n.status = 1 ORDER BY cte.field_event_date_value ASC", 'event');
    while($items = db_fetch_array($result)) {
	  $nodes[] = $items;
    }
      $q = 'SELECT * FROM {sites}';                   //get all sites; 
      $res = db_query($q);
      $nids = array();
    while($row = db_fetch_object($res)) {
    if ($nid = sites_extra_fields_get_associated_nid($row->sid)) {
        if ($node = node_load($nid)) {                   /* load event node*/
          $row->extra_fields = $node;
	  if($node->field_event_hide[0]['value'] == 'enabled') {
	    $nids[]  = $node->nid;
	  }
        }
      }    
      $sites[$row->sid] = $row;
    }
    
    foreach($nodes as $s) {
      if(!in_array($s['nid'], $nids)) {
	 $row->extra_fields = node_load($s['nid']);
	  //drupal_set_message('<pre>' . print_r($row->extra_fields, 1) . '</pre>');
	  $sites['studio' . $s['nid']] = $row;
      }  
    }
    
    
    
    ?>
    
<div id="map-1-container">   
<div id="legend" class="ui-draggable">
<div id="legend1">
<div class="mark festival"></div>
<div class="legendtitle">wanderlust festivals</div><br>
</div>
<div id="legend2">
<div class="mark yoga"></div>
<div class="legendtitle">yoga in the city events</div><br>
</div>
<div id="legend3">
<div class="mark studio"></div>
<div class="legendtitle">wanderlust yoga studios</div><br>
</div>
</div>

<div id="joinmail"><a id="inline" href="#joincontent"><div id="emailClick"></div></a></div>
 
<div class="joincontent">
 <table border="0" cellpadding="0" cellspacing="0">/
<form method='get' name='oi_form' action='http://track.namastelight.com/oi/1/7a247953b9dcd02ea3275d0b3195bce6' onSubmit="return doSubmit(this);">
                  <tr>
                    <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;">Email*<span style="color:#841D0A;"></span></td>
                    <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;"><input type='text' name='email' id="email" /></td>
                  </tr>
                  <tr>
                    <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;">First Name<span style="color:#841D0A;"></span></td>
                    <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;"><input type='text' name='FirstName' id="firstname" /></td>
                  </tr>
                  <tr>
                    <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;">Last Name<span style="color:#841D0A;"></span></td>
                    <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;"><input type='text' name='LastName' id="lastname" /></td>
                  </tr>
                  <tr>
                    <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;">State/Province<span style="color:#841D0A;"></span></td>
                    <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;"><select name='State/Prov' size='1' id="state">
        <option value=''>Please Select</option>
<option value="">------ USA ------</option>
        <option value='AL' >AL</option>
        <option value='AK' >AK</option>
        <option value='AZ' >AZ</option>
        <option value='AR' >AR</option>
        <option value='CA' >CA</option>
        <option value='CO' >CO</option>
        <option value='CT' >CT</option>
        <option value='DE' >DE</option>
        <option value='DC' >DC</option>
        <option value='FL' >FL</option>
        <option value='GA' >GA</option>
        <option value='HI' >HI</option>
        <option value='ID' >ID</option>
        <option value='IL' >IL</option>
        <option value='IN' >IN</option>
        <option value='IA' >IA</option>
        <option value='KS' >KS</option>
        <option value='KY' >KY</option>
        <option value='LA' >LA</option>
        <option value='ME' >ME</option>
        <option value='MD' >MD</option>
        <option value='MA' >MA</option>
        <option value='MI' >MI</option>
        <option value='MN' >MN</option>
        <option value='MS' >MS</option>
        <option value='MO' >MO</option>
        <option value='MT' >MT</option>
        <option value='NE' >NE</option>
        <option value='NV' >NV</option>
        <option value='NH' >NH</option>
        <option value='NJ' >NJ</option>
        <option value='NM' >NM</option>
        <option value='NY' >NY</option>
        <option value='NC' >NC</option>
        <option value='ND' >ND</option>
        <option value='OH' >OH</option>
        <option value='OK' >OK</option>
        <option value='OR' >OR</option>
        <option value='PA' >PA</option>
        <option value='RI' >RI</option>
        <option value='SC' >SC</option>
        <option value='SD' >SD</option>
        <option value='TN' >TN</option>
        <option value='TX' >TX</option>
        <option value='UT' >UT</option>
        <option value='VT' >VT</option>
        <option value='VA' >VA</option>
        <option value='WA' >WA</option>
        <option value='WV' >WV</option>
        <option value='WI' >WI</option>
        <option value='WY' >WY</option>
<option value="">----- CANADA -----</option>
        <option value='AB' >AB</option>
        <option value='BC' >BC</option>
        <option value='LB' >LB</option>
        <option value='MB' >MB</option>
        <option value='NB' >NB</option>
        <option value='NF' >NF</option>
        <option value='NS' >NS</option>
        <option value='NT' >NT</option>
        <option value='ON' >ON</option>
        <option value='PE' >PE</option>
        <option value='QC' >QC</option>
        <option value='SK' >SK</option>
        <option value='YT' >YT</option>
<option value="">---------------</option>
<option value='Other' >OTHER</option>
      </select></td>
                  </tr>
 <tr>
                    <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;">ZIP/Postal Code<span style="color:#841D0A;">*</span></td>
                    <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;"><input type='text' name='Zip/PostalCode' id="postal_code" /></td>
                  </tr>
 <tr>
   <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;">Country<span style="color:#841D0A;"></span></td>
   <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;"><select name='Country' size='1' id="country">
            <option value=''>Please Select</option>
            <option value='United States' >United States</option>
            <option value='Canada' >Canada</option>
<option value='Other' >OTHER</option>
          </select></td>
   </tr>
 <tr>
   <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;">How
     did you hear about us? </td>
   <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;"><input type='text' name='HearAbout' /></td>
   </tr>
                  <tr>
                    <td valign="middle" style="padding:2px; font: normal normal 10px Arial, Helvetica, sans-serif; color:#545454;">
                    <input type='hidden' name='goto' value='' />
<input type='hidden' name='iehack' value='&#9760;' />
                    
                                          <span style="color:#841D0A;"><em>*Required</em></span></td>
                    <td valign="middle" style="padding:2px; font: normal normal 13px Arial, Helvetica, sans-serif; color:#545454;"><input type='submit' value='Subscribe' /></td>
                  </tr>
                </form>
</table>
  
  <?php //$block = module_invoke('simplenews', 'block', 'view', '91'); print $block['content'];   ?>
 </div>
 
 


<div class="map-viewport">
<div id="map-1" >
<img  class="level" src="<?php print base_path() . path_to_theme() ; ?>/images/map.jpg" width="2146" height="1170" usemap="#map" alt="" />
  <?php  foreach ($sites as $site): // print  checkboxes for sites  with own data ?> 
      <?php
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
	
      if($site->extra_fields->status == 1 && isset($site->purl_prefix)/* && $site->extra_fields->field_event_hide[0]['value'] == 'enabled'*/) {  ?>
      <div class="mark <?php print $site->purl_prefix . ' ' . $class;?>">
	<div class="innersite">	
	<?php 
	  if($site->extra_fields->field_event_date[0]['value']){
	   $item =  '<div class="site-item">';
	   $item .= '<div class="site-title">' . $site->title . '</div>';
	   $item .= '<div class="siteevent"><div class="item-date">';
	  if (substr($site->extra_fields->field_event_date[0]['value'], 0 , 10) == substr($site->extra_fields->field_event_date[0]['value2'], 0 , 10)) {
	    $item .= date('F j, Y', strtotime($site->extra_fields->field_event_date[0]['value'])).'</div>';
	  }   
	  else {
	    $item .= date('F j -', strtotime($site->extra_fields->field_event_date[0]['value'])).' '.date('j, Y', strtotime($site->extra_fields->field_event_date[0]['value2'])).'</div>';	 
	   } 
	    $item .= '<div class="siteaddress">' /*. $site->extra_fields->field_event_venue[0]['value'] . */. $site->extra_fields->field_event_city[0]['value'].', '. $site->extra_fields->field_event_state[0]['value'] . '</div></div></div>';
	 }
	 else {
            $item = '<div class="site-item"><div class="event-right">';
	    $item .= '<div class="site-title"><a href="' . $site->extra_fields->field_event_url[0]['value'] . '">' . $site->title . '</a></div>';
	    $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_venue[0]['value'] . ' <br />' . $site->extra_fields->field_event_city[0]['value'] . ', ' . $site->extra_fields->field_event_state[0]['value'].'</div></div></div>';	 
	 }	 
	 
	print $item; ?>
	 <div class="visitsite"><?php print l('VISIT SITE', 'http://' . $site->purl_prefix . '.' . $base);  ?> </div>
	<div id="site-checkbox"><input type="checkbox" value="0" name="<?php print $site->purl_prefix; ?>"<?php if(isset($_COOKIE["mysite"]) && $_COOKIE["mysite"] == $site->purl_prefix): ?> checked="checked"<?php endif; ?> onClick="SetCookie('mysite', '<?php print $site->purl_prefix; ?>', 30);">Save this event as default</div></div>
      </div>
    <?php }
               elseif($class == 'studio') { ?>
		      <div class="mark <?php print 'studio' . $site->extra_fields->nid . ' ' . $class;?>">
	<div class="innersite">	
	<?php
	//drupal_set_message('<pre>' . print_r($site, 1) . '</pre>');
	  if($site->extra_fields->field_event_date[0]['value']){
	   $item =  '<div class="site-item">';
	   $item .= '<div class="site-title">' . $site->extra_fields->title . '</div>';
	   $item .= '<div class="siteevent"><div class="item-date">';
	  if (substr($site->extra_fields->field_event_date[0]['value'], 0 , 10) == substr($site->extra_fields->field_event_date[0]['value2'], 0 , 10)) {
	    $item .= date('F j, Y', strtotime($site->extra_fields->field_event_date[0]['value'])).'</div>';
	  }   
	  else {
	    $item .= date('F j -', strtotime($site->extra_fields->field_event_date[0]['value'])).' '.date('j, Y', strtotime($site->extra_fields->field_event_date[0]['value2'])).'</div>';	 
	   } 
	    $item .= '<div class="siteaddress">' /*. $site->extra_fields->field_event_venue[0]['value'] . */. $site->extra_fields->field_event_city[0]['value'].', '. $site->extra_fields->field_event_state[0]['value'] . '</div></div></div>';
	 }
	else {
            $item = '<div class="site-item"><div class="event-right">';
	    $item .= '<div class="site-title">' . $site->extra_fields->title . '</div>';
	    $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_venue[0]['value'] . ' <br />' . $site->extra_fields->field_event_city[0]['value'] . ', ' . $site->extra_fields->field_event_state[0]['value'].'</div></div></div>';	 
	 }	 
	 
	print $item; ?>
	 <div class="visitsite"><?php print l('VISIT', "{$site->extra_fields->field_event_url[0]['url']}");  ?> </div>
      </div>
		
		
	  <?php } ?>
<?php  endforeach;  ?>


</div>
	  <map name="map">
	  </map>
</div>

</div>
      
   
    </div>
<?php  
      } 
        else {  /*if not front page - print slide and other content */?> 

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
    
    <?php } ?>
    
    
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
      

     <?php   if (!$f) { ?>
    <footer id="footer" role="contentinfo" class="clearfix">
      <?php if (!empty($footertop)): ?>
      <div class="footertop">
        <div id="footer-top-inner">
        <?php print $footertop; ?>
        </div>
      </div>
      <?php endif; ?>
      <div class="subhead">
        <?php if (!empty($footer)): print $footer; endif; ?>
        <?php print $feed_icons ?>
      </div>
      <div class="footer-message">
        <div class="footer-message-content"><?php print $footer_message; ?></p>
      </div>
    </footer> <!-- /#footer -->
    <?php } print $closure ?>
  </div> <!-- /#container -->


</body>
<script>
if ( navigator.userAgent.indexOf('iPhone') == -1 || navigator.userAgent.indexOf('Android') == -1  )
  {

$(function() {
        $( "#legend" ).draggable();
		   $( "#joinmail" ).draggable();
    });
	
  }
</script>
</html>
