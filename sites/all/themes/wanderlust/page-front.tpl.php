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
  <title><?php print $head_title; ?></title>
  <?php header("Connection: keep-alive");?>
  <!--not sure why but we need to call scripts from variable cutting and pasting breaks redirect-->


    <?php
 //    drupal_set_header('Access-Control-Allow-Origin: *');
      $base = wl_get_base_domain();
      $url = explode('.', str_replace('http://', '', $_SERVER['HTTP_HOST']));
      $subdomain = strtolower(trim($url[0]));
      $f = FALSE;
      if ($subdomain == 'wanderfest' || $subdomain == 'wonderlustfest') {   /*check  if we're on front page  'wanderfest.com' */
	  $f = TRUE;  /*set  true  for check display  slider   or map  in bottom*/ ?>

	<link type="text/css" rel="stylesheet" media="all" href="/sites/all/modules/admin_menu/admin_menu.css" />
	<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/wanderlust/css/type.css" />
	<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/wanderlust/css/splash.css" />
	<link rel="stylesheet" type="text/css" href="sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.css" media="all" />

<!--[if IE]>

<![endif]-->

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
<?php// print $scripts;?>






<!--cut and paste $scripts variable -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="/misc/drupal.js?h"></script>
<script type="text/javascript" src="/sites/all/modules/pngfix/jquery.pngFix.js?h"></script>

<script type="text/javascript" src="/sites/all/themes/wanderlust/js/js_combined.js?h"></script>

<script type="text/javascript" src="/sites/all/themes/wanderlust/js/jquery_mapz.js?h"></script>

<script type="text/javascript" src="/sites/all/themes/wanderlust/js/jquery_cookie.js?h"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/modernizr.custom.63526.js?h"></script>



<?php  if(($subdomain == 'wanderfest' || $subdomain == 'wonderlustfest') && !$_GET['m'] && isset($_COOKIE["mysite"])) {   ?>
<script>
document.write("<h1>Redirecting to your chosen Wanderlust Adventure!</h1>"); 
</script>
<script type="text/javascript" src="/sites/all/modules/wl_helper/wl_helper_map.js?h"></script>  


 <?php }?>
 
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","imagebrowser":{"basepath":"\/","filepath":"files","modulepath":"sites\/all\/modules\/imagebrowser"},"jcarousel":{"ajaxPath":"\/jcarousel\/ajax\/views","carousels":{"jcarousel-view--homepage-carousel--block-1":{"skin":"default","visible":5,"navigation":"before","animation":"slow","start":1,"autoPause":1,"scroll":5,"selector":".jcarousel-view--homepage-carousel--block-1"}}},"lightbox2":{"rtl":0,"file_path":"\/(\\w\\w\/)files","default_image":"\/sites\/all\/modules\/lightbox2\/images\/brokenimage.jpg","border_size":10,"font_color":"000","box_color":"fff","top_position":"","overlay_opacity":"0.8","overlay_color":"000","disable_close_click":1,"resize_sequence":0,"resize_speed":400,"fade_in_speed":400,"slide_down_speed":600,"use_alt_layout":0,"disable_resize":0,"disable_zoom":0,"force_show_nav":0,"show_caption":1,"loop_items":0,"node_link_text":"","node_link_target":0,"image_count":"","video_count":"","page_count":"","lite_press_x_close":"press \u003ca href=\"#\" onclick=\"hideLightbox(); return FALSE;\"\u003e\u003ckbd\u003ex\u003c\/kbd\u003e\u003c\/a\u003e to close","download_link_text":"","enable_login":false,"enable_contact":false,"keys_close":"c x 27","keys_previous":"p 37","keys_next":"n 39","keys_zoom":"z","keys_play_pause":"32","display_image_size":"original","image_node_sizes":"()","trigger_lightbox_classes":"","trigger_lightbox_group_classes":"","trigger_slideshow_classes":"","trigger_lightframe_classes":"","trigger_lightframe_group_classes":"","custom_class_handler":"lightbox_ungrouped","custom_trigger_classes":"img.ibimage","disable_for_gallery_lists":1,"disable_for_acidfree_gallery_lists":true,"enable_acidfree_videos":true,"slideshow_interval":5000,"slideshow_automatic_start":1,"slideshow_automatic_exit":1,"show_play_pause":0,"pause_on_next_click":0,"pause_on_previous_click":1,"loop_slides":0,"iframe_width":600,"iframe_height":400,"iframe_border":1,"enable_video":0},"nice_menus_options":{"delay":"40","speed":"fast"},"extlink":{"extTarget":"_blank","extClass":0,"extSubdomains":1,"extExclude":"","extInclude":"","extAlert":0,"extAlertText":"This link will take you to an external web site. We are not responsible for their content.","mailtoClass":"mailto"},"viewsSlideshowSingleFrame":{"#views_slideshow_singleframe_main_Homepage_slider-block_1":{"num_divs":10,"id_prefix":"#views_slideshow_singleframe_main_","div_prefix":"#views_slideshow_singleframe_div_","vss_id":"Homepage_slider-block_1","timeout":"8000","sort":1,"effect":"fade","speed":"700","start_paused":0,"delay":"0","fixed_height":"1","random":"0","pause":"1","pause_on_click":"1","pause_when_hidden":0,"pause_when_hidden_type":"full","amount_allowed_visible":"","remember_slide":0,"remember_slide_days":"1","controls":"0","items_per_slide":"1","pager":"2","pager_type":"Numbered","pager_hover":"2","pager_click_to_page":0,"image_count":"0","nowrap":"0","sync":"1","advanced":"cleartype: true,\ncleartypeNoBg: true","ie":{"cleartype":"true","cleartypenobg":"false"}}}});
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
$(document).ready(function(){ $('#branding, #mailing-list, #nav li a, #container').pngFix(); });
//--><!]]>
</script>


<script type="text/javascript" src="/sites/all/themes/wanderlust/js/jquery_cookie.js"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/jquery_mapz.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
<script type="text/javascript" src="sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.js"></script>


  <!-- SET FACEBOOK OPEN GRAPH APP ID -->
  <meta property="fb:app_id" content="321576251186267"/>




<!--[if IE]>
<script>
$(document).ready(function()
{

$('.mark.yoga').bind('mouseenter', function(){
     $(this).effect("bounce", { times:3 }, 300);
});

});
</script>
<![endif]-->

  <script> $.preloadImages = function()
{
       for(var i = 0; i<arguments.length; i++)
       {
               $("<img />").attr("src", arguments[i]);
       }
}
$(document).ready(function()
{
       $.preloadImages("sites/all/themes/wanderlust/images/studio_hover.png");
});
   </script>
   
<script type="text/javascript">
 $(document).ready(function() {
 $('input[type=checkbox]').change(function(){
   if ($(this).is(":checked")){
       $.cookie("mysite", $(this).attr('name'), {expires:30, path: '/', domain: '<?php print '.' . $subdomain . '.com';?>'});     
       $(location).attr('href', 'http://' +  $(this).attr('name') + '<?php print '.' . $subdomain . '.com';?>');
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
});
 </script>


<!--added on 7,Jan - start-->
<script type="text/javascript">
    
    
    function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

$(document).ready(function() {
	$('#map-1').bind('drag', function( event ) {
            
             var chile_inView=isScrolledIntoView('div.mark.chile')
             
             if(chile_inView){
                 $('#chile_show').fadeOut();
             }else{
			 $('#chile_show').fadeIn();
                 
             }
	});
	
	
});

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


<script type="text/javascript">
$.noConflict();
jQuery(document).ready(function($) {
  
       jQuery('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
       
	      	  $(".pane-content td").hover(
	  function () {
	    jQuery(this).find('a.frimage').addClass('fancybox-thumbs');
	    
	  },
	  function () {
	    jQuery(this).find('a.frimage').removeClass("fancybox-thumbs");
	  }
	);
      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      
      jQuery('.fancybox-thumbs').fancybox({
	      prevEffect : 'none',
	      nextEffect : 'none',

	      closeBtn  : true,
	      arrows    : true,
	      nextClick : true,

	      helpers : {
		      thumbs : {
			      width  : 50,
			      height : 50
		      }
	      }
      });
	  
	  
	  
	  
	  
	  	$(".email").click(function() {
				$.fancybox.open('#newsletter');
	});
	
	  
});





</script>

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

	
	
	
	<!--header email-->
	

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
        <?php print $header; ?>
      </div>



      <div class="tomap">	
        <?php  /* add  $_GET['m']  value  to check where  user  came, from site or  external.  and do redirect or not  */
	$im = '<img src="/sites/all/themes/wanderlust/images/see-all-events.png" alt="To map" />';   
	print l($im, "http://{$base}", array( 'query' => array('m' => '1'), 'html' => TRUE)); ?>
      </div>
      
    </header>
    <!-- END HEADER -->
    
    <!-- BEGIN NAVIGATION -->  
    <?php if ($primary_links || $secondary_links || !empty($navigation)): ?>
    <nav id="navigation" role="navigation" class="clearfix ">
      <?php print $navigation ?>
      <div class="social-media-links">
        <a class="facebook" href="http://facebook.com/wanderlust" target="_blank">Facebook</a>
        <a class="twitter" href="http://twitter.com/wanderlustfest" target="_blank">Twitter</a>
        <a class="instagram" href="http://instagram.com/wanderlustfest" target="_blank">Instagram</a>
        <a class="youtube" href="http://youtube.com/wanderlustfestival" target="_blank">YouTube</a>
        <a class="email" id="email" >Email</a>        
      </div>
    </nav> 
    <?php endif; ?>
	

<!--header email popup-->
<?php print $connect ;?>
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


<div id="logo">
  Wanderlust Festivals 
  Find Your True North
</div>



<!-- BEGIN LEGEND -->  
<div id="legend" class="ui-draggable">
  <div id="legend1">
    <div class="mark festival legendNo"></div>
    <div class="legendtitle">Wanderlust Festivals <span>i</span></div><br>
  </div>
  <div id="legend2">
    <div class="mark yoga legendNo"></div>
    <div class="legendtitle">Yoga in the City events <span>i</span></div><br>
  </div>
  <div id="legend3">
    <div class="mark studio legendNo"></div>
    <div class="legendtitle">Wanderlust Yoga Studios <span>i</span></div><br>
  </div>
</div>
<!-- END LEGEND -->  





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
  </div>
  -->
  <div id="about">
    <a class="icon" href="#">About</a>  
    <div class="dialog">
        <div class="content">
    
          <h3>About</h3>
          <p>
            Wanderlust Festival is the largest celebration of its kind in the world: a 4-day celebration of yoga, music, and nature.  Bringing together thousands of people from myriad backgrounds to experience adventure and transformation, Wanderlust provides the opportunity to bring your yoga practice to new heights, to enjoy the freedom of live music and to follow your spirit of adventure in spectacular outdoor settings, all the while creating community with like-minded seekers.           
          </p>
          <div class="arrow"></div>
        </div>
    </div>

  </div>
  <div id="mission">
    <a class="icon" href="#">Mission</a>  
    <div class="dialog">
        <div class="content">
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
    <a class="instagram-icon" href="http://instagram.com/wanderlustfest" target="_blank"></a>
    <a class="pinterest-icon" href="http://pinterest.com/wanderlustfest/" target="_blank"></a>    
    <a class="youtube-icon" href="http://youtube.com/wanderlustfestival" target="_blank"></a>    
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
    <a class="icon" href="http://blog.wanderfest.com" target="_blank">Blog</a>
  </div>

</div>
<!-- END TOOLBAR -->



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
      <div class="mark <?php print $site->purl_prefix . ' ' . $class;?>"></div>
	<div class="innersite <?php print $site->purl_prefix . ' ' . $class;?>" >	
	<?php 
	  if($site->extra_fields->field_event_date[0]['value']){
	   $item =  '<div class="site-item">';
	   $item .=  '<div class="site-marker"></div>';	   
	   $item .= '<div class="site-title"><a href="http://' . $site->purl_prefix . '.' . $base.'">'. $site->title . '</a></div>';
	   $item .= '<div class="siteevent"><div class="item-date">';
	  if (substr($site->extra_fields->field_event_date[0]['value'], 0 , 10) == substr($site->extra_fields->field_event_date[0]['value2'], 0 , 10)) {
	    $item .= date('F j, Y', strtotime($site->extra_fields->field_event_date[0]['value'])).'</div>';
	  }   
	  else {
	    $item .= date('F j -', strtotime($site->extra_fields->field_event_date[0]['value'])).' '.date('j, Y', strtotime($site->extra_fields->field_event_date[0]['value2'])).'</div>';	 
	   } 
	    $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_city[0]['value'].', '. $site->extra_fields->field_event_state[0]['value'].', '.$site->extra_fields->field_event_country[0]['value'].'</div></div></div>';
	 }
	 else {
      $item = '<div class="site-item"><div class="event-right">';
	    $item .= '<div class="site-title"><a href="' . $site->extra_fields->field_event_url[0]['value'] . '">' . $site->title . '</a></div>';
	    $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_city[0]['value'].', '. $site->extra_fields->field_event_state[0]['value'].', '.$site->extra_fields->field_event_country[0]['value'].'</div></div></div>';	 
	 }	 
	 $options = array('html' => TRUE);
	 if($class == 'festival') {
	   if(isset($_COOKIE["mysite"]) && $_COOKIE["mysite"] == $site->purl_prefix) {
	    $c = 'checked="checked"';
	   }
	   $fests .= '<div class="event-list"><div class="bl ">' . $item .  l('Visit Website &raquo;', 'http://' . $site->purl_prefix . '.' . $base, $options) . '<div id="site-checkbox"><input type="checkbox" value="0" name="' . $site->purl_prefix . '"' . $c .  'onClick="SetCookie(\'mysite\', ' .  $site->purl_prefix . ', 30);"><div id="saveDefualt">Save as my default</div></div></div></div>';
	 }elseif($class == 'yoga') {
	   if(isset($_COOKIE["mysite"]) && $_COOKIE["mysite"] == $site->purl_prefix) {
	    $c = 'checked="checked"';
	   }

	   $yogas .= '<div class="bl">' . $item  .  l('Visit Website &raquo;', 'http://' . $site->purl_prefix . '.' . $base, $options) .  '<div id="site-checkbox"><input type="checkbox" value="0" name="' . $site->purl_prefix . '"' . $c .  'onClick="SetCookie(\'mysite\', ' .  $site->purl_prefix . ', 30);">Save as my default</div></div>' ;
	 }
	 
	 unset($c);
	 
	print $item; ?>
	 <!--<div class="visitsite"><?php print l('Visit Website &raquo;', 'http://' . $site->purl_prefix . '.' . $base, $options);  ?> </div>-->
	<div id="site-checkbox"><input type="checkbox" value="0" name="<?php print $site->purl_prefix; ?>"<?php if(isset($_COOKIE["mysite"]) && $_COOKIE["mysite"] == $site->purl_prefix): ?> checked="checked"<?php endif; ?> onClick="SetCookie('mysite', '<?php print $site->purl_prefix; ?>', 30);">Save as my default</div>
	</div>
    <?php }
               elseif($class == 'studio') { ?>
		      <div class="mark <?php print 'studio' . $site->extra_fields->nid . ' ' . $class;?>"></div>
	<div class="innersite <?php print 'studio' . $site->extra_fields->nid . ' ' . $class;?>" >	
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
      $item = '<div class="site-item"><div class="site-marker"></div><div class="event-right">';
	    $item .= '<div class="site-title"><a target="_blank" href="'.$site->extra_fields->field_event_url[0]['url'].'">' . $site->extra_fields->title . '</a></div>';
	    $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_venue[0]['value'] . ' <br />' . $site->extra_fields->field_event_city[0]['value'] . ', ' . $site->extra_fields->field_event_state[0]['value'].'</div></div></div>';	 
	 }	 
	 $studios .= '<div class="bl">' .  $item . '<div class="visitsite">' . l('Visit Website', "{$site->extra_fields->field_event_url[0]['url']}") . '</div></div>';
	print $item; ?>
	 <!--<div class="visitsite"><?php print l('VISIT', "{$site->extra_fields->field_event_url[0]['url']}");  ?> </div>-->
    
	 
		
	  <?php } ?>
<?php  endforeach;  ?>


</div>
<div id="chile_show" class="chile_disp" >This Way to Chile</div>

	  <map name="map">
	  </map>
</div>

</div>
      
   
    </div>

<div id="wanderdata">
<div id="festinfo">
  <span>Wanderlust Festivals</span>
  <div class="descript">
    The Festival is the crown jewel of the Wanderlust experience: unforgettable 4-day summits in locations of awesome natural beauty.  We take everything you treasure about your yoga practice, combine it with all the elements and experiences you seek in nature, throw in some epic musical performances, thought-provoking lectures, delicious farm-to-table dinners, wine tastings, hikes, mediation sessions, films and so much more... The result? Newfound friends charting unforeseen journeys together.    
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
    
      </div> <!-- /#container -->

    
  <!-- BEGIN FOOTER -->
  <footer class="footer clearfix">
    <div class="copy">&copy; <?php echo date("Y"); ?> Wanderlust Festival LLC.</div>
    <div class="footer-links">
      <a href="<?php global $base_url; print $base_url; ?>/privacy-policy">Privacy Policy</a> |
      <a href="<?php print $base_url; ?>/terms-of-use">Terms of Use</a>
    </div>
    <div class="site-credits">
      Site by <a href="http://rootdownmedia.com" target="_blank">Root Down</a>
    </div>
  </footer>
  <!-- END FOOTER -->

    <?php } print $closure ?>

<script><?php  if ($f) {?>
/*detect if mobile */
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPod/i);
    },
	iPAD: function() {
        return navigator.userAgent.match(/iPad/i);
    },	
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.iPAD() || isMobile.Opera() || isMobile.Windows());
    }
};

if (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()){
	   $("head").prepend('<meta name="viewport" content="width=device-width, initial-scale=.4, maximum-scale=1">');
}

if (isMobile.any()) {

/*FOR MOBILE*/

    $("head").append('<link rel="stylesheet" type="text/css" href="sites/all/themes/wanderlust/css/mobile-stylesheet.css" />');
    window.scrollTo(325,0);

	/*MARK HOVERS*/
  $(".mark:not(.legendNo)").bind('touchend', function(e) {
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
  }
);

$("#about").toggle(
  function () {
    $('#toolbar .dialog').hide();
    $('#toolbar #about .dialog').fadeIn();;
  },
  function () {
    $('#toolbar #about .dialog').hide();
  }
);

$("#mission").toggle(
  function () {
    $('#toolbar .dialog').hide();
    $('#toolbar #mission .dialog').fadeIn();;
  },
  function () {
    $('#toolbar #mission .dialog').hide();
  }
);


$("#connect .icon").toggle(
  function () {
    $('#toolbar .dialog').hide();
    $('#toolbar #connect .dialog').fadeIn();
  },
  function () {
    $('#toolbar #connect .dialog').hide();
  }
);

	
/*BIND TOUCH EVENT TO MARK INNERSITE HOVERS*/	
	
    $(".mark").bind('touchend', function(e) {
        $(".mark").stop(true, true);
        $(this).find('div.innersite').toggle(500);
    });

    $(".mark:not(.legendNo)").hover(function() {

        $(this).find('div.innersite').fadeIn();

    }, function() {
        $(this).find('div.innersite').hide();
    });
	
	   if (document.all && document.documentMode && 8 || 9 === document.documentMode) {
	/*BALLOON HOVER TODO MAKE TOUCH*/
		   $(".mark.festival").hover(function() {
				$(this).animate({
      top: '-=7'
    }, 500);
            }, function() {
 
	$(".mark.festival").removeAttr('style'); 
	$(".mark.festival").stop();

            });
	
}
	
	
	
	

	

    /*LEGEND HOVERS*/

    /*for flag*/
    $("#legend1 .mark").hover(function() {
        $(".mark.festival").addClass('highlight1');
    }, function() {
        $('#.mark.festival').removeClass('highlight1');
    });
    /*for green star*/

    $("#legend2 .mark").hover(function() {
        $(".mark.yoga").addClass('highlight1');
    }, function() {
        $('#.mark.yoga').removeClass('highlight1');
    });

    /*for star only*/

    $("#legend3 .mark").hover(function() {
        $(".mark.studio").addClass('highlight1');
    }, function() {
        $('#.mark.studio').removeClass('highlight1');
    });

}
 else {
 /*FOR DESKTOP*/

$(document).ready(function() {



        $("#map-1").mapz();
        $("#legend").draggable();
        
		
		
		/*TOOLBAR MENU */
		
$("#help .icon").toggle(
  function () {
    $('#toolbar .dialog').hide();
    $('#toolbar #help .dialog').fadeIn();;
  },
  function () {
    $('#toolbar #help .dialog').hide();
  }
);

$("#about").toggle(
  function () {
    $('#toolbar .dialog').hide();
    $('#toolbar #about .dialog').fadeIn();;
  },
  function () {
    $('#toolbar #about .dialog').hide();
  }
);

$("#mission").toggle(
  function () {
    $('#toolbar .dialog').hide();
    $('#toolbar #mission .dialog').fadeIn();;
  },
  function () {
    $('#toolbar #mission .dialog').hide();
  }
);


$("#connect .icon").toggle(
  function () {
    $('#toolbar .dialog').hide();
    $('#toolbar #connect .dialog').fadeIn();
  },
  function () {
    $('#toolbar #connect .dialog').hide();
  }
);
			

       $(".mark:not(.legendNo)").mouseover(function() {
	$(".innersite").fadeOut();
	$(this).next().stop(true, true).delay(830).fadeIn('slow');

	
				
			
});			
			
			$(".innersite").mouseleave(function() {
			
			$(".innersite").fadeOut();

});	
	
	
	
// FALLBACK MARK ANIMATION FOR IE
if (!Modernizr.csstransitions) { // Test if CSS transitions are supported
    $(function () {
        $(".mark").hover(function () {
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
	
		
	 // MAKE ENTIRE INNERSITE DIV CLICKABLE & LINKED
  	$(".innersite").click(function(){
       window.location=$(this).find("a").attr("href"); 
       return false;
    });		
		

/*  
$(window).load(function () {
    // Get the css browser code (ie: -moz-)
    var bcode = $.keyframe.browserCode();

    // Setup the initial transform style.
    $('.mark').css(bcode + 'transform');

    // Adding a new animation sequences (keyframe)
    $.fn.addKeyframe([{
        name: "bob",
            "0%": bcode + "transform:translate(0px,-2px)",
            "25%": bcode + "transform:translate(0px,-8px)",
            "50%": bcode + "transform:translate(0px,-1px)",
            "75%": bcode + "transform:translate(0px,-3px)",
            "100%": bcode + "transform:translate(0px,0px)"
    }]);

    $('.mark').hover(function () {
        $(this).playKeyframe({
            name: 'bob',
            duration: 1000,
            timingFunction: 'ease',
            delay: 0,
            repeat: 1
        });
    }, function () {
        $('.mark').resetKeyframe();
    });

});

		*/
        
/*LEGEND HOVERS*/
        $("#legend1 .mark").hover(function() {
            $(".mark.festival").addClass('highlight1');
        }, function() {
            $('#.mark.festival').removeClass('highlight1');
        });

        $("#legend2 .mark").hover(function() {
            $(".mark.yoga").addClass('highlight1');
        }, function() {
            $('#.mark.yoga').removeClass('highlight1');
        });
	
		$("#legend3 .mark").hover(function() {
            $(".mark.studio").addClass('highlight1');
        }, function() {
            $('#.mark.studio').removeClass('highlight1');
        });
      
		
/*BALLOON HOVER FOR IE
   if (document.all && document.documentMode && 8 || 9 === document.documentMode) {
         		   $(".mark.festival").hover(function() {
				$(this).animate({
      top: '-=5'
    }, 400);
	
	$(this).animate({
      top: '-=459'
    }, 500);
            }, function() {
 
	$(".mark.festival").removeAttr('style'); 
	$(".mark.festival").stop();

            });
	

        } 
		*/
		
		
	/*FOR CHROME FIREFIX*/	
$(".mark.festival").mouseover(function() {
$(".mark.festival").removeClass("baloonHover");
$(this).removeClass("baloonHover");
$(this).addClass("baloonHover");

});

			

			
/*FIX FANCYBOX POPUPS*/
		$(".fancybox-inner").css("overflow", "hidden")
		
/*POSITION MAP FOR DESKTOP*/
		$('#map-1').css('left', '-270px');
		
    });

}

/*FOR BOTH MOBILE AND DESKTOP*/


<?php } else {?> 

$(document).ready(function()
{
  
/*FOR PHOTOS*/
        $('body').append('<div id="ted_photo_hover"></div>');
        $('#ted_photo_hover').css({
            position: 'absolute'
        });

        $('#ted_photo_hover').offset({
            top: 500,
            left: 500
        });
        $('.ted_photo').hover(function(e) {
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
            }, function(e) {
            //    $('#ted_photo_hover').hide();
            });
			
			});
			<?php }?>
			/*GOOGLE ANALYTICS*/

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

  	<?php  header('Access-Control-Allow-Origin: *'); ?>
  
$(document).ready(function() {
	$('#email').click(function() {
	
		//alert(oo);
		
		$('#newsletter #submit').click(function() {
     


		$.ajax({
			type:        'POST',
			url:         $('#newsletter').attr('action'),
			contentType: "application/json; charset=utf-8",
	        dataType:    'jsonp',
	        crossDomain:  true,
			data:        $('#newsletter').serialize(),
			success:     function(json){ alert("success");	},
			error:      function(){ alert('Sending Mail: failed'); }
			});
		return false;
	    
	      
	      
	      
	      
		}); 
	
		
		
		
		
	});
});

</script>


</body>
</html>
