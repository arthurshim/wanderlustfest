<!doctype html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
   <meta property="fb:admins" content="1407657,1149492126,515565663,508316132,6911729"/>
  
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <link type="text/css" rel="stylesheet" media="all" href="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-misc/global-top-bar.css" />

  <?php print $scripts; ?>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/lib/jquery-1.8.2.min.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/lib/jquery.mousewheel.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/jquery_cookie.js"></script>
	
	  <script>
jQuery.noConflict();
(function($) {
  $(function() {
 
  	$(".email").click(function() {
				$.fancybox.open('#newsletter');
	});
	
  });
})(jQuery);


</script>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
    <?php
      $base = wl_get_base_domain();
      ?>
      
  <!-- Mail Chimp Goals Tracker -->	
	<script type="text/javascript">
  var $mcGoal = {'settings':{'uuid':'3252bf638e8eb23d7ebc4af05','dc':'us3'}};
  (function() {
  var sp = document.createElement('script'); sp.type = 'text/javascript'; sp.async = true; sp.defer = true;
  sp.src = ('https:' == document.location.protocol ? 'https://s3.amazonaws.com/downloads.mailchimp.com' : 'http://downloads.mailchimp.com') + '/js/goal.min.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sp, s);
  })(); 
  </script>
	      
      
</head>

<body class="<?php print $body_classes; ?> page-lineup">
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
<?php print $connect ;?> 


<!-- WL Global Top Bar -->
  <div id="wl-global-bar">
    <div id="global-logo">
      <a href="http://wanderlust.com" target="_blank">Wanderlust</a>
    </div>
    <ul id="global-nav">
      <li class="festivals"><a href="http://wanderlust.com/yoga-festivals" target="_blank">Festivals</a></li>
      <li class="teacher-training"><a href="http://wanderlust.com/yoga-teacher-training" target="_blank">Teacher Training</a></li>
      <li class="studios"><a href="http://wanderlust.com/yoga-studios" target="_blank">Studios</a></li>
      <li class="media"><a href="http://wanderlust.com/journal" target="_blank">Journal</a></li>
      <li class="store"><a href="http://wanderlust.com/shop/" target="_blank">Store</a></li>
    </ul>
    <ul id="wl-global-social">
      <li id="find-your-true-north"><span>Find Your True North</span></li>
      <li class="facebook"><a href="http://facebook.com/wanderlust" target="_blank" onClick="_gaq.push(['_trackEvent', 'Global Top Bar', 'Facebook', 'Follow']);">Facebook</a></li>
      <li class="twitter"><a href="http://twitter.com/wanderlustfest" target="_blank" onClick="_gaq.push(['_trackEvent', 'Global Top Bar', 'Twitter', 'Follow']);">Twitter</a></li>
      <li class="instagram"><a href="http://instagram.com/wanderlustfest" target="_blank" onClick="_gaq.push(['_trackEvent', 'Global Top Bar', 'Instagram', 'Follow']);">Instagram</a></li>
      <li class="youtube"><a href="http://www.youtube.com/user/WanderlustFestival" target="_blank" onClick="_gaq.push(['_trackEvent', 'Global Top Bar', 'YouTube', 'Follow']);">YouTube</a></li>
    </ul>
  </div>



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
      <a href="http://wanderlust.com/yoga-festivals" target="_blank"><img src="<?php print  base_path() . path_to_theme() . '/images/newmap_icon.png'//print $logo; ?>" alt="<?php print t('To map'); ?>" /></a>
   </div>

  </div>
      
      <?php if ($search_box): ?><?php print $search_box ?><?php endif; ?>
      
	    <?php if ($primary_links || $secondary_links || !empty($navigation)): ?>
      <nav id="navigation" role="navigation" class="clearfix ">
	      <div class="subhead"><?php print $navigation ?></div>
      </nav> <!-- /#navigation -->
      <?php endif; ?>
      
    </header> <!-- /#header -->
   
    <div id="slideshows" role="slideshow" class="slideshowhome">
      <?php if (!empty($slidemain)): ?>
      <div class="slidemain">
        <?php print $slidemain; ?>
      </div>
      <?php endif; ?>
       
	    <?php if (!empty($slides)): ?>
      <div class="slides">
        <?php print $slides; ?>
      </div>
      <?php endif; ?>
    </div>
    
    <div class="subhead" >
    
      <div id="main"  role="main" class="clearfix">
        <?php if (!empty($messages)): print $messages; endif; ?>
        <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>
        <a id="main-content"></a>
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

  <!-- Sponsor logos section -->
      <?php list($subdomain, $domain) = explode('.', $_SERVER['SERVER_NAME'], 2); ?>
                 
      <?php  if($subdomain == 'la' || $subdomain == 'sf' || $subdomain == 'chicago' || $subdomain == 'nyc'){   ?>
        <div id="sponsor-logos">
          <a href="http://luvoinc.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/luvo.png" alt="Luvo"></a>
          <a href="http://www.re-sourcespringwater.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/resource.png" alt="Resource"></a>
          <a href="http://www.health.com/health/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/health.png" alt="Health"></a>            
          <a href="http://www.kashi.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/kashi.png" alt="Kashi"></a>
          <a href="http://spiritualgangster.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/spiritual.png" alt="Spiritual"></a>
        </div>
      <?php } ?>

      <?php  if($subdomain == 'philadelphia'){   ?>
        <div id="sponsor-logos">
          <a href="http://www.re-sourcespringwater.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/resource.png" alt="Resource"></a>
          <a href="http://www.health.com/health/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/health.png" alt="Health"></a>            
          <a href="http://www.kashi.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/kashi.png" alt="Kashi"></a>
          <a href="http://spiritualgangster.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/spiritual.png" alt="Spiritual"></a>
        </div>
      <?php } ?>

  </div> <!-- /#container -->

  <script>
  
$(document).ready(function() {
  $(".swlang li a").click(function() {
    if($(this).parent().hasClass('fr') ) {
      $.cookie("wanlang", 'fr', {expires:30, path: '/', domain: '<?php print '.' . $base ;?>'});
    }
    else if($(this).parent().hasClass('en')) {
       $.cookie("wanlang", 'en', {expires:30, path: '/', domain: '<?php print '.' . $base ;?>'});  
    }
  });
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
})(jQuery);
$('#thankyou').show(1000); 

setTimeout(function(){$('#thankyou').hide(1000); },4000)



               }
          });
		return false;
	       
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

<!-- AdRoll code -->
<script type="text/javascript">
adroll_adv_id = "RZRFLXHNUZGIDJYVUM2UXM";
adroll_pix_id = "2525WMUBZVGTZFRBIAHWGZ";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>

<!--Freshdesk code-->
<script type="text/javascript" src="http://assets.freshdesk.com/widget/freshwidget.js"></script>;
<script type="text/javascript">
FreshWidget.init("", {"queryString": "&widgetType=popup&formTitle=Questions%2C+Help+%26+Support&submitThanks=Namaste.+We'll+get+back+to+you+soon.", "widgetType": "popup", "buttonType": "text", "buttonText": "Ask Us", "buttonColor": "white", "buttonBg": "#2f6655", "alignment": "4", "offset": "235px", "submitThanks": "Namaste. We'll get back to you soon.", "formHeight": "500px", "url": "http://support.wanderlustfestival.com"} );
</script>

  
</body>
</html>
