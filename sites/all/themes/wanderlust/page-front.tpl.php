<!doctype html>
<!--page.tpl.php     yes-->
<!--[if lt IE 7]> <html xmlns:og="http://opengraphprotocol.org/schema/" class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html xmlns:og="http://opengraphprotocol.org/schema/" class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html xmlns:og="http://opengraphprotocol.org/schema/" class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]>  <html xmlns:og="http://opengraphprotocol.org/schema/" class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
  <title><?php print $head_title; ?></title>
  <?php header("Connection: keep-alive");?>
  <?php print $styles; ?>
    <link href="/sites/all/themes/wanderlust/css/classic-081711.css" rel="stylesheet" type="text/css">
  <style type="text/css">
  #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
  </style>

  <link rel="stylesheet" type="text/css" href="/sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.css" media="screen" />
      <link type="text/css" rel="stylesheet" media="all" href="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2014-misc/global-top-bar.css" />


  <?php print $scripts; ?>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/lib/jquery-1.8.2.min.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/lib/jquery.mousewheel.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.js"></script>
      <script type="text/javascript" src="/sites/all/themes/wanderlust/js/jquery_cookie.js"></script>
	  <script>

var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='phone';fnames[4]='MMERGE4';ftypes[4]='text';fnames[5]='MMERGE5';ftypes[5]='text';fnames[6]='MMERGE6';ftypes[6]='text';fnames[7]='MMERGE7';ftypes[7]='text';fnames[8]='MMERGE8';ftypes[8]='text';fnames[9]='MMERGE9';ftypes[9]='text';fnames[10]='MMERGE10';ftypes[10]='text';fnames[11]='MMERGE11';ftypes[11]='text';fnames[12]='MMERGE12';ftypes[12]='text';fnames[13]='MMERGE13';ftypes[13]='text';fnames[16]='COUNTRY';ftypes[16]='dropdown';fnames[15]='EVENT';ftypes[15]='dropdown';fnames[14]='SOURCE';ftypes[14]='dropdown';
try {
    var jqueryLoaded=jQuery;
    jqueryLoaded=true;
} catch(err) {
    var jqueryLoaded=false;
}
var head= document.getElementsByTagName('head')[0];
if (!jqueryLoaded) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
    head.appendChild(script);
    if (script.readyState && script.onload!==null){
        script.onreadystatechange= function () {
              if (this.readyState == 'complete') mce_preload_check();
        }    
    }
}

var err_style = '';
try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = err_style;
} else {
  style.appendChild(document.createTextNode(err_style));
}
head.appendChild(style);
setTimeout('mce_preload_check();', 250);

var mce_preload_checks = 0;
function mce_preload_check(){
    if (mce_preload_checks>40) return;
    mce_preload_checks++;
    try {
        var jqueryLoaded=jQuery;
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
    head.appendChild(script);
    try {
        var validatorLoaded=jQuery("#fake-form").validate({});
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    mce_init_form();
}
function mce_init_form(){
    jQuery(document).ready( function($) {
      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
      options = { url: 'http://wanderlust.us3.list-manage.com/subscribe/post-json?u=3252bf638e8eb23d7ebc4af05&id=e19ac9899d&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                    beforeSubmit: function(){
                        $('#mce_tmp_error_msg').remove();
                        $('.datefield','#mc_embed_signup').each(
                            function(){
                                var txt = 'filled';
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        var bday = false;
                                        if (fields.length == 2){
                                            bday = true;
                                            fields[2] = {'value':1970};//trick birthdays into having years
                                        }
                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else {
									        if (/\[day\]/.test(fields[0].name)){
    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
									        } else {
    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
	                                        }
	                                    }
                                    });
                            });
                        $('.phonefield-us','#mc_embed_signup').each(
                            function(){
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
                                    		this.value = '';
									    } else {
									        this.value = 'filled';
	                                    }
                                    });
                            });
                        return mce_validator.form();
                    }, 
                    success: mce_success_cb
                };
      $('#mc-embedded-subscribe-form').ajaxForm(options);
      
      
    });
}
function mce_success_cb(resp){
    jQuery('#mce-success-response').hide();
   jQuery('#mce-error-response').hide();
    if (resp.result=="success"){
        jQuery('#mce-'+resp.result+'-response').show();
        jQuery('#mce-'+resp.result+'-response').html(resp.msg);
        jQuery('#mc-embedded-subscribe-form').each(function(){
            this.reset();
    	});
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                jQuery('#mce-'+resp.result+'-response').show();
                jQuery('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = jQuery(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = jQuery(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = jQuery(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = jQuery().parent(input_id).get(0);
                }
                if (f){
                    jQuery(f).append(html);
                    jQuery(input_id).focus();
                } else {
                    jQuery('#mce-'+resp.result+'-response').show();
                    jQuery('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            jQuery('#mce-'+resp.result+'-response').show();
            jQuery('#mce-'+resp.result+'-response').html(msg);
        }
    }
}

		
		</script>
	  	  <script>
jQuery.noConflict();
(function($) {
  $(function() {
 
  	$(".emailIcon").click(function() {
				$.fancybox.open('#mc-embedded-subscribe-form');
	});
	
  });
})(jQuery);
	  </script>
	  
	  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0]; 
            if(!d.getElementById(id)){js=d.createElement(s); js.id=id; 
              js.src="//platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js,fjs);}}
                (document,"script", "twitter-wjs");</script> 
  
    <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
 
  <!-- SET FACEBOOK OPEN GRAPH APP ID -->
  <meta property="fb:app_id" content="321576251186267"/>



  	
    <?php
      $base = wl_get_base_domain();
      ?>



<!-- ADD THIS JAVASCRIPT -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5139106c1fc5da6c"></script>

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
      <li class="store"><a href="hhttp://wanderlustfestival.shop.musictoday.com/" target="_blank">Store</a></li>
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

 
    <!-- BEGIN PAGE.TPL.PHP HEADER -->
    <header id="header" role="banner" class="clearfix">

      <div id="event-info">      
        <?php print $header; ?>
        <?php
	$site = sites_get_current_site();	
	if($site->purl_prefix == 'tremblant') {
	  $block = module_invoke('locale', 'block', 'view', 0);
	  print '<div class="swlang">' . $block['content'] . '</div>';
	}	
	//print $language_region; ?>
        
      </div>

      <div class="tomap">
        <a href="http://wanderlust.com/yoga-festivals" target="_blank" title="<?php print t('To map'); ?>"><img src="http://9394bc4f934eb8c957d8-2f084e1f525b6270d41d6d2c79f4c609.r93.cf1.rackcdn.com/2013-images/see-all-events-v2.png" alt="<?php print t('To map'); ?>" /></a>
      </div>
      
    </header>
    <!-- END HEADER -->
    
    <!-- BEGIN NAVIGATION -->  
    <nav id="navigation" role="navigation" class="clearfix ">
      <?php print $navigation ?>
      <?php if ($subdomain == 'syd' || $subdomain == 'mel'){
      print 
      '<div class="social-media-links">
        <a class="facebook" href="https://www.facebook.com/WanderlustFestivalAustralia?ref=hl" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'Facebook\', \'follow\',, false]);">Facebook</a>
        <a class="twitter" href="https://twitter.com/WanderlustOZ" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'Twitter\', \'follow\',, false]);">Twitter</a>
        <a class="instagram" href="http://instagram.com/wanderlustfestoz" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'Instagram\', \'follow\',, false]);">Instagram</a>
        <a class="youtube" href="http://www.youtube.com/channel/UCiMnt7chTHg8DpJZPwgr9Hg" target="_blank" onClick="_gaq.push([\'_trackEvent\', \'Social Media\', \'YouTube\', \'follow\',, false]);">YouTube</a>
        <a class="emailIcon" id="email" >Email</a>        
      </div>';
       }
   
      elseif ($subdomain == 'akl' ){
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
    <!-- END NAVIGATION -->
    
    <!-- EMAIL SIGN UP CODE -->
    <div class="email-code">
      <?php print $connect ;?>
    </div>
   

    
    <div class="body-content clearfix">
    
      <div id="main" role="main" class="clearfix">
        <?php if (!empty($messages)): print $messages; endif; ?>
        <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>
        <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title ?></h1><?php endif; ?>
        <?php if (!empty($tabs)): ?><div class="tabs-wrapper clearfix"><?php print $tabs; ?></div><?php endif; ?>
        <?php if (!empty($help)): print $help; endif; ?>
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

        
        <?php print $content; ?>
        
        <?php if (!empty($right)): ?>
        <div id="sidebar-right" role="complementary" class="sidebar clearfix">
          <?php print $right; ?>
        </div> <!-- /sidebar-right -->
        <?php endif; ?>
      </div> <!-- /#main -->
      
    </div>
      
      
      
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
       
       
       
  </div> 
  <!-- END CONTAINER -->


  <!-- BEGIN FOOTER -->
  <footer class="footer clearfix">
    <?php
     if($section_title != 'blog'){
        global $language;
        if($language->language == 'fr') {
	       print '
        <div class="copy">&copy; <?php echo date("Y"); ?> Wanderlust Festival LLC.</div>
        <div class="footer-links">' .
          l('Politique de confidentialité', 'node/4080') . ' | ' . l('Conditions d\'utilisation', 'node/4079')
       . '</div>
        <div class="site-credits">
          site web par  <a href="http://rootdownmedia.com" target="_blank">Root Down</a>
        </div>
      </footer>'; 	  
	}
	else {
	       print '
        <div class="copy">&copy; <?php echo date("Y"); ?> Wanderlust Festival LLC.</div>
        <div class="footer-links">
          <a href="/privacy-policy">Privacy Policy</a> |
          <a href="/terms-of-use">Terms of Use</a>
        </div>
        <div class="site-credits">
          Site by <a href="http://rootdownmedia.com" target="_blank">Root Down</a>
        </div>
      </footer>'; 
	}  
    }else {
        //$reasons__search = module_invoke('search', 'block', 'view', 0); 
      print '
        <ul class="footer-links">
          <li><a target="_blank" href="http://wanderlustfestival.com">wanderlustfestival.com</a></li>
          <li><a target="_blank" href="http://wanderlustfestival.com/contact-us">Contact</a></li>
          <li><a target="_blank" href="http://wanderlustfestival.com/our-mission">Our Mission</a></li>
          <li><a target="_blank" href="http://wanderlustfestival.com/privacy-policy">Privacy Policy</a></li>
          <li class="last"><a target="_blank" href="http://wanderlustfestival.com/terms-of-use">Terms of Use</a></li>
        </ul>
        <div class="site-credits">
          Site by <a href="http://rootdownmedia.com" target="_blank">Root Down</a>
      </footer>';      
    }
  ?>
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
		/*
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

		
	*/	
		
		

		
		
		
		
		
		
		
		
		
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
