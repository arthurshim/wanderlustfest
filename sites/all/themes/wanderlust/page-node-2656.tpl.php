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
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
    <?php
      $base = wl_get_base_domain();
      ?>
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
  
</body>
</html>
