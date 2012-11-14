<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
<!--test-->
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <!--test-->
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
  
   <meta property="og:description" content="Where does your Wanderlust take you? Where water springs hot and the mountain air cools. Where the land ends and life begins. Take your practice south & find your true north."/>
   <meta property="og:title" content="Wanderlust Chile | Feb. 15 - 17, 2013"/>
   <meta property="og:type" content="website"/>
   <!--<meta property="og:url" content="http://www.wanderlustfestival.com"/>-->
   <meta property="og:image" content="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/website-images/chile-poster.jpg"/>
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
</head>

<body class="<?php print $body_classes; ?> chile-splash">
  
  <div class="chile-top-bar">

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
        <?php if ($site_name || $site_slogan): ?>
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
      
    </header> <!-- /#header -->
        <?php  global $user;
  if($user->uid != 1 && $user->uid != 4482) { ?>
    
    <div class="subhead body-content">
    
      <div id="main"  role="main" class="clearfix">
        <?php if (!empty($messages)): print $messages; endif; ?>
        
        <div class="poster">
          <img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/website-images/chile-poster.jpg">
        </div>
        <div class="info">
          <p class="intro">Where does your Wanderlust take you?</p>
          <p class="title">Wanderlust Chile</p>
          <p class="details">February 15 - 17, 2013 <br/>
          Termas De Chillan • Chile
          </p>
          <p class="description">
          Where water springs hot and the mountain air cools<br/>
           Where the land ends and life begins<br/>
           Take your practice south & find your true north.<br/>            
          </p>
          <p>More details coming November 2012</p>
          <div class="social">
            <div class="label"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/website-images/spread.png"></div>
            <div><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fchile.wanderlustfestival.com&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=321576251186267" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe></div>
            <div><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
            <div><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fchile.wanderlustfestival.com&media=http%3A%2F%2F9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com%2Fwebsite-images%2Fchile-poster.jpg&description=Introducing%20a%20brand%20new%20escape...%20Wanderlust%20Chile%20Feb.%2015%20-%2017%2C%202013.%20More%20details%20coming%2011%2F1%2F12." class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></div>
          </div>
        </div>
        
    </div>
      
      
        <?php } else {?>
  
      <?php if ($primary_links || $secondary_links || !empty($navigation)): ?>
      <nav id="navigation" role="navigation" class="clearfix ">
	      <div class="subhead2"><?php print $navigation ?></div>
      </nav> <!-- /#navigation -->
      <?php endif; ?>
     
  
   <div id="slideshows" role="slideshow" class="slideshowhome">

      <div class="slidemain-container">
        <div class="slidemain">
          <?php print $slidemain; ?>
        </div>
      </div>
       
      <div class="slides">
        <?php print $slides; ?>
      </div>
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
  
    <?php } ?>
   <!--   <script type="text/javascript" src="sites/all/modules/cufon/js/cufon-drupal.js"></script>-->
    <?php print $closure ?>
  </div> <!-- /#container -->

  </div>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>

</body>
</html>
