<?php

/**
 * Helper to implementation of hook_default_box().
 */
function _fillmore_default_box() {
  $export = array();
  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'fillmore_sched';
  $box->title = 'The Schedule';
  $box->description = 'Schedule';
  $box->body = '<table border="0"><tbody><tr><td>4:00</td><td>Doors Open for Daytime Program</td></tr><tr><td>4:30 - 5:00</td><td>Warm-up class with Janet Stone &amp; Schuyler Grant</td></tr><tr><td>5:00 - 6:30</td><td>Prana Flow Class w/ Shiva Rea &amp; DJ Dragonfly</td></tr><tr><td>6:30 - 6:50</td><td>Yogatrancedance &nbsp;w/ Shiva Rea, DJ Dragonfly &amp; FlowToys</td></tr><tr><td>7:00&nbsp;</td><td>Doors Open for Concert Event&nbsp;</td></tr><tr><td>7:30 - 7:50</td><td>Beatbox-Juggler Bronkar Lee &nbsp; &nbsp;</td></tr><tr><td>8:00 - 8:40</td><td>MC Yogi&nbsp;</td></tr><tr><td>8:45 - 9:00</td><td>Shakti Sunfire’s Hooping Expo</td></tr><tr><td>9:10 - 10:00</td><td>Rupa &amp; the April Fishes</td></tr></tbody></table>';
  $box->format = 1;

  $export['fillmore_sched'] = $box;
  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'fillmore_tickets';
  $box->title = 'TICKETS & LINEUP';
  $box->description = 'The Lineup';
  $box->body = '<p>&nbsp;</p><p class="heading1" style="text-align: center;">TICKETS</p><p style="text-align: center;"><strong style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;"><span style="font-size: large;">$55 Yoga + Music</span></strong></p><p style="text-align: center;"><em style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;">includes yoga program, night concert &amp; Gaiam gift bag&nbsp;</em></p><p style="text-align: center;"><em style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;">....</em></p><p style="text-align: center;"><strong style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;"><span style="font-size: large;">$25 Music only&nbsp;</span></strong></p><p style="text-align: center;"><em style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;">includes night concert</em></p><p class="buy-now-fillmore" style="text-align: center;"><a href="http://www.livenation.com/edp/eventId/419189 ">Buy Now</a></p><p style="text-align: center;">..............................................................................</p> <table style="width: 100%; text-align: center;" border="0"><tbody><tr><td><span style="border-collapse: separate;">YOGA BY:<p>&nbsp;</p><p class="heading7" style="margin-top: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; border: 0px initial initial;">Shiva Rea</p></span></td></tr><tr><td><span style="border-collapse: separate; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;"><p class="heading7" style="margin-top: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; border: 0px initial initial;">Janet Stone &amp; Schuyler Grant</p></span></td></tr><tr><td><span style="border-collapse: separate; font-size: 13px;"><p class=" music-title allcaps" style="margin-top: 0px; margin-right: 0px; margin-left: 0px; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: center; padding: 0px;">MUSIC BY:</p><p class="heading7" style="margin-top: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; border: 0px initial initial;">Rupa &amp; The April Fishes</p></span></td></tr><tr><td><span style="border-collapse: separate; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;"><p class="heading7" style="margin-top: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; background-position: initial initial; padding: 0px; border: 0px initial initial;">MC Yogi / DJ Dragonfly / shakti sunfire</p></span></td></tr><tr><td class="heading7">&nbsp;Bronkar Lee / Flowtoys / anthony ward</td></tr></tbody></table>';
  $box->format = 5;

  $export['fillmore_tickets'] = $box;
  return $export;
}

/**
 * Helper to implementation of hook_ctools_plugin_api().
 */
function _fillmore_ctools_plugin_api() {
  $args = func_get_args();
  $module = array_shift($args);
  $api = array_shift($args);
  if ($module == "boxes" && $api == "box") {
    return array("version" => 1);
  }
}
