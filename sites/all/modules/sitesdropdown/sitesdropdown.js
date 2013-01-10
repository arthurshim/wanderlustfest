Drupal.behaviors.dropdown = function(context) {
   $(".view-Photos.view-display-id-page_1 li.views-row").hover(
      function () {
        $(this).find('a').addClass('fancybox-thumbs');
	
      },
      function () {
        $(this).find('a').removeClass("fancybox-thumbs");
      }
    );
      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */
      $('.fancybox-thumbs').fancybox({
	      prevEffect : 'none',
	      nextEffect : 'none',

	      closeBtn  : true,
	      arrows    : true,
	      nextClick : true,

	      helpers : {
		      thumbs : {
			      width  : 50,
			      height : 50
		      }
	      }
      });
}

function onYouTubePlayerReady(playerId) { 
  $('div.emfield-emvideo object').each(function() {
    playerId = $(this).attr('id');
  
    if (this.addEventListener) {
      // The second command needs to be a string in order to successfully pass the correct playerId to supporting function.
      // Syntax errors in the string are hard to debug so build it up slowly.
      this.addEventListener('onStateChange', '(function(state) { return stopCycle(state, "' + playerId + '"); })');
    }
    else {
      // Per addEventListener.
      this.attachEvent('onStateChange', '(function(state) { return stopCycle(state, "' + playerId + '"); })');
    }
  });
}

/**
 * Stop the animation of any parent jquery cycle plugin of a youtube video that is being played.
 *
 * state
 *   What is happening with the player. We want '3' which is video starting.
 * playerId
 *   The id of the video player's flash object.
 */
function stopCycle(state, playerId) {
  // Stop the jquery cycle if a video is being played.
  if (state == 3) {
	  $('#views_slideshow_singleframe_teaser_section_Homepage_slider-block_1').cycle('stop');
  }
  else if(state == 0) {
	  $('#views_slideshow_singleframe_teaser_section_Homepage_slider-block_1').cycle('toggle');
	  location.reload();
  }
}

$(document).ready(function() {
  $("#views_slideshow_singleframe_teaser_section_Homepage_slider-block_1 .views_slideshow_singleframe_slide div.views-row div.views-field-field-image-fid-1 span.field-content").each(function() {
   var copy = $("a", (this)).html();
   if($("a", (this)).attr("href") == "" || !$("a", (this)).attr('href')) {
     $("a", (this)).remove();
     $(this).html(copy);
   }
	  
  });
  
  
 
  
      
});
