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

  <!-- <script type="text/javascript" src="sites/all/modules/cufon/js/cufon-yui.js"></script>
<script type="text/javascript" src="sites/all/libraries/cufon-fonts/Akzidenz_Grotesk_BE_Super_800.font.js"></script>
<script type="text/javascript" src="sites/all/libraries/cufon-fonts/Akzidenz_Grotesk_BE_Bold_700.font.js"></script>
<script type="text/javascript" src="sites/all/libraries/cufon-fonts/Akzidenz_Grotesk_BE_Cn_400.font.js"></script>
<script type="text/javascript" src="sites/all/libraries/cufon-fonts/SuperCondensed_500.font.js"></script>
<script type="text/javascript" src="sites/all/libraries/cufon-fonts/FuturaBold_700.font.js"></script>
<script type="text/javascript" src="sites/all/libraries/cufon-fonts/Futura_500.font.js"></script>
<script type="text/javascript" src="sites/all/libraries/cufon-fonts/SuperGroteskB_500.font.js"></script>-->
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
    <header id="header" role="banner" class="clearfix">
      
      <?php if (!empty($topnav)): ?>
      <div class="topnav">
        <?php print $topnav; ?>
      </div>
      <?php endif; ?>
      
      <div class="subhead">
        <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
          <img src="http://c282314.r14.cf1.rackcdn.com/website-images/wanderlust_logo.png" alt="<?php print t('Home'); ?>" />
        </a>
        <?php endif; ?>
        <?php
	print l('return',"http://wanderfest.com");
	
	if ($site_name || $site_slogan): ?>
        <hgroup id="site-name-slogan">
          <?php if ($site_name): ?>
            <h1 id="site-name" style=" display: none;">
              <span><?php print $site_name; ?></span>
            </h1>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
          <?php endif; ?>
	        
	        <?php print $header; ?>
        </hgroup>
        <?php endif; ?>
      </div>
      
      <?php if ($search_box): ?><?php print $search_box ?><?php endif; ?>
      
	    <?php if ($primary_links || $secondary_links || !empty($navigation)): ?>
      <nav id="navigation" role="navigation" class="clearfix ">
	      <div class="subhead2"><?php print $navigation ?></div>
      </nav> <!-- /#navigation -->
      <?php endif; ?>
      
    </header> <!-- /#header -->
   

    <?php
    }
    
      if ($f) {  ?>
      
 <?php
      $q = 'SELECT * FROM {sites}';                   //get all sites; 
      $res = db_query($q);
    while($row = db_fetch_object($res)) {
    if ($nid = sites_extra_fields_get_associated_nid($row->sid)) {
        if ($node = node_load($nid)) {                   /* load event node*/
          $row->extra_fields = $node;
        }
      }
      $sites[$row->sid] = $row;
    }
    ?>
    
<div id="map-1-container">   
<div class="map-viewport">
<div id="map-1" >
<img  class="level" src="<?php print base_path() . path_to_theme() ; ?>/images/map.jpg" width="2080" height="1170" usemap="#map" alt="" />
  <?php  foreach ($sites as $site): // print  checkboxes for sites  with own data ?> 
      <?php if($site->extra_fields->status == 1 && $site->extra_fields->field_event_hide[0]['value'] == 'enabled') { ?>
      <div class="mark <?php print $site->purl_prefix;?>">
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
	    $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_venue[0]['value'] . ' <br /> ' . $site->extra_fields->field_event_city[0]['value'].', '. $site->extra_fields->field_event_state[0]['value'] . '</div></div></div>';
	 }
	 else {
            $item = '<div class="site-item"><div class="event-right">';
	    $item .= '<div class="site-title"><a href="' . $site->extra_fields->field_event_url[0]['value'] . '">' . $site->title . '</a></div>';
	    $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_venue[0]['value'] . ' <br />' . $site->extra_fields->field_event_city[0]['value'] . ', ' . $site->extra_fields->field_event_state[0]['value'].'</div></div></div>';	 
	 }	 
	 
	print $item; ?>
	 <div class="visitsite"><?php print l('Visit site', 'http://' . $site->purl_prefix . '.' . $base);  ?> </div>
	<input type="checkbox" value="0" name="<?php print $site->purl_prefix; ?>"<?php if(isset($_COOKIE["mysite"]) && $_COOKIE["mysite"] == $site->purl_prefix): ?> checked="checked"<?php endif; ?> onClick="SetCookie('mysite', '<?php print $site->purl_prefix; ?>', 30);">Save this event as default</div>
      </div>
    <?php } ?>
<?php  endforeach;   ?>


</div>


    
	  <map name="map">

	
	  

	</map>
</div>

</div>
      
      
      
      
     <div id="mapa">

      <div class="map-content">	
	


<?php  /*foreach ($sites as $site): // print  checkboxes for sites  with own data ?> 
      <?php if($site->extra_fields->status == 1 && $site->extra_fields->field_event_hide[0]['value'] == 'enabled') { ?>
      <div class="mark <?php print $site->purl_prefix;?>">
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
	    $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_venue[0]['value'] . ' <br /> ' . $site->extra_fields->field_event_city[0]['value'].', '. $site->extra_fields->field_event_state[0]['value'] . '</div></div></div>';
	 }
	 else {
            $item = '<div class="site-item"><div class="event-right">';
	    $item .= '<div class="site-title"><a href="' . $site->extra_fields->field_event_url[0]['value'] . '">' . $site->title . '</a></div>';
	    $item .= '<div class="siteaddress">' . $site->extra_fields->field_event_venue[0]['value'] . ' <br />' . $site->extra_fields->field_event_city[0]['value'] . ', ' . $site->extra_fields->field_event_state[0]['value'].'</div></div></div>';	 
	 }	 
	 
	print $item; ?>
	 <div class="visitsite"><?php print l('Visit site', 'http://' . $site->purl_prefix . '.' . $base);  ?> </div>
	<input type="checkbox" value="0" name="<?php print $site->purl_prefix; ?>"<?php if(isset($_COOKIE["mysite"]) && $_COOKIE["mysite"] == $site->purl_prefix): ?> checked="checked"<?php endif; ?> onClick="SetCookie('mysite', '<?php print $site->purl_prefix; ?>', 30);">Save this event as default</div>
      </div>
    <?php } ?>
<?php  endforeach; */  ?>

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
      
    </div>
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
</html>
