// JavaScript Document
$(document).ready(function() {
	
	$('div.email-signup form').submit(function(e) {
 /*
  var email = $('div.email-signup input.email-input').val();
		// validate and process form
 var dataString = 'MID=119246&Email Type=HTML&Email Address='+ email + '&lid=17649743&SubAction=sub_add_update';
 //alert (dataString);return false;
		
		$.ajax({
      type: 'POST',
      url: 'http://cl.exct.net/subscribe.aspx',
      data: dataString,
      success: function() {
        window.location('/email/thankyou');
      }
     });
    return false;*/
	return false;
	
	});
//Hide menu intially

// COOKIES
    // Left column state
    var slideshow = $.cookie('slideshow');
    // Set the user's selection for the left column
    if (slideshow == 'collapsed') {
        $('.view-homepage-carousel .view-content').css("display","none");
        $('.view-homepage-carousel #open-button').css("display","block");
		$('.view-homepage-carousel #close-button').css("display","none");
	    $('.slides').css("height","25px");
		$('.slides').css("background-color","transparent");
     }
	 else {
		$('.view-homepage-carousel #open-button').css("display", "none"); 
	 }
	 
    // When the collapse button is clicked:
    $('.view-homepage-carousel #close-button a').click(function() {
        $('.view-homepage-carousel .view-content').hide('slow');
        $('.view-homepage-carousel #open-button').css("display","block");
		$('.view-homepage-carousel #close-button').css("display","none");
		$('.slides').css("height","25px");
		$('.slides').css("background-color","transparent");
        $.cookie('slideshow', 'collapsed');
    });
    // When the expand button is clicked:
    $('.view-homepage-carousel #open-button a').click(function() {
        $('.view-homepage-carousel #open-button').css("display","none");
		$('.view-homepage-carousel #close-button').css("display","block");
	    $('.slides').css("height","216px");
		$('.slides').css("background-color","#FDFCEC");
        $('.view-homepage-carousel .view-content').show('slow');
		
        $.cookie('slideshow', 'expanded');
    });

 $('td.dropdown-column').hover(function() {
   // var nextSibling = $(this).first().next();
    $(this).css('background-color','#FFF7EC');
	$(this).css('color','#000000');
    $('.dropdown-column', (this)).css('top', '24px');
   $('.dropdown-column', (this)).show();
   $('span', (this)).addClass('active');
},
function() {
	$(this).removeAttr('style');
    $('.dropdown-column', (this)).hide();
	$('.dropdown-column', (this)).css('top', '25px');
    $('span', (this)).removeClass('active'); 
}
);
});