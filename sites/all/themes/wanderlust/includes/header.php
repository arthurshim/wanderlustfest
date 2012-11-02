<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<!--[if IE]>
        <link rel="stylesheet" type="text/css" href="/sites/all/themes/wanderlust/styles/ie.css" />
	<![endif]-->	
	
    <?php print $head; ?>
   	<?php print $styles; ?>
  	<?php print $scripts; ?>
  	<script type="text/javascript" src="/sites/all/themes/wanderlust/JS/site_select_dropdown.js.php"></script>
  	<script type="text/javascript" src="/sites/all/themes/wanderlust/JS/jquery.backstretch.min.js"></script>
 	
 	<meta property="fb:app_id" content="146148768766980" />
  	
  <SCRIPT language="Javascript"> 
	<!-- 
	// isEmail (STRING s [, BOOLEAN emptyOK])
	// whitespace characters
	var whitespace = " \t\n\r";
	
	// 
	// Email address must be of form a@b.c ... in other words:
	// * there must be at least one character before the @
	// * there must be at least one character before and after the .
	// * the characters @ and . are both required
	function isValidEmail(s)
	{   
		if (isEmpty(s)) return false;
	   
		// is s whitespace?
		if (isWhitespace(s)) return false;
		    
		// there must be >= 1 character before @, so we
		// start looking at character position 1 
		// (i.e. second character)
		var i = 1;
		var sLength = s.length;
	
		// look for @
		while ((i < sLength) && (s.charAt(i) != "@"))
		{ i++
		}
	
		if ((i >= sLength) || (s.charAt(i) != "@")) return false;
		else i += 2;
	
		// look for .
		while ((i < sLength) && (s.charAt(i) != "."))
		{ i++
		}
	
		// there must be at least one character after the .
		if ((i >= sLength - 1) || (s.charAt(i) != ".")) return false;
		else return true;
	}
	
	// Check whether string s is empty.
	function isEmpty(s)
	{   
		return ((s == null) || (s.length == 0))
	}
	
	// Returns true if string s is empty or 
	// whitespace characters only.
	function isWhitespace(s)
	{   
		var i;
	
	    // Is s empty?
	    if (isEmpty(s)) return true;
	
	    // Search through string's characters one by one
	    // until we find a non-whitespace character.
	    // When we do, return false; if we don't, return true.
	    for (i = 0; i < s.length; i++)
	    {   
			// Check that current character isn't whitespace.
			var c = s.charAt(i);
	
			if (whitespace.indexOf(c) == -1) return false;
	    }
	    // All characters are whitespace.
	    return true;
	}
	
	function checkForm() { 
		if (!isValidEmail(document.subscribeForm.elements['Email Address'].value)) {
			document.subscribeForm.elements['Email Address'].style.backgroundColor='yellow';
			alert("Please enter a valid Email Address. (name@host.com)");
			document.subscribeForm.elements['Email Address'].focus();
			return false;
		}
	}
	//--> 
</SCRIPT>

</head>

<body class="<?php print $body_classes; ?> <?php echo $smartwater_class; ?>">
 
 	<?php if (!empty($admin)) print $admin; ?> 
 	
	<div class="wrapper">
 	  
		<div id="header" class="container-16 clearfix  <?php print $current_subdomain; ?>">
			<div id="header-left"></div>
			<div id="header-mid">
				<div id="branding" class="grid-11 clearfix alpha">
					<a class="logo" href="<?php global $base_url; print $base_url;?>">Wanderlust Festival</a>
					<div class="event-info"><?php echo $event_info; ?></div>
				</div>
				<div id="user-tools" class="grid-5">
					<?php if ($smartwater_class): ?>
				    <div class="sw-branding"></div>
					<?php endif; ?>
					<div class="secondary-links">
					  <?php if (!empty($current_site->extra_fields->field_scheduler_url[0]['url'])): ?>
						  <a class="scheduler" href="<?php echo $current_site->extra_fields->field_scheduler_url[0]['url']; ?>" target="_blank">Schedule My Classes</a>
						<?php endif; ?>
					</div>
					<div class="event-selector">
						  <div class="sites-dropdown">
							  <select id="site-selector" onchange="site_selector_change();">
							  <!-- <option class="no-site">- Select an event -</option> -->
							    <?php foreach ($sites_selector as $subdomain => $_title): ?>
							      <?php if ($subdomain == $current_subdomain) $selected = 'SELECTED ';
							         else $selected = '';
							      ?>
							      <option <?php echo $selected; ?>subdomain="<?php echo $subdomain; ?>"><?php echo $_title; ?></option>
							      <?php endforeach; ?>
							  </select>
						  </div>
					</div>
				</div>
				<div id="nav" class="container-16 clearfix">
					<?php print $navigation ?>
					<div class="home-share-links">
						<?php 
						if ($smartwater_class) 
						  echo '<a class="twitter" href="http://twitter.com/smartwater" title="Follow Smartwater on Twitter">Twitter</a><a class="facebook" href="http://facebook.com/smartwater" title="Find Smartwater on Facebook">Facebook</a><a class="contact" href="/connect/email" title="Join the email list">Connect</a>';					

            else  
  						echo '<a class="twitter" href="http://twitter.com/wanderlustfest" title="Follow us on Twitter">Twitter</a> <a class="facebook" href="http://facebook.com/wanderlust" title="Friend us on Facebook">Facebook</a><a class="contact" href="/connect/email" title="Join the email list">Connect</a>';
		
				    ?>
					</div>
				</div>
			</div>
			<div id="header-right"></div> 			
			<div id="header-bottom"></div>
		</div>

	
 	<div id="page" class="container-16 clearfix">
			
 		<div id="container" class="clearfix ">
