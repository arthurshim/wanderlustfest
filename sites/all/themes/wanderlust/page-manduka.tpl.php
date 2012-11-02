 <?php
include('./sites/all/themes/wanderlust/includes/header.php');
?>

	<?php if ($left): ?>
	<div id="sidebar-left" class="column sidebar region grid-5">
	<?php print $left; ?>
	</div>
	<?php endif; ?>

    <div id="main" class="column grid-11 full  ">
		<div class="header-12"></div>
      <div id="main-content" class="region clear-block body-11">
       <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      	<?php endif; ?>
      	<div class="content-container">
        <?php if ($tabs): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      	<?php endif; ?>
      	<?php print $messages; ?>
      	<?php print $help; ?> 
         <?php print $content; ?>
 		<p class="legal">
			No purchase necessary to enter contest. US residents only. One entry per person. Entries must be received by 11:59pm CDT on 6/21/10. Winner notified by email  prior to 6/23/10. (1) Grand prize consisting of 2 "Seeker" tickets to  Wanderlust. Approximate retail value: $750. (5) Runners-up prize consisting of 1 Wanderlust eKO Lite Mat. Approximate retail value is $42. Online entries only. All entrants consent to receiving occasional marketing emails from Wanderlust Festival, LLC and Manduka.  Entrants may unsubscribe at any time.  Odds estimated at 1:1000. Wanderlust Festival is held at Squaw Valley USA in Olympic Valley, CA. If festival is delayed, postponed or cancelled for  any reason, winner will not be reimbursed for tickets, but tickets are subject to standard rain check policies and procedures established by  issuer. Coupons are not redeemable or exchangeable for cash and are  subject to all terms and conditions of use as established by issuer.  Prizes consist of only the items specifically listed as the prize.  Sponsor reserves the right to substitute a prize of equal or greater value. Contest authorized by Wanderlust Festival LLC, 26 Dobbin St., 3rd Floor, New York, NY 11222. Questions? Email  info@wanderlustfestival.com. 		</p>
		</div>
      </div>
		<div class="footer-11"></div>

      <?php print $feed_icons; ?>
    </div>
 


<?php
include('./sites/all/themes/wanderlust/includes/footer.php');
?>