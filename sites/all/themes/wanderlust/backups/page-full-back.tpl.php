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
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
   <meta property="og:description" content="Wanderlust is a one-of-a-kind festival bringing together the world's leading yoga teachers, top musical acts and DJs, renowned speakers, top chefs and winemakers, and much, much more -- all in a setting of breathtaking natural beauty."/>
   <meta property="og:title" content="Wanderlust Festival 2012"/>
   <meta property="og:type" content="movie"/>
   <meta property="og:url" content="http://www.wanderlustfestival.com"/>
   <meta property="og:image" content="http://wanderlustfestival.com/wlbird.jpg"/>
   <meta property="og:site_name" content="Wanderlust"/>
   <meta property="fb:admins" content="1407657,1149492126,515565663,508316132,6911729"/>
   

  <script type="text/javascript">

function slideSwitch() {
    var $active = $('.top-slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('.top-slideshow IMG:last');

    var $next =  $active.next().length ? $active.next()
        : $('.top-slideshow IMG:first');

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});
  </script>
  
    <?php
      $base = wl_get_base_domain();
      ?>
  
</head>

<body class="<?php print $body_classes; ?> itunes">
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
  <?php print $google_marketing; ?>

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
    
      <h2>A FREE YOGA BOOK & A FREE MUSIC PLAYLIST FEAT. ARTISTS FROM WANDERLUST 2012</h2>
      
      <div class="top-slideshow">
        <img src="/sites/all/themes/wanderlust/images/yoga.jpg" class="active">
        <img src="/sites/all/themes/wanderlust/images/solo.jpg">
        <img src="/sites/all/themes/wanderlust/images/smile.jpg">
        <img src="/sites/all/themes/wanderlust/images/peeps.jpg">


      </div>
 
      <div class="itunes-section">
        <h3>Spice up your morning routine with a free book by Rodney Yee</h3>      
        
        <div class="left">
          <div class="thumb"><img src="/sites/all/themes/wanderlust/images/am-yoga.jpg"></div>
          <div class="artist-name">A.M. Yoga with Rodney Yee Daily Yoga Practice (Vol. 1)</div>
          <div class="song-name">By Gaiam</div>
          <div class="description">Want to try your hand (and back and legs and abdominals) at yoga but not sure how to begin? Let renowned fitness instructor Rodney Yee demystify and demonstrate the essentials of a morning yoga routine. From stretches and back bends to traditional poses like downward facing dog, modified cobra and the bridge pose, Yee's routine accentuates the mind-boy connection and healthful benefits of daily morning exercise.</div>
        </div>    
        
        <div class="right">
          <div class="download-box">
            <div class="download-title">Get Your Free Book Download</div>
            <div class="download-link"><a href="#"><img src="/sites/all/themes/wanderlust/images/itunes-download.gif"></a></div>
            <div class="download-code">Download Code: <strong>RERPLMJRLH47</strong></div>
            <div class="download-expiration">Code Expiration: <strong>09/30/12</strong></div>
          </div>
        </div>
        
      </div>

      <div class="itunes-section">
        <h3>GET a hand-picked MUSIC PLAYLIST featuring ZIGGY MARLEY, MC Yogi, Michael Franti, Ani Difranco and more!</h3>      
        
        <div class="left">
          <div class="col-1">
            <div class="entry clearfix">
              <div class="thumb"><img src="/sites/all/themes/wanderlust/images/barr.JPG"></div>
              <div class="artist-name">The Barr Brothers</div>
              <div class="song-name">Beggar In The Morning</div>            
            </div>
            <div class="entry clearfix">
              <div class="thumb"><img src="/sites/all/themes/wanderlust/images/ani.JPG"></div>
              <div class="artist-name">Ani DiFranco</div>
              <div class="song-name">Mariachi</div>            
            </div>
            <div class="entry clearfix">
              <div class="thumb"><img src="/sites/all/themes/wanderlust/images/beats.JPG"></div>
              <div class="artist-name">Beats Antique</div>
              <div class="song-name">Cat Skillz</div>            
            </div>
            <div class="entry clearfix">
              <div class="thumb"><img src="/sites/all/themes/wanderlust/images/drez.JPG"></div>
              <div class="artist-name">DJ Drez</div>
              <div class="song-name">Selecta Move</div>            
            </div>
            <div class="entry clearfix">
              <div class="thumb"><img src="/sites/all/themes/wanderlust/images/elephant.JPG"></div>
              <div class="artist-name">Elephant Revival</div>
              <div class="song-name">Go On</div>            
            </div>
            <div class="entry clearfix">
              <div class="thumb"><img src="/sites/all/themes/wanderlust/images/gramatik.JPG"></div>
              <div class="artist-name">Gramatik</div>
              <div class="song-name">Solidified</div>            
            </div>
            
          </div>

          <div class="col-2">
            <div class="entry clearfix">
              <div class="thumb"><img src="/sites/all/themes/wanderlust/images/krishna.JPG"></div>
              <div class="artist-name">Krishna Das</div>
              <div class="song-name">My Foolish Heart / Bhaja Govinda</div>            
            </div>
            <div class="entry clearfix">
              <div class="thumb"><img src="/sites/all/themes/wanderlust/images/mcyogi.JPG"></div>
              <div class="artist-name">MC Yogi</div>
              <div class="song-name">Give Love</div>            
            </div>
            <div class="entry clearfix">
              <div class="thumb"><img src="/sites/all/themes/wanderlust/images/quix.JPG"></div>
              <div class="artist-name">Quixotic</div>
              <div class="song-name">Origin</div>            
            </div>
            <div class="entry clearfix">
              <div class="thumb"><img src="/sites/all/themes/wanderlust/images/sphongle.JPG"></div>
              <div class="artist-name">Shpongle</div>
              <div class="song-name">Dorset Perception</div>            
            </div>
            <div class="entry clearfix">
              <div class="thumb"><img src="/sites/all/themes/wanderlust/images/todd.JPG"></div>
              <div class="artist-name">Todd Boston</div>
              <div class="song-name">Celtic Heart</div>            
            </div>
            <div class="entry clearfix">
              <div class="thumb"><img src="/sites/all/themes/wanderlust/images/sacred.JPG"></div>
              <div class="artist-name">Youssoupha Sidibe</div>
              <div class="song-name">Mystic</div>            
            </div>
          
          </div>
          
        </div>    
        
        <div class="right">
          <div class="download-box">
            <div class="download-title">Get Your Free Book Download</div>
            <div class="download-link"><a href="#"><img src="/sites/all/themes/wanderlust/images/itunes-download.gif"></a></div>
            <div class="download-code">Download Code: <strong>RERPLMJRLH47</strong></div>
            <div class="download-expiration">Code Expiration: <strong>09/30/12</strong></div>
          </div>
          <div class="itunes-instructions">

            <strong>If you don’t have iTunes installed:</strong>
            <ol>
              <li>Download iTunes from Mac or Windows, free of charge at <a href="http://itunes.com">www.itunes.com</a></li>
              <li>Open iTunes and click iTunes Store</li>
              <li>Click Redeem</li>
              <li>Enter the code from above. Your download will start immediately. Enjoy</li>  
            </ol>
          </div>          
          <div class="itunes-legal">
            The code expires on the date below and is redeemable only on the U.S. iTunes Store. To redeem the code you must have an iTunes account, subject to prior acceptance of license and usage terms. To open an account you must be above the age of 13 and in the U.S. iTunes 9.0 or later, compatible hardware and software, and Internet access (fees may apply) are required. Not for resale. For full terms, see <a href="www.apple.com/legal/itunes/us/gifts.html">www.apple.com/legal/itunes/us/gifts.html</a>. For more information, see <a href="www.apple.com/support/itunes/store">www.apple.com/support/itunes/store</a>. Don’t steal music. TM and © 2012 Apple Inc. All rights reserved. Apple is not a participant or sponsor of this promotion.
          </div>          
        </div>      
      </div>

      
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
        <div class="footer-message-content"><?php print $footer_message; ?></div>
      </div>
    </footer> <!-- /#footer -->

    <?php print $closure ?>

  </div> <!-- /#container -->

</body>
</html>