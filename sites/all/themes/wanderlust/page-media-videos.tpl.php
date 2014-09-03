<!doctype html>
<!--[if lt IE 7]> <html xmlns:og="http://opengraphprotocol.org/schema/" class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html xmlns:og="http://opengraphprotocol.org/schema/" class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html xmlns:og="http://opengraphprotocol.org/schema/" class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html xmlns:og="http://opengraphprotocol.org/schema/" class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
   <meta property="fb:admins" content="1407657,1149492126,515565663,508316132,6911729"/>

  
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
        <link rel="stylesheet" type="text/css" href="/sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.css" media="screen" />
      	<link rel="stylesheet" type="text/css" href="/sites/all/themes/wanderlust/js/fancybox/source/helpers/jquery.fancybox-thumbs.css" />
  <link type="text/css" rel="stylesheet" media="all" href="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-misc/global-top-bar.css" />
  <link href="http://fonts.googleapis.com/css?family=Montserrat:700|Oxygen:400,700|Roboto:400,700|Roboto+Condensed:400" rel="stylesheet" type="text/css">
	 <?php print $scripts; ?>

      <script type="text/javascript" src="/sites/all/libraries/swfobject/swfobject.js"></script><!--where did swf object go? paste it here-->
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/lib/jquery-1.8.2.min.js"></script>
   	     <script type="text/javascript">
         var $jq = jQuery.noConflict();
      </script> 
      <script type="text/javascript" src="/sites/all/modules/emfield/includes/js/swfobject_api.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/lib/jquery.mousewheel.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.js"></script>
      

	<script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
	<script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
	
	<script type="text/javascript" src="/sites/all/themes/wanderlust/js/jquery_cookie.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    

  <![endif]-->
  
<script type="text/javascript">
 
 $(document).ready(function() {
 $('.view-videos.view-display-id-page_1 li.views-row').click(function() {                                           
$jq('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});                                              
});    
});


	
jQuery.noConflict();
(function($) {
  $(function() {
 
  	$(".email").click(function() {
				$.fancybox.open('#newsletter');
	});
	
  });
})(jQuery);



</script>

  <!-- SET FACEBOOK OPEN GRAPH APP ID -->
  <meta property="fb:app_id" content="321576251186267"/>

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

<body class="body-content-photos <?php print $body_classes; ?>">
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

    <!-- BEGIN HEADER -->
    <header id="header" role="banner" class="clearfix">

      <div id="event-info">      
        <?php print $header;	?>
	        <?php
	$site = sites_get_current_site();	
	if($site->purl_prefix == 'tremblant') {
	  $block = module_invoke('locale', 'block', 'view', 0);
	  print '<div class="swlang">' . $block['content'] . '</div>';
	}	
	//print $language_region; ?>
      </div>

      <div class="tomap">
        <?php list($subdomain, $domain) = explode('.', $_SERVER['SERVER_NAME'], 2); ?>
        <?php if ($subdomain == 'la' || $subdomain == 'sf'){
            print
              '<a class="register-now" href="/register"  title="Register Now">Register Now</a>';
              }
              else{
              print
              '<a class="buy-tickets" href="/tickets"  title="Buy Tickets Now">Buy Tickets Now</a>';
              }
              ?>
      </div>
      
    </header>
    <!-- END HEADER -->
    
    <!-- BEGIN NAVIGATION -->  
    <?php if ($primary_links || $secondary_links || !empty($navigation)): ?>
    <nav id="navigation" role="navigation" class="clearfix ">
      <?php print $navigation ?>
           <?php if ($subdomain == 'syd' || $subdomain == 'mel' ||$subdomain == 'cockatooisland'){
      print 
      '<div class="social-media-links">
        <a class="facebook" href="https://www.facebook.com/WanderlustFestivalAustralia?ref=hl" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'Facebook\', \'follow\',, false]);">Facebook</a>
        <a class="twitter" href="https://twitter.com/WanderlustOZ" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'Twitter\', \'follow\',, false]);">Twitter</a>
        <a class="instagram" href="http://instagram.com/wanderlustfestoz" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'Instagram\', \'follow\',, false]);">Instagram</a>
        <a class="youtube" href="http://www.youtube.com/channel/UCiMnt7chTHg8DpJZPwgr9Hg" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'YouTube\', \'follow\',, false]);">YouTube</a>
        <a class="emailIcon" id="email" >Email</a>        
      </div>';
       }
   
      elseif ($subdomain == 'akl' ||$subdomain == 'taupo' ){
      print
      '<div class="social-media-links">
        <a class="facebook" href="https://www.facebook.com/WanderlustFestivalNZ?ref=hl" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'Facebook\', \'follow\',, false]);">Facebook</a>
        <a class="twitter" href="https://twitter.com/Wanderlustnz" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'Twitter\', \'follow\',, false]);">Twitter</a>
        <a class="instagram" href="http://instagram.com/wanderlustfestnz" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'Instagram\', \'follow\',, false]);">Instagram</a>
        <a class="youtube" href="http://www.youtube.com/channel/UCiMnt7chTHg8DpJZPwgr9Hg" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'YouTube\', \'follow\',, false]);">YouTube</a>
        <a class="emailIcon" id="email" >Email</a>        
      </div>';
      }
   
      else{
      print
      '<div class="social-media-links">
        <a class="facebook" href="http://facebook.com/wanderlust" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'Facebook\', \'follow\',, false]);">Facebook</a>
        <a class="twitter" href="http://twitter.com/wanderlustfest" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'Twitter\', \'follow\',, false]);">Twitter</a>
        <a class="instagram" href="http://instagram.com/wanderlustfest" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'Instagram\', \'follow\',, false]);">Instagram</a>
        <a class="youtube" href="http://youtube.com/wanderlustfestival" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'YouTube\', \'follow\',, false]);">YouTube</a>
        <a class="emailIcon" id="email" >Email</a>        
      </div>';
      }
        
    ?>     
    </nav> 
    <?php endif; ?>
    <!-- END NAVIGATION -->
   
   
    <!-- EMAIL SIGN UP CODE -->
    <div class="email-code">
      <?php print $connect ;?>
    </div>
   
    <!-- BEGIN CONTENT -->    
    <div class="subhead body-content">
    
      <div id="main"  role="main" class="clearfix">
        <?php if (!empty($messages)): print $messages; endif; ?>
        <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print t('Videos'); ?></h1><?php endif; ?>
        <?php if (!empty($tabs)): ?><div class="tabs-wrapper clearfix"><?php print $tabs; ?></div><?php endif; ?>
        <?php if (!empty($help)): print $help; endif; ?>
	
        <?php print $content;	?>
        
        <?php if (!empty($right)): ?>
        <div id="sidebar-right" role="complementary" class="sidebar clearfix">
          <?php print $right; ?>
        </div> <!-- /sidebar-right -->
        <?php endif; ?>
      </div> <!-- /#main -->
      
    </div>
    <!-- END CONTENT -->

    <?php print $closure ?>

      <!-- Sponsor logos section -->
      <?php list($subdomain, $domain) = explode('.', $_SERVER['SERVER_NAME'], 2); ?>
                 
      <?php  if($subdomain == 'la' || $subdomain == 'sf' || $subdomain == 'chicago'){   ?>
        <div id="sponsor-logos">
          <a href="http://luvoinc.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/luvo.png" alt="Luvo"></a>
          <a href="http://www.re-sourcespringwater.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/resource.png" alt="Resource"></a>
          <a href="http://www.health.com/health/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/health.png" alt="Health"></a>            
          <a href="http://www.kashi.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/kashi.png" alt="Kashi"></a>
          <a href="http://spiritualgangster.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/spiritual.png" alt="Spiritual"></a>
        </div>
      <?php } ?>

      <?php  if($subdomain == 'atlanta'){   ?>
        <div id="sponsor-logos">
          <a href="http://zico.com/" class="zico" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/zico.png" alt="Zico"></a>
          <a href="http://www.waterbobble.com/" class="babble" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/babble.png" alt="Babble"></a>            
          <a href="http://www.re-sourcespringwater.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/resource.png" alt="Resource"></a>
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

      <?php  if($subdomain == 'brooklyn'){   ?>
        <div id="sponsor-logos">
          <a href="http://luvoinc.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/luvo_nyc.png" alt="Luvo"></a>
          <a href="http://www.re-sourcespringwater.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/resource_nyc.png" alt="Resource"></a>
          <a href="http://www.kashi.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/kashi_nyc.png" alt="Kashi"></a>
          <a class="spiritualgangster" href="http://spiritualgangster.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/spiritual_nyc.png" alt="Spiritual"></a>
          <a class="babble" href="http://waterbobble.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/babble_nyc.png" alt="Babble"></a>
          <a class="starbucks" href="http://starbucks.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/starbucks_nyc.png" alt="Starbucks"></a>
          <a class="health" href="http://www.health.com/health/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/health_nyc.png" alt="Health"></a>            
          <a class="oscar" href="https://www.hioscar.com/" target="_blank"><img src="/sites/all/themes/wanderlust/images/oscar.png" alt="Health"></a>            
          <a class="evolution" href="http://evolutionfresh.com/" target="_blank"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-images/evolution_nyc.png" alt="Evolution Fresh"></a>
          <a class="manduka" href="http://manduka.com/" target="_blank"><img src="/sites/all/themes/wanderlust/images/manduka.png" alt="Manduka"></a>

        </div>
      <?php } ?>


  </div> 
  <!-- END CONTAINER -->



  <!-- BEGIN FOOTER -->
  <footer class="footer">
    <div class="copy">&copy; <?php echo date("Y"); ?> Wanderlust Festival LLC.</div>
    <div class="footer-links">
      <a href="/privacy-policy">Privacy Policy</a> |
      <a href="/terms-of-use">Terms of Use</a>
    </div>
    <div class="site-credits">
      Site by <a href="http://rootdownmedia.com" target="_blank">Root Down</a>
    </div>
  </footer>
  <!-- END FOOTER -->
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
$('#thankyou').fadeIn(1000); 

setTimeout(function(){$('#thankyou').fadeOut(1000); },4000)



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
