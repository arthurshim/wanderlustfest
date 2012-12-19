<!DOCTYPE html>
<!--page.tpl.php -->
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
      ?>
  
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

    <div id="skip-link">
      <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
      <?php if ($primary_links): ?>
        <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
      <?php endif; ?>
    </div>

    <header id="header" role="banner" class="clearfix">
      
     
      
        <div class="subhead">
           <hgroup id="site-name-slogan">      
           <?php print $header; ?>
           </hgroup>

    <div class="newlogo">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo"><img src="<?php print  base_path() . path_to_theme() . '/images/new_logo.png'//print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
   <?php print $topnav; ?>
    </div>

   <div class="tomap">
      <a href="<?php print "http://{$base}"; ?>" title="<?php print t('To map'); ?>"><img src="<?php print  base_path() . path_to_theme() . '/images/newmap_icon.png'//print $logo; ?>" alt="<?php print t('To map'); ?>" /></a>
   </div>

  </div>
      
      <?php if ($search_box): ?><?php print $search_box ?><?php endif; ?>
      
	    <?php if ($primary_links || $secondary_links || !empty($navigation)): ?>
      <nav id="navigation" role="navigation" class="clearfix ">
	      <div class="subhead2"><?php print $navigation ?></div>
      </nav> <!-- /#navigation -->
      <?php endif; ?>
      
    </header> <!-- /#header -->
   
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
    
    <div class="subhead body-content">
    
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
    <?php print $closure ?>
  </div> <!-- /#container -->


</body>
</html>
