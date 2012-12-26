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
      if ($subdomain == 'wanderfest') {          /*check  if we're on front page  'wanderfest.com' */
	    $f = TRUE;                            /*set variable to check later if on frontpage */ ?>
   
<!--only include scripts and styles needed for javascript map page -->

<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/wanderlust/css/style.css?C" />
<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/wanderlust/css/custom.css?C" />
<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/wanderlust/css/header.css?C" />
<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/wanderlust/css/splash.css" />
<link rel="stylesheet" type="text/css" href="sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.css" media="screen" />
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
<!-- <script type="text/javascript" src="/sites/all/modules/jquery_update/replace/jquery.min.js?C"></script>  latest version of jquery used on view-source:http://dannyvankooten.com/demo/mapz/ but makes map drag stick--> 

<script type="text/javascript" src="/misc/drupal.js?C"></script>
<script type="text/javascript" src="/sites/all/libraries/jquery.ui/ui/minified/ui.core.min.js?C"></script>
<script type="text/javascript" src="/sites/all/libraries/jquery.ui/ui/minified/ui.draggable.min.js?C"></script>
<script type="text/javascript" src="/sites/all/libraries/jquery.ui/ui/minified/ui.droppable.min.js?C"></script>
<script type="text/javascript" src="/sites/all/libraries/jquery.ui/ui/minified/ui.sortable.min.js?C"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/js_combined.js?C"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/jquery_cookie.js?C"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/../../modules/sitesdropdown/sitesdropdown.js?C"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/jquery_mapz.js?G"></script>
<script type="text/javascript" src="sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.js"></script>

<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","imagebrowser":{"basepath":"\/","filepath":"files","modulepath":"sites\/all\/modules\/imagebrowser"},"jcarousel":{"ajaxPath":"\/jcarousel\/ajax\/views","carousels":{"jcarousel-view--homepage-carousel--block-1":{"skin":"default","visible":5,"navigation":"before","animation":"slow","start":1,"autoPause":1,"scroll":5,"selector":".jcarousel-view--homepage-carousel--block-1"}}},"lightbox2":{"rtl":0,"file_path":"\/(\\w\\w\/)files","default_image":"\/sites\/all\/modules\/lightbox2\/images\/brokenimage.jpg","border_size":10,"font_color":"000","box_color":"fff","top_position":"","overlay_opacity":"0.8","overlay_color":"000","disable_close_click":1,"resize_sequence":0,"resize_speed":400,"fade_in_speed":400,"slide_down_speed":600,"use_alt_layout":0,"disable_resize":0,"disable_zoom":0,"force_show_nav":0,"show_caption":1,"loop_items":0,"node_link_text":"","node_link_target":0,"image_count":"","video_count":"","page_count":"","lite_press_x_close":"press \u003ca href=\"#\" onclick=\"hideLightbox(); return FALSE;\"\u003e\u003ckbd\u003ex\u003c\/kbd\u003e\u003c\/a\u003e to close","download_link_text":"","enable_login":false,"enable_contact":false,"keys_close":"c x 27","keys_previous":"p 37","keys_next":"n 39","keys_zoom":"z","keys_play_pause":"32","display_image_size":"","image_node_sizes":"()","trigger_lightbox_classes":"","trigger_lightbox_group_classes":"","trigger_slideshow_classes":"","trigger_lightframe_classes":"","trigger_lightframe_group_classes":"","custom_class_handler":"lightbox_ungrouped","custom_trigger_classes":"img.ibimage","disable_for_gallery_lists":1,"disable_for_acidfree_gallery_lists":true,"enable_acidfree_videos":true,"slideshow_interval":5000,"slideshow_automatic_start":1,"slideshow_automatic_exit":1,"show_play_pause":0,"pause_on_next_click":0,"pause_on_previous_click":1,"loop_slides":0,"iframe_width":600,"iframe_height":400,"iframe_border":1,"enable_video":0},"nice_menus_options":{"delay":"40","speed":"fast"},"extlink":{"extTarget":"_blank","extClass":0,"extSubdomains":1,"extExclude":"","extInclude":"","extAlert":0,"extAlertText":"This link will take you to an external web site. We are not responsible for their content.","mailtoClass":"mailto"},"admin_menu":{"margin_top":1,"position_fixed":1,"tweak_tabs":1},"viewsSlideshowSingleFrame":{"#views_slideshow_singleframe_main_Homepage_slider-block_1":{"num_divs":10,"id_prefix":"#views_slideshow_singleframe_main_","div_prefix":"#views_slideshow_singleframe_div_","vss_id":"Homepage_slider-block_1","timeout":"8000","sort":1,"effect":"fade","speed":"700","start_paused":0,"delay":"0","fixed_height":"1","random":"0","pause":"1","pause_on_click":"1","pause_when_hidden":0,"pause_when_hidden_type":"full","amount_allowed_visible":"","remember_slide":0,"remember_slide_days":"1","controls":"0","items_per_slide":"1","pager":"2","pager_type":"Numbered","pager_hover":"2","pager_click_to_page":0,"image_count":"0","nowrap":"0","sync":"1","advanced":"cleartype: true,\ncleartypeNoBg: true","ie":{"cleartype":"true","cleartypenobg":"false"}}}});
//--><!]]>
</script>

   
<script type="text/javascript">
 $(document).ready(function() {
  
 $('input[type=checkbox]').change(function(){
   if ($(this).is(":checked")){
       $.cookie("mysite", $(this).attr('name'), {expires:30, path: '/', domain: '.wanderfest.com'});     
       $(location).attr('href', 'http://' +  $(this).attr('name') + '.wanderfest.com');
   }
  });

 $("#emailClick").click(function() {
				$.fancybox.open('#mytable');
	});
  
 $("#map-1").mapz(); /*TODO move this later to footer if mobile, because we do not want draggable map if mobile we want image to display 100% no overflow on mobile*/
 
});
 </script>

<script language="javascript">
<!--script snippet from email company to  validate email form -->
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

</script>
     
     <?php } ?>
	 <?php  if (!$f) { ?>
	 <!--if not map page print usual drupal scripts and styles and normal header -->
	 
	 <?php print $styles; ?>
     <?php print $scripts; ?>

	 
	 
	 <script>
	  $(document).ready(function(){
    // Floating sidebar effect on page nodes
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
	 
	  <!-- keep head and body in map splash-->
 </head>

 <body class="<?php print $body_classes; ?>">

 
 <!-- another if statement to not include facebook on  map splash-->
 <?php  if (!$f) { ?>
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
   <?php } ?>
  
  <div id="container" class="clearfix">
  
   
 <!-- another if statement to not only include header facebook on map splash-->
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
    
	
	//if is map splash 
	
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
<div class="mark festival legendNo"></div>
<div class="legendtitle">wanderlust festivals</div><br>
</div>
<div id="legend2">
<div class="mark yoga legendNo"></div>
<div class="legendtitle">yoga in the city events</div><br>
</div>
<div id="legend3">
<div class="mark studio legendNo"></div>
<div class="legendtitle">wanderlust yoga studios</div><br>
</div>
</div>

<div id="joinmail"><div id="emailClick"></div></div>

 <div class="joincontent">
 <table id="mytable" border="0" cellpadding="0" cellspacing="0">
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
<div id="map-1-container">   
<div id="legend" class="ui-draggable">
<div id="legend1">
<div class="mark festival legendNo"></div>
<div class="legendtitle">wanderlust festivals</div><br>
</div>
<div id="legend2">
<div class="mark yoga legendNo"></div>
<div class="legendtitle">yoga in the city events</div><br>
</div>
<div id="legend3">
<div class="mark studio legendNo"></div>
<div class="legendtitle">wanderlust yoga studios</div><br>
</div>
</div>

<div id="joinmail"><div id="emailClick"></div></div>

 <div class="joincontent">
 <table id="mytable" border="0" cellpadding="0" cellspacing="0">
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
<div id="map-1-container">   
<div id="legend" class="ui-draggable">
<div id="legend1">
<div class="mark festival legendNo"></div>
<div class="legendtitle">wanderlust festivals</div><br>
</div>
<div id="legend2">
<div class="mark yoga legendNo"></div>
<div class="legendtitle">yoga in the city events</div><br>
</div>
<div id="legend3">
<div class="mark studio legendNo"></div>
<div class="legendtitle">wanderlust yoga studios</div><br>
</div>
</div>

<div id="joinmail"><div id="emailClick"></div></div>

<div class="joincontent">
<table id="mytable" border="0" cellpadding="0" cellspacing="0">
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


/*detect if mobile */
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};


if( isMobile.any() ) {

var script = document.createElement( 'script' );
script.value = 'type="text/javascript" src="/sites/all/modules/wl_helper/wl_helper_mobile.js"';
$("head").prepend( script );
} 


else {

  $(document).ready(function () {

        $( "#legend" ).draggable();
	    $( "#joinmail" ).draggable();


if (!$(this).hasClass("test")) {
 
$(".mark:not(.legendNo)").hover(function(){

   $(this).find('div.innersite').fadeIn();
   if ($(this).hasClass("festival")) {
    
   }
   else if($(this).hasClass('yoga')) {

   }
   else if($(this).hasClass('studio')){

   }
   
},function(){
   $(this).find('div.innersite').hide();
   $('div.mark.festival.legendNo, div.mark.studio.legendNo, div.mark.yoga.legendNo').removeClass('highlight');     
});
}


/*hover legend*/
   $("#legend1 .mark").hover(function() {
   $(".mark.festival").addClass('highlight1');
   },
   function(){
   $('#.mark.festival').removeClass('highlight1'); 
   });
   
      
   $("#legend2 .mark").hover(function() {
   $(".mark.yoga").addClass('highlight1');
   },
   function(){
   $('#.mark.yoga').removeClass('highlight1'); 
   });
   
 /*for star only*/

   $("div.mark.studio").hover(function() {
   $(".mark.studio").addClass('highlight2');
   },
   function(){
   $('#.mark.studio').removeClass('highlight2'); 
   });

  
  $('body').append('<div id="ted_photo_hover"></div>');
    $('#ted_photo_hover').css({position: 'absolute'});

  $('#ted_photo_hover').offset({top: 500, left: 500});
  $('.ted_photo').hover(
  function(e){
    var name      = $(this).children('.ted_photo_data').html();
    var answer    = $(this).children('a').children('img').attr('title');
    var eventName = $(this).children('a').children('img').attr('alt');

    var hoverText = "";
    hoverText    += "Name: " + name + '<br>\r\n'; 
    hoverText    += "Event: " + eventName + '<br>\r\n'; 
    hoverText    += '"' + answer + '"'; 
  //    $('#ted_photo_hover').show();
    $('#ted_photo_hover').html(hoverText);
    $('#ted_photo_hover').css({top: e.pageY, left: e.pageX});
      divoff = $('#ted_photo_hover').offset();
  //    alert(e.pageX +' '+ e.pageY);
  //    $(this).children('a').children('img').attr('title', hoverText);
  //    $(this).children('img').attr('title', hoverText);
    //        $('#ted_photo_hover').css({'left': e.pageX + 'px', 'bottom': e.pageY + 'px', 'position': 'absolute'});
  },
  function(e){
  //    $('#ted_photo_hover').hide();
  });
  
});

}
</script>

</html>