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
       <?php print $scripts; ?>
  
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/lib/jquery-1.8.2.min.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/lib/jquery.mousewheel.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.js"></script>
      

	<script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
	<script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>zz
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    

  <![endif]-->
  
<script type="text/javascript">
 
 $(document).ready(function() {

 (function($) {
  $(function() {
 
  	$(".email").click(function() {
				$.fancybox.open('#mytable');
	});
	
  });
})(jQuery);
});





</script>

  <!-- SET FACEBOOK OPEN GRAPH APP ID -->
  <meta property="fb:app_id" content="321576251186267"/>



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
      </div>

      <div class="tomap">
        <a href="<?php   $base = wl_get_base_domain(); print "http://{$base}"; ?>" title="<?php print t('To map'); ?>"><img src="/sites/all/themes/wanderlust/images/see-all-events.png" alt="<?php print t('To map'); ?>" /></a>
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
        <a class="email" >Email</a>        
      </div>      
    </nav> 
    <?php endif; ?>
	<?php print $connect ;?> 
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
        <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title ?></h1><?php endif; ?>
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

  </div> 
  <!-- END CONTAINER -->



  <!-- BEGIN FOOTER -->
  <footer class="footer">
    <div class="logos">
      <div class="velour">Velour Music Group</div>
      <div class="c3">C3 Presents</div>
    </div>
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


</body>
</html>
