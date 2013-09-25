<!doctype html>
<!--[if lt IE 7]> <html xmlns:og="http://opengraphprotocol.org/schema/" class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html xmlns:og="http://opengraphprotocol.org/schema/" class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html xmlns:og="http://opengraphprotocol.org/schema/" class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html xmlns:og="http://opengraphprotocol.org/schema/" class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title><?php   $base = wl_get_base_domain();
   $url = explode('.', str_replace('http://', '', $_SERVER['HTTP_HOST']));
   $subdomain  =  strtolower(trim($url[0]));
   
   if ($subdomain == 'wanderfest' || $subdomain == 'wonderlustfest' || $subdomain == 'wanderlustfestival') {   ?> Wanderlust Festival - Find Your True North <?php } else if ($subdomain == 'austin')  {?> Wanderlust Festival ~ November 8-10, 2013 ~ Austin, TX ~ A Yoga & Music Block Party <?php } else { print $head_title; } ?>
   </title>
  <?php header("Connection: keep-alive");?>
  <!-- CUSTOM FACEBOOK OG META TAGS FOR SPLASH & HOMEPAGE -->
  <meta property="og:title" content="
  <?php 
    list($subdomain, $domain) = explode('.', $_SERVER['SERVER_NAME'], 2); 
    
    if ($subdomain == 'squaw'){
      print 'Wanderlust California 2013';
    }
    elseif ($subdomain == 'stratton'){
      print 'Wanderlust Stratton 2013';
    }
    elseif ($subdomain == 'whistler'){
      print 'Wanderlust Whistler 2013';
    }
    elseif ($subdomain == 'colorado'){
      print 'Wanderlust Colorado 2013';
    }
    elseif ($subdomain == 'chile'){
      print 'Wanderlust Chile 2013';
    }
    elseif ($subdomain == 'oahu'){
      print 'Wanderlust Oahu 2014';
    }
    else{
      print 'Wanderlust Festival';
    }

    
  ?>"/>
  <meta property="og:image" content="http://wanderfest.com/sites/all/themes/wanderlust/images/fb-logo.jpg"/>
  <meta property="og:site_name" content="Wanderlust Festival"/>
  <meta property="og:type" content="website"/>  
  <meta property="og:url" content="http://<?php print $_SERVER['HTTP_HOST']; ?>"/>  
  <meta property="og:description" content="Wanderlust is a 4-day adventure that combines yoga, music, nature and inspiration.  Find your true north."/>
	  
  <!--not sure why but we need to call scripts from variable cutting and pasting breaks redirect-->


    <?php
      $f = FALSE;
      if ($subdomain == 'wanderfest' || $subdomain == 'wonderlustfest' || $subdomain == 'wanderlustfestival') {   /*check  if we're on front page  'wanderfest.com' */
	  $f = TRUE;  /*set  true  for check display  slider   or map  in bottom*/ ?>
	<link type="text/css" rel="stylesheet" media="all" href="/sites/all/modules/admin_menu/admin_menu.css" />
	<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/wanderlust/css/type.css" />
	<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/wanderlust/css/splash.css" />
	<link rel="stylesheet" type="text/css" href="sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.css" media="all" />
	
	
	
  <!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="/sites/all/themes/wanderlust/css/ie7.css" />
  <![endif]-->

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<!--cut and paste $scripts variable -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="/misc/drupal.js?h"></script>
<script type="text/javascript" src="/sites/all/modules/pngfix/jquery.pngFix.js?h"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/js_combined.js?h"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/jquery_mapz.js?h"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/jquery_cookie.js?h"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/modernizr.custom.63526.js?h"></script>

<!-- REDIRECT MESSAGE-->
<?php  if(($subdomain == 'wanderfest' || $subdomain == 'wonderlustfest' || $subdomain == 'wanderlustfestival') && !$_GET['m'] && isset($_COOKIE["mysite"])) {   ?>
  <script>
    document.write("<div id='redirect1' style= 'z-index:500; border: 1px solid #bd8349; background: #f5d6b0; padding: 10px;  margin-left: -300px; left: 29%;  text-align: center; margin: 0 auto; position: absolute; top: 20px; width: 500px;'><h1 style='font-size: 18px; font-weight: normal !important; font-family: 'baskerville_fsitalic', georgia; padding: 0 !important; margin: 0 !important; font-style: italic; '>Redirecting you to your Wanderlust Adventure!</h1></div>");
    $(document).ready(function() {
      $('#legend').css('display','none');
      $('.front').css('background', '-webkit-gradient(linear,left top,left bottom,from(#a9d4c3),to(#d8fbed))');
    });
  </script>
  
  <script type="text/javascript" src="/sites/all/modules/wl_helper/wl_helper_map.js?h"></script>  

<?php }?>
 

 
<script type="text/javascript">
  <!--//--><![CDATA[//><!--
  jQuery.extend(Drupal.settings, {"basePath":"\/","imagebrowser":{"basepath":"\/","filepath":"files","modulepath":"sites\/all\/modules\/imagebrowser"},"jcarousel":{"ajaxPath":"\/jcarousel\/ajax\/views","carousels":{"jcarousel-view--homepage-carousel--block-1":{"skin":"default","visible":5,"navigation":"before","animation":"slow","start":1,"autoPause":1,"scroll":5,"selector":".jcarousel-view--homepage-carousel--block-1"}}},"lightbox2":{"rtl":0,"file_path":"\/(\\w\\w\/)files","default_image":"\/sites\/all\/modules\/lightbox2\/images\/brokenimage.jpg","border_size":10,"font_color":"000","box_color":"fff","top_position":"","overlay_opacity":"0.8","overlay_color":"000","disable_close_click":1,"resize_sequence":0,"resize_speed":400,"fade_in_speed":400,"slide_down_speed":600,"use_alt_layout":0,"disable_resize":0,"disable_zoom":0,"force_show_nav":0,"show_caption":1,"loop_items":0,"node_link_text":"","node_link_target":0,"image_count":"","video_count":"","page_count":"","lite_press_x_close":"press \u003ca href=\"#\" onclick=\"hideLightbox(); return FALSE;\"\u003e\u003ckbd\u003ex\u003c\/kbd\u003e\u003c\/a\u003e to close","download_link_text":"","enable_login":false,"enable_contact":false,"keys_close":"c x 27","keys_previous":"p 37","keys_next":"n 39","keys_zoom":"z","keys_play_pause":"32","display_image_size":"original","image_node_sizes":"()","trigger_lightbox_classes":"","trigger_lightbox_group_classes":"","trigger_slideshow_classes":"","trigger_lightframe_classes":"","trigger_lightframe_group_classes":"","custom_class_handler":"lightbox_ungrouped","custom_trigger_classes":"img.ibimage","disable_for_gallery_lists":1,"disable_for_acidfree_gallery_lists":true,"enable_acidfree_videos":true,"slideshow_interval":5000,"slideshow_automatic_start":1,"slideshow_automatic_exit":1,"show_play_pause":0,"pause_on_next_click":0,"pause_on_previous_click":1,"loop_slides":0,"iframe_width":600,"iframe_height":400,"iframe_border":1,"enable_video":0},"nice_menus_options":{"delay":"40","speed":"fast"},"extlink":{"extTarget":"_blank","extClass":0,"extSubdomains":1,"extExclude":"","extInclude":"","extAlert":0,"extAlertText":"This link will take you to an external web site. We are not responsible for their content.","mailtoClass":"mailto"},"viewsSlideshowSingleFrame":{"#views_slideshow_singleframe_main_Homepage_slider-block_1":{"num_divs":10,"id_prefix":"#views_slideshow_singleframe_main_","div_prefix":"#views_slideshow_singleframe_div_","vss_id":"Homepage_slider-block_1","timeout":"8000","sort":1,"effect":"fade","speed":"700","start_paused":0,"delay":"0","fixed_height":"1","random":"0","pause":"1","pause_on_click":"1","pause_when_hidden":0,"pause_when_hidden_type":"full","amount_allowed_visible":"","remember_slide":0,"remember_slide_days":"1","controls":"0","items_per_slide":"1","pager":"2","pager_type":"Numbered","pager_hover":"2","pager_click_to_page":0,"image_count":"0","nowrap":"0","sync":"1","advanced":"cleartype: true,\ncleartypeNoBg: true","ie":{"cleartype":"true","cleartypenobg":"false"}}}});
  //--><!]]>
  </script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/jquery_cookie.js"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/jquery_mapz.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
<script type="text/javascript" src="sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.js"></script>


<!-- SET FACEBOOK OPEN GRAPH APP ID -->
<meta property="fb:app_id" content="321576251186267"/>

<script type="text/javascript">

 jQuery(document).ready(function ($) {


 $(document).ready(function() {
   
 $('input[type=checkbox]').change(function(){
   if ($(this).is(":checked")){
       $.cookie("mysite", $(this).attr('name'), {expires:30, path: '/', domain: '<?php print '.' . $subdomain . '.com';?>'});     
       $(location).attr('href', 'http://' +  $(this).attr('name') + '<?php print '.' . $subdomain . '.com';?>');
   } else if ($(this).prop("checked", false))
   
   {
          $.cookie("mysite", $(this).attr('name'), {expires:-10, path: '/', domain: '<?php print '.' . $subdomain . '.com';?>'});     
   }
   
  });
	$("#emailClick").click(function() {
				$.fancybox.open('#newsletter');
	});
	
		$("#legend1 .legendtitle").click(function() {
				$.fancybox.open('#festinfo');
				$(".fancybox-inner").css("overflow", "hidden");
				setTimeout(function(){$(".fancybox-inner").css("height", "auto")},300);
					$(window).resize(function() {
setTimeout(function(){$(".fancybox-inner").css("height", "auto")},300);
});
							
	        });
		$("#legend2 .legendtitle").click(function() {
				$.fancybox.open('#yogainfo');
				$(".fancybox-inner").css("overflow", "hidden");
				setTimeout(function(){$(".fancybox-inner").css("height", "auto")},300);
				$(window).resize(function() {
setTimeout(function(){$(".fancybox-inner").css("height", "auto")},300);
});
					
	        });
		$("#legend3 .legendtitle").click(function() {
				$.fancybox.open('#studioinfo');
				$(".fancybox-inner").css("overflow", "hidden");
				setTimeout(function(){$(".fancybox-inner").css("height", "auto")},300);
			  				$(window).resize(function() {
setTimeout(function(){$(".fancybox-inner").css("height", "auto")},300);
});
				
	        });
			
		

		if (document.cookie.indexOf("visited") >= 0) {
  
}
else {

	$.fancybox({
			'padding'		: 10,
			'autoScale'		: false,
			'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'width'			: 670,
			'height'		: 403,
			'href'			: 'http://www.youtube.com/embed/22yflfKRRPQ?fs=1&autoplay=1',
			'type'			: 'iframe',
			'swf'			: {
			'wmode'				: 'transparent',
			'allowfullscreen'	: 'true'
			}
		});


  // set a new cookie
  //expiry = new Date();
 // expiry.setTime(date.getTime()+(9000*60*1000)); // never

  // Date()'s toGMTSting() method will format the date correctly for a cookie
    document.cookie = "visited=yes";

}
		
		
		
		$('#aboutFancy').click(function () {
	
	
		$.fancybox({
			'padding'		: 10,
			'autoScale'		: false,
			'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'width'			: 670,
			'height'		: 403,
			'href'			: 'http://www.youtube.com/v/ayQHNiC0HeA?fs=1&autoplay=1',
			'type'			: 'swf',
			'swf'			: {
			'wmode'				: 'transparent',
			'allowfullscreen'	: 'true'
			}
		});

		  });
		
			
			
});
       
    function IntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

$(document).ready(function() {
	$('#map-1').bind('drag', function( event ) {
            
             var chile_inView=IntoView('div.mark.chile')
             
             if(chile_inView){
                 $('#chile_show').fadeOut();
             }else{
			 $('#chile_show').fadeIn();
                 
             }
	});
});
}); //end no conflict
</script>
<!--end-->

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

	 <?php } ?>
	 
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
      

    <?php
    }
    
    if ($f) {  ?>
       <div id="thankyou">Thank you for signing up! You should receive an email confirmation shortly.</div>
    <?php
      $result = db_query("SELECT n.nid FROM node n INNER JOIN content_type_event cte ON n.nid = cte.nid where n.type = '%s'  and n.status = 1 ORDER BY cte.field_event_date_value ASC", 'event');
      while ($items = db_fetch_array($result)) {
          $nodes[] = $items;
      }
      $q    = 'SELECT * FROM {sites}'; //get all sites; 
      $res  = db_query($q);
      $nids = array();
      while ($row = db_fetch_object($res)) {
//	 drupal_set_message('<pre>' . print_r($res, 1) . '</pre>');
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
          $sites[$row->sid] = $row;
      }
     

      
      
 function cmp($a, $b) {
      return strcmp(strtotime($a->extra_fields->field_event_date[0]['value']), strtotime($b->extra_fields->field_event_date[0]['value']));
  }

   usort($sites, "cmp");   
   

      
      foreach ($nodes as $s) {
	 
          if (!in_array($s['nid'], $nids)) {
              $row->extra_fields           = node_load($s['nid']);
              //drupal_set_message('<pre>' . print_r($row->extra_fields, 1) . '</pre>');
              $sites['studio' . $s['nid']] = $row;
          }
      }
    ?>
      
<div id="map-1-container">   


<div id="logo-container">
  <div class="logo">Wanderlust Festival</div>
  <div class="logo-animation">
    <div id="yoga-left" class="left" style="display:none;">yoga</div>
    <div id="music-right" class="right" style="display:none;">music</div>
    <div id="nature-left" class="left" style="display:none;">nature</div>
    <div id="talks-left" class="left" style="display:none;">speakeasy talks</div>
    <div id="hikes-right" class="right" style="display:none;">hikes</div>
    <div id="organic-right" class="right" style="display:none;">organic & local foods</div>
    <div id="wine-left" class="left" style="display:none;">wine tastings</div>
    <div id="meditation-right" class="right" style="display:none;">meditation</div>
    <div id="find-left" class="left">Find your</div>
    <div id="north-right" class="right">true north</div>
  </div>
</div>

<script type="text/javascript">
(function(jQuery){jQuery.winFocus||(jQuery.extend({winFocus:function(b){function c(a){a=a||window.event;a.hidden=a.type in{focus:"visible",focusin:"visible",pageshow:"visible",blur:"hidden",focusout:"hidden",pagehide:"hidden"}?"focusout"===a.type:this[d];jQuery(window).data("visible",!a.hidden);jQuery.winFocus.methods.exeCB(a)}var d="hidden";d in document?document.addEventListener("visibilitychange",c):(d="mozHidden")in document?document.addEventListener("mozvisibilitychange",c):(d="webkitHidden")in document?
document.addEventListener("webkitvisibilitychange",c):(d="msHidden")in document?document.addEventListener("msvisibilitychange",c):"onfocusin"in document?document.onfocusin=document.onfocusout=c:window.onpageshow=window.onpagehide=window.onfocus=window.onblur=c;for(x in arguments)"object"==typeof arguments[x]?(arguments[x].blur&&(jQuery.winFocus.methods.blur=arguments[x].blur),arguments[x].focus&&(jQuery.winFocus.methods.focus=arguments[x].focus),arguments[x].blurFocus&&(jQuery.winFocus.methods.blurFocus=
arguments[x].focus)):"function"==typeof arguments[x]&&(void 0===jQuery.winFocus.methods.blurFocus?jQuery.winFocus.methods.blurFocus=arguments[x]:(jQuery.winFocus.methods.blur=jQuery.winFocus.methods.blurFocus,jQuery.winFocus.methods.blurFocus=void 0,jQuery.winFocus.methods.focus=arguments[x]))}}),jQuery.winFocus.methods={blurFocus:void 0,blur:void 0,focus:void 0,exeCB:function(b){jQuery.winFocus.methods.blurFocus?jQuery.winFocus.methods.blurFocus(b,!b.hidden):b.hidden?jQuery.winFocus.methods.blur&&
jQuery.winFocus.methods.blur(b):jQuery.winFocus.methods.focus&&jQuery.winFocus.methods.focus(b)}})})(jQuery);
    (cycle = function () {
        setTimeout(function(){$('#find-left').fadeOut(1000)},4000); 
	    setTimeout(function(){$('#yoga-left').fadeIn(1000)},5000);
        setTimeout(function(){$('#north-right').fadeOut(1000)},6000);  
        setTimeout(function(){$('#music-right').fadeIn(1000)},7000);
        setTimeout(function(){$('#yoga-left').fadeOut(1000)},9000);
        setTimeout(function(){$('#nature-left').fadeIn(1000)},10000); 
		setTimeout(function(){$('#music-right').fadeOut(1000)},10000);
		setTimeout(function(){$('#hikes-right').fadeIn(1000)}, 11000);
		setTimeout(function(){$('#nature-left').fadeOut(1000)},13000);
		setTimeout(function(){$('#talks-left').fadeIn(1000)},14000);
		setTimeout(function(){$('#hikes-right').fadeOut(1000)},14000);
		setTimeout(function(){$('#organic-right').fadeIn(1000)},15000); 
		setTimeout(function(){$('#talks-left').fadeOut(1000)},17000);
		setTimeout(function(){$('#wine-left').fadeIn(1000)},18000);
		setTimeout(function(){$('#organic-right').fadeOut(1000)},18000); 
		setTimeout(function(){$('#meditation-right').fadeIn(1000)},19000);
		setTimeout(function(){$('#wine-left').fadeOut(1000)},21000);
		setTimeout(function(){$('#meditation-right').fadeOut(1000)},22000);
		setTimeout(function(){$('#find-left').fadeIn(1000)},28000);
        setTimeout(function(){$('#north-right').fadeIn(1000, cycle)},30000);
    
    })();
	    $.winFocus(function(event, isVisible) {
		$.fx.off = true;
        $('#music-right, #nature-left, #hikes-right, talks-left, #hikes-right, #north-right, #find-left, #meditation-right, #wine-left, #organic-right ').hide();
		$.fx.off = false;
		}); 


</script>
 

  <div style="visibility:hidden; height:1px; width:1px;"><img src="/sites/all/themes/wanderlust/images/studio_hover.png"></div>



<!-- BEGIN LEGEND -->  
<div id="legend" class="ui-draggable">
  <div id="legend1">
    <div class="icon festival legendNo"></div>
    <div class="legendtitle">Wanderlust Festivals <span>i</span></div><br>
  </div>
  <div id="legend2">
    <div class="icon yoga legendNo"></div>
    <div class="legendtitle">Yoga in the City events <span>i</span></div><br>
  </div>
  <div id="legend3">
    <div class="icon studio legendNo"></div>
    <div class="legendtitle">Wanderlust Yoga Studios <span>i</span></div><br>
  </div>
</div>
<!-- END LEGEND -->  







<div class="map-viewport">
  <div id="map-1">
    <img  class="level" src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2013-images/map-v2.jpg" width="4000" height="1500" usemap="#map" alt="" />
    
  
  <?php  foreach ($sites as $site): // print  checkboxes for sites  with own data ?> 
      
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
    <div class="mark <?php print $site->purl_prefix . ' ' . $class;?>">
    <div class="icon"></div>
    <div class="innersite <?php print $site->purl_prefix . ' ' . $class;?>" >	
	<div class="xSplash"></div>

    <?php
    if ($site->extra_fields->field_event_date[0]['value']) {
        $item = '<div class="site-item">';
        $item .= '<div class="site-marker"></div>';
        $item .= '<div class="site-title"><a href="http://' . $site->purl_prefix . '.' . $base . '">' . $site->title . '</a></div>';
        $item .= '<div class="siteevent"><div class="item-date">';

      //   print '<pre>' . print_r($site->extra_fields->field_event_date[0]['value'], 1) . '</pre>';
        // CODE FOR DATE WHEN START & ENDING DATE ARE THE SAME

	  if (substr($site->extra_fields->field_event_date[0]['value'], 0, 10) == substr($site->extra_fields->field_event_date[0]['value2'], 0, 10)) {
	      $item .= date('F j, Y', strtotime($site->extra_fields->field_event_date[0]['value'])) . '</div>';
	  }
	  
	  // CODE FOR DATE WHEN START & ENDING MONTHS ARE DIFFERENT
	  else {
	      $item .= date('F j -', strtotime($site->extra_fields->field_event_date[0]['value'])) . ' ' . date('F j, Y', strtotime($site->extra_fields->field_event_date[0]['value2'])) . '</div>';
	  }


        
        $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_venue[0]['value'] . '</div>';
        $item .= '<div class="siteaddress venue">' . $site->extra_fields->field_event_city[0]['value'] . ', ' . $site->extra_fields->field_event_state[0]['value'] . ', ' . $site->extra_fields->field_event_country[0]['value'] . '</div></div></div>';
	   
	   
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
            

    // FESTIVALS POPOVER DISPLAY
    if ($class == 'festival') {
        if (isset($_COOKIE["mysite"]) && $_COOKIE["mysite"] == $site->purl_prefix) {
            $c = 'checked="checked"';
        }
        $fests .= '<div class="event-list"><div class="bl ">' . $item . '<div id="site-checkbox"><input type="checkbox" value="0" name="' . $site->purl_prefix . '"' . $c . 'onClick="SetCookie(\'mysite\', ' . $site->purl_prefix . ', 30);"><div id="saveDefualt">Save as my default</div></div></div></div>';
        
        // YITC POPOVER DISPLAY
    } elseif ($class == 'yoga') {
        if (isset($_COOKIE["mysite"]) && $_COOKIE["mysite"] == $site->purl_prefix) {
            $c = 'checked="checked"';
        }
        $yogas .= '<div class="bl">' . $item . '<div id="site-checkbox"><input type="checkbox" value="0" name="' . $site->purl_prefix . '"' . $c . 'onClick="SetCookie(\'mysite\', ' . $site->purl_prefix . ', 30);">Save as my default</div></div>';

    }
    
    unset($c);
	

    print $item;
    ?>
	
	
	<!-- SAVE AS DEFAULT CHECKBOX-->
	<div id="site-checkbox">
  	<input type="checkbox" value="0" name="<?php print $site->purl_prefix; ?>"<?php if(isset($_COOKIE["mysite"]) && $_COOKIE["mysite"] == $site->purl_prefix): ?> checked="checked"<?php endif; ?> onClick="SetCookie('mysite', '<?php print $site->purl_prefix; ?>', 30);">Save as my default
  </div>
  
  </div>
  <!-- END DIV CLASS="MARK"-->
  
	</div>
	
	
	
	
	
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
      print $item;?>

	
    </div>
	</div>	
	
	  <?php } ?>
	  
	  <?php endforeach;  ?>

  </div>


<!-- BEGIN TOOLBAR -->
<div id="toolbar">
  <!-- DISABLED HELP ICON AND DIALOG
  <div id="help">
    <a class="icon" href="#">Help</a>
    <div class="dialog">
        <div class="content">
          <h3>Help</h3>
          <p>
            Aliquam lectus orci, adipiscing et, sodales ac, feugiat non, lacus. Ut dictum velit nec est. Quisque posuere, purus sit amet malesuada blandit, sapien sapien auctor arcu, sed pulvinar felis mi sollicitudin tortor. Maecenas volutpat, nisl et dignissim pharetra, urna lectus ultrices est, vel pretium pede turpis id velit. Aliquam sagittis magna in felis egestas rutrum. Proin wisi libero, vestibulum eget, pulvinar nec, suscipit ut, mi. Integer in arcu ultricies leo dapibus ultricies. Sed rhoncus lobortis dolor. Suspendisse dolor. Mauris sapien velit, pulvinar non, rutrum non, consectetuer eget, metus. Morbi tincidunt lorem at urna. Etiam porta. Ut mauris. Phasellus tristique rhoncus magna. Nam tincidunt consequat urna. Sed tempor.
            </p>
            <div class="arrow"></div>
        </div>
    </div>
  </div>-->
  <div id="about">
    <a class="icon" href="#">About</a>  
    <div class="dialog">
        <div class="content">
	      <div id="killBill">X</div>
          <h3>About</h3>
          <p>
            Wanderlust Festival is the largest celebration of its kind in the world: a 4-day celebration of yoga, music, and nature.  Bringing together thousands of people from myriad backgrounds to experience adventure and transformation, Wanderlust provides the opportunity to bring your yoga practice to new heights, to enjoy the freedom of live music and to follow your spirit of adventure in spectacular outdoor settings, all the while creating community with like-minded seekers.
		  </p>
		  <div id="aboutFancy">Watch Video Highlights from Wanderlust 2012</a></div>   
          <div class="arrow"></div>
        </div>
    </div>

  </div>
  <div id="mission">
    <a class="icon" href="#">Mission</a>  
    <div class="dialog">
        <div class="content">
		  <div id="killBill">X</div>
          <h3>Mission</h3>
          <p>
            Wanderlust's core mission is to create community around mindful living. Mindful living is a conscious, value-based approach to leading a balanced & fulfilling life.  We focus on yoga, eating well, being green, practicing purpose in our partnerships, creating awareness, showcasing art, and encouraging adventure.           
          </p>
          <div class="arrow"></div>
        </div>
    </div>
  </div>

  <div id="connect">
    <a class="icon" href="#">Connect</a>
    <div class="dialog">
	 <div id="killBill2">X</div>
      <h3>Connect</h3>
      <div class="email-container clearfix">
      <!-- BEGIN MAILING LIST SIGN UP BOX -->  
      <div id="joinmail">
        <div id="emailClick"></div>
        <div class="fb-tw">
          <div class="fb-icon">
            <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2Fwanderlust&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=217615481632986" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:85px; height:21px;" allowTransparency="true"></iframe>
          </div>
          <div class="tw-icon">
            <a href="https://twitter.com/wanderlustfest" class="twitter-follow-button" data-show-count="false">Follow @wanderlustfest</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>    
          </div>
        </div>
        <div class="other-icons">
          <a class="google-icon" href="https://plus.google.com/111241266781662158832" target="_blank"></a>
          <a class="instagram-icon" href="http://instagram.com/wanderlustfest" target="_blank" onClick="_gaq.push(['_trackEvent', 'Social Media', 'Instagram', 'follow',, false]);"></a>
          <a class="pinterest-icon" href="http://pinterest.com/wanderlustfest/" target="_blank"></a>    
          <a class="youtube-icon" href="http://youtube.com/wanderlustfestival" target="_blank" onClick="_gaq.push(['_trackEvent', 'Social Media', 'YouTube', 'follow',, false]);"></a>    
        </div>
      </div>      
      <?php print $connect ;?>
      </div>
      <!-- END MAILING LIST SIGN UP BOX -->    
      <div class="arrow"></div>
      </div>             
    </div>
    <!-- END CONNECT -->

  <div id="blog">
    <a class="icon" href="http://journal.wanderlustfestival.com" target="_blank">Blog</a>
  </div>

</div>
<!-- END TOOLBAR -->


  <div id="chile_show" class="chile_disp" >This Way to Chile</div>
  	 <map name="map"></map>
  </div>

</div>
      
   
    </div>

<div id="wanderdata">
<div id="festinfo">
  <span>Wanderlust Festivals</span>
  <div class="descript">
    Wanderlust Festivals are the crown jewels of the Wanderlust experience: unforgettable 4-day summits in locations of stunning natural beauty. Take everything you treasure about your yoga practice, then throw in epic musical performances, thought-provoking lectures, delicious farm-to-table dinners, wine tastings, hikes, films and much more.
  </div>
 <?php print $fests; ?>
</div>

<div id="yogainfo">
 <span>Yoga In The City Events</span>
   <div class="descript">
     Yoga in the City (YITC) takes the pillars of our Wanderlust Festival experience and places them in an urban setting for you to experience a little taste of our epic 4-day adventures in your own backyard. We invite top local instructors to lead large, free charity-focused classes.  Musical performances infuse classes and dance parties are prone to breaking out post-savasana. Vendors, artists and performers weave their flavor into the tapestry of the experience, making it a modern-day yogic celebration coming to your town for you to enjoy on a summers day.   
    </div>

 <?php print $yogas; ?>
</div>

<div id="studioinfo">
<span>Wanderlust Yoga Studios</span>
  <div class="descript">
    Wanderlust's mission is always to create community around mindful living, and Wanderlust Studios are the permanent brick-and-mortar temples built for achieving this goal at the local level. Wanderlust studios offer diverse yoga class offerings from accomplished local teachers.  But, moreover, the studios act as centers of community, offering inspiring lectures, live concerts, organic eats, film screenings, fund-raisers, and other events that serve to unite and elevate the community it serves.
  </div>

  <?php print $studios; ?>
</div>
</div>    
<?php  
      } else {  
      
      /*if not front page - print slide and other content */?> 

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
                <li class="last"><a target="_blank"  href="https://www.facebook.com/resourcespringwater"><img src="/sites/all/themes/wanderlust/images/resource.png"></a></li>                
      </ul>';
    }

    elseif ($subdomain == 'sf'){
      print '<img class="thankyou-partners" src="/sites/all/themes/wanderlust/images/thankyou-partners.png">
      <ul class="sponsor-logos">
                <li><a target="_blank"  href="http://www.avocadosfrommexico.com/"><img src="/sites/all/themes/wanderlust/images/avocados.png"></a></li>
                <li><a target="_blank"  href="http://www.evolutionfresh.com/"><img src="/sites/all/themes/wanderlust/images/evolution.png"></a></li>
                <li><a target="_blank"  href="http://lyfekitchen.com/"><img src="/sites/all/themes/wanderlust/images/lyfe.png"></a></li>                                                
                <li><a target="_blank"  href="http://www.lunabar.com/"><img src="/sites/all/themes/wanderlust/images/luna.png"></a></li>                
                <li class="last"><a target="_blank"  href="https://www.facebook.com/resourcespringwater"><img src="/sites/all/themes/wanderlust/images/resource.png"></a></li>                
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
  <!-- END FOOTER -->

  <?php } print $closure ?>




<script>

<?php  if ($f) {?>

// DETECT IF MOBILE
var isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPod/i);
    },
    iPAD: function () {
        return navigator.userAgent.match(/iPad/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.iPAD() || isMobile.Opera() || isMobile.Windows());
    }
};

if (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()) {
    $("head").prepend('<meta name="viewport" content="width=device-width, initial-scale=.4, maximum-scale=1">');
}



// FOR MOBILE

if (isMobile.any()) {


$('#removeMobileLink a').remove();

    $("head").append('<link rel="stylesheet" type="text/css" href="sites/all/themes/wanderlust/css/mobile-stylesheet.css" />');
    window.scrollTo(325, 0);
    
    /*MARK HOVERS*/
    $(".icon:not(.legendNo)").bind('touchend', function (e) {
        $(".innersite").fadeOut();
        $(this).next().toggle(500);
    });
    
    /*MENU*/
    $("#help .icon").toggle(
    
    function () {
        $('#toolbar .dialog').hide();
        $('#toolbar #help .dialog').fadeIn();;
    },
    
    function () {
        $('#toolbar #help .dialog').hide();
    });
    
    $("#about").toggle(
    
    function () {
        $('#toolbar .dialog').hide();
        $('#toolbar #about .dialog').fadeIn();;
    },
    
    function () {
        $('#toolbar #about .dialog').hide();
    });
    
    $("#mission").click(
    
    function () {
        $('#toolbar .dialog').hide();
        $('#toolbar #mission .dialog').fadeIn();;
    },
    
    function () {
        $('#toolbar #mission .dialog').hide();
    });
    
    $("#connect").toggle(
    
    function () {
        $('#toolbar .dialog').hide();
        $('#toolbar #connect .dialog').fadeIn();
    },
    
    function () {
        $('#toolbar #connect .dialog').hide();
    });
	
	
	
		$.fancybox({
			'padding'		: 10,
			'autoScale'		: false,
			'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'width'			: 670,
			'height'		: 403,
			'href'			: 'http://www.youtube.com/watch?v=22yflfKRRPQ?fs=1&autoplay=1',
			'type'			: 'swf',
			'swf'			: {
			'wmode'				: 'transparent',
			'allowfullscreen'	: 'true'
			}
		});

    
    
		$('#killBill').click(function () {
    	$('#toolbar #help .dialog, #toolbar #about .dialog, #toolbar #mission .dialog, #toolbar #connect .dialog').hide();

    });
		
		
		
		$('#connect a.icon').click(function () {

		$('#killBill2').click(function () {
    	$(' #toolbar #connect .dialog').hide();

    });
		
    });
	
	
    $("#toolbar").click(function (e) {
        e.stopPropagation();
    });
    
    /*BIND TOUCH EVENT TO MARK INNERSITE HOVERS*/
    
    $(".icon").bind('touchend', function (e) {
        $(".icon").stop(true, true);
        $(this).find('div.innersite').toggle(500);
    });
    
    $(".icon:not(.legendNo)").hover(function () {
    
        $(this).find('div.innersite').fadeIn();
    
    }, function () {
        $(this).find('div.innersite').hide();
    });
    
    if (document.all && document.documentMode && 8 || 9 === document.documentMode) {}
    
    
    /*LEGEND HOVERS*/
    
    /*for flag*/
    $("#legend1 .icon").hover(function () {
        $(".icon").addClass('highlight1');
    }, function () {
        $('#.icon').removeClass('highlight1');
    });
    /*for green star*/
    
    $("#legend2 .icon").hover(function () {
        $(".icon.yoga").addClass('highlight1');
    }, function () {
        $('#.icon.yoga').removeClass('highlight1');
    });
    
    /*for star only*/
    
    $("#legend3 .icon").hover(function () {
        $(".icon.studio").addClass('highlight1');
    }, function () {
        $('#.icon.studio').removeClass('highlight1');
    });
    
    }

else {
 
  jQuery(document).ready(function ($) {
 
 
// FOR DESKTOP 

$(document).ready(function () {
	//only make markers clickable on ipad
	/*
	$(".mark a:nth-child(1)").click(function () {
		window.location = $(this).attr('title')
    });*/
	
	//Make map full screen
	$(window).resize(function() {
		$("#map-1").mapz();
	});

    $("#map-1").mapz();

    $("#legend").draggable();
	
	// POSITION MAP FOR DESKTOP
    $('#map-1').css('left', '-1270px');

    // TOOLBAR MENU
    $("#help .icon").toggle(
    function () {
        $('#toolbar .dialog').hide();
        $('#toolbar #help .dialog').fadeIn();;
    },
    function () {
        $('#toolbar #help .dialog').hide();
    });

    $("#about").toggle(
    function () {
        $('#toolbar .dialog').hide();
        $('#toolbar #about .dialog').fadeIn();;
    },
    function () {
        $('#toolbar #about .dialog').hide();
    });

    $("#mission").toggle(
    function () {
        $('#toolbar .dialog').hide();
        $('#toolbar #mission .dialog').fadeIn();;
    },
    function () {
        $('#toolbar #mission .dialog').hide();
    });

    $("#connect .icon").toggle(
    function () {
        $('#toolbar .dialog').hide();
        $('#toolbar #connect .dialog').fadeIn();
    },
    function () {
        $('#toolbar #connect .dialog').hide();
    });
    
	$('#killBill').click(function () {
    	$('#toolbar #help .dialog, #toolbar #about .dialog, #toolbar #mission .dialog, #toolbar #connect .dialog').hide();

    });
	
		
		$('#connect a.icon').click(function () {

		$('#killBill2').click(function () {
    	$(' #toolbar #connect .dialog').hide();

    });
		
    });
	
	
    // TRIGGER INNERSITE HOVERS WHEN CLICKING ON MARKERS
    $(".mark:not(.legendNo)").click(function () {
  	  $('.innersite').hide();
      $(this).addClass('activemarker')
        $(this).find('.innersite').fadeIn();

    
    });

	  // CLOSE INNERSITES
	  $(".xSplash").click(function () {    
	  event.stopPropagation();
     $(this).parents('.mark').removeClass('activemarker')
	 
        $('.innersite').fadeOut();
    });
	
	
	

    // FALLBACK MARKER ANIMATION FOR IE
    if (!Modernizr.csstransitions) { // Test if CSS transitions are supported
        $(function () {
            $("#legend .icon, .mark .icon").hover(function () {
                if ($(this).data("bouncing") == false || $(this).data("bouncing") == undefined) {
                    $(this).effect("bounce", {
                        direction: 'up',
                        distance: 10,
                        times: 1
                    });
                    $(this).data("bouncing", true);
                }
            }, function () {
                $(this).data("bouncing", false);
            });

        });
    }

    // MAKE ENTIRE INNERSITE & BIL DIVS CLICKABLE TO VISIT WEBSITE
    $(".site-item").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });

    // LEGEND HOVERS
    $("#legend1 .icon").hover(function () {
        $(".festival .icon, .festival.icon").addClass('highlight1');
    }, function () {
        $('.festival .icon, .festival.icon').removeClass('highlight1');
    });

    $("#legend2 .icon").hover(function () {
        $(".yoga .icon, .yoga.icon").addClass('highlight1');
    }, function () {
        $('.yoga .icon, .yoga.icon').removeClass('highlight1');
    });

    $("#legend3 .icon").hover(function () {
        $(".studio .icon, .studio.icon").addClass('highlight1');
    }, function () {
        $('.studio .icon, .studio.icon').removeClass('highlight1');
    });

    // FOR CHROME FIREFIX
    $(".mark.festival").mouseover(function () {
        $(".mark.festival").removeClass("baloonHover");
        $(this).removeClass("baloonHover");
        $(this).addClass("baloonHover");

    });

    // FIX FANCYBOX POPUPS
    $(".fancybox-inner").css("overflow", "hidden")

  

});

}); //end no conflict




} //end else


/*FOR BOTH MOBILE AND DESKTOP*/

<?php } else {?> 

$(document).ready(function () {
  
  $(".swlang li a").click(function() {
    if($(this).parent().hasClass('fr') ) {
      $.cookie("wanlang", 'fr', {expires:30, path: '/', domain: '<?php print '.' . $base ;?>'});
    }
    else if($(this).parent().hasClass('en')) {
       $.cookie("wanlang", 'en', {expires:30, path: '/', domain: '<?php print '.' . $base ;?>'});  
    }
  });


    /*FOR PHOTOS*/
    $('body').append('<div id="ted_photo_hover"></div>');
    $('#ted_photo_hover').css({
        position: 'absolute'
    });

    $('#ted_photo_hover').offset({
        top: 500,
        left: 500
    });
    $('.ted_photo').hover(function (e) {
        var name = $(this).children('.ted_photo_data').html();
        var answer = $(this).children('a').children('img').attr('title');
        var eventName = $(this).children('a').children('img').attr('alt');

        var hoverText = "";
        hoverText += "Name: " + name + '<br>\r\n';
        hoverText += "Event: " + eventName + '<br>\r\n';
        hoverText += '"' + answer + '"';
        //    $('#ted_photo_hover').show();
        $('#ted_photo_hover').html(hoverText);
        $('#ted_photo_hover').css({
            top: e.pageY,
            left: e.pageX
        });
        divoff = $('#ted_photo_hover').offset();
        //    alert(e.pageX +' '+ e.pageY);
        //    $(this).children('a').children('img').attr('title', hoverText);
        //    $(this).children('img').attr('title', hoverText);
        //        $('#ted_photo_hover').css({'left': e.pageX + 'px', 'bottom': e.pageY + 'px', 'position': 'absolute'});
    }, function (e) {
        //    $('#ted_photo_hover').hide();
    });

});


<?php }
?>
			
			
/*GOOGLE ANALYTICS*/



   jQuery(document).ready(function ($) {
	$(document).ready(function() {
	  

		//alert(oo);
		
		$('#newsletter #submit').click(function() {
		
          a = $("input#email").val();
          b = $("input#firstname").val();
          c = $("input#lastname").val();
          d = $("#state option:selected").text();
          e = $("input#postal_code").val();
          f = $("#country option:selected").text();
          g = $("#EventName option:selected").text();
          h = $("#hearabout option:selected").text();

          var dataString = 'email=' + a + '&FirstName=' + b + '&LastName=' + c +'&State/Prov=' + d + '&ZipCode=' + e +'&Country=' + f + '&EventName=' + g + '&HearAbout=' + h; 

     //alert(dataString);

          $.ajax ({
               type: 'POST',
               data: dataString,
               url: $('#newsletter').attr('action'),
               success: function(){
                    

jQuery.noConflict();
(function($) {
  $(function() {
$.fancybox.close();
  });
  
  $('#thankyou').fadeIn(1000); 
    setTimeout(function(){$('#thankyou').fadeOut(1000); },4000);
    $('#toolbar #connect .dialog').hide();
  
  
})(jQuery);

               }
          });
		return false;
	       
		}); 

});
});
</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1020182989;
var google_conversion_label = "NKVFCIGI3AQQzYO75gM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1020182989/?value=0&amp;label=NKVFCIGI3AQQzYO75gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12068308-1']);
  _gaq.push(['_setDomainName', 'wanderlustfestival.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
