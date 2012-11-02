<?php

/**
 * Helper to implementation of hook_default_box().
 */
function _wl_home_blocks_default_box() {
  $export = array();
  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'lineup';
  $box->title = '';
  $box->description = 'Lineup';
  $box->body = '<table class="talent-block" style="width: 100%;" border="0"><tbody><tr><td width="65"><img class="mceItem" src="/sites/all/themes/wanderlust/images/grafix/flag_yoga.gif" alt="" width="58" height="19">&nbsp;</td><td><ul><li class="heading4">BARON BAPTISTE</li><li class="star"><img class="mceItem" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading4">SEANE CORN</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading4">SHIVA REA</li></ul><ul><li class="heading5">DUNCAN WONG</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading5">ELENA BROWER</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading5">SCHUYLER GRANT</li></ul><ul><li class="heading5">DOUG SWENSON</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading5">JASON &amp; JENNY</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading5">JANET STONE</li><li class="heading5">LES LEVENTHAL</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading5">RUSTY WELLS</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading5">AND MANY MORE</li></ul><div class="view-full"><a href="/music">View Full Lineup</a></div></td></tr><tr><td><img class="mceItem" src="/sites/all/themes/wanderlust/images/grafix/falg_music.gif" alt=""><img class="mceItem" src="/sites/all/themes/wanderlust/images/grafix/flag_music.gif" alt="" width="58" height="19"></td><td><ul><li class="heading4">MOBY</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading4">BASSNECTAR</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading4">BRAZILIAN GIRLS</li></ul><ul><li class="heading5">PRETTY LIGHTS</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading5">BRAZILIAN GIRLS</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading5">BEATS ANTIQUE</li><li class="heading5">YARD DOGS ROAD SHOW</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading5">ORGONE</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading5">DAVE STRINGER</li><li class="heading5">CHEBB I SABBAH</li><li class="star"><img class="mceItem" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 11px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" src="/sites/all/themes/wanderlust/images/grafix/star_sm.gif" alt=""></li><li class="heading5">AND MANY MORE</li></ul><div class="view-full"><a href="/music">View Full Lineup</a></div></td></tr></tbody></table>';
  $box->format = 1;

  $export['lineup'] = $box;
  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'mailinglist';
  $box->title = '';
  $box->description = 'Mailing List & Social Media';
  $box->body = '	<div id="mailing-list" class="">
  
  <img src="/sites/all/themes/wanderlust/images/grafix/stayinloop.gif" class="intheloop"/>
   					<form id="email-signup" action="http://cl.exct.net/subscribe.aspx?lid=16258857" name="subscribeForm" method="post" onSubmit="return checkForm();"> 
  						<input type=hidden name="thx" value="<?php global $base_url; print $base_url;?>/email/thankyou"> 
  						<input type=hidden name="err" value="<?php global $base_url; print $base_url;?>/email/error">  
  						<input type=hidden name="usub" value="<?php global $base_url; print $base_url;?>/email/unsubscribe"> 
  						<input type=hidden name="MID" value="119246">
  						<label for="email" class="structural">Enter email addy</label>
  						<input type="text" id="email" name="Email Address" class="populate"    title="Enter email address" >
  						<input type="hidden" name="SubAction" value="sub_add_update" checked> 
  						<input  id="join" type="image" value="Submit" src="/sites/all/themes/wanderlust/images/grafix/signup.png" >
  					</form>
   			
  					<div id="social-icons">
  <a href="http://www.twitter.com/wanderlustfest" target="_blank"><img src="/sites/all/themes/wanderlust/images/grafix/twitter.png" /></a>
  <a href="http://www.facebook.com/wanderlust" target="_blank"><img src="/sites/all/themes/wanderlust/images/grafix/facebook.png" /></a>
  <a href="http://www.myspace.com/wanderlustfestival" target="_blank"><img src="/sites/all/themes/wanderlust/images/grafix/myspace.png" /></a>
  			
  		</div>				
  				</div>
  ';
  $box->format = 2;

  $export['mailinglist'] = $box;
  return $export;
}

/**
 * Helper to implementation of hook_ctools_plugin_api().
 */
function _wl_home_blocks_ctools_plugin_api() {
  $args = func_get_args();
  $module = array_shift($args);
  $api = array_shift($args);
  if ($module == "boxes" && $api == "box") {
    return array("version" => 1);
  }
}
