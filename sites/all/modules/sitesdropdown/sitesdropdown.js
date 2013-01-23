Drupal.behaviors.dropdown = function(context) {
			  				$(window).resize(function() {
setTimeout(function(){$(".body-content-photos .fancybox-inner").css( {'height': '360', 'width': '570'})},300);
});            
 
  $('.view-Photos.view-display-id-page_1 li.views-row').click(function() {
     $(this).find('a').addClass('fancybox-thumbs');
                var tt =  $(this).find('.aal');
                var curr_val = $(this).find('.hnid').text();
                var new_val = parseInt(curr_val);

            $.ajax({
                url: '/getimages/' + new_val,
                type: 'GET',
                beforeSend: function () {
                  //  $(".aal").prepend('<p class="loading-text">Loading details...</p>');
                },
                success: function (data) {
                     tt.replaceWith(data);
                      
                },
                complete: function () {
     
                }
                
            });
            
            
     $.fancybox.showLoading();
     
  setTimeout(
function() {
  $.fancybox.hideLoading();
  $(this).find('a').addClass('fancybox-thumbs');
  
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
		      },
		    title : {
			type : 'float'
		    }   
		      
	      }
      });   

     $('.view-Photos.view-display-id-page_1 li.views-row').find('a.fir:first').click();
     $('.view-Photos.view-display-id-page_1 li.views-row').find('a.fir:first').removeClass("fir");

},
3000
);


  });                           
                   
                           
                           
 //********                          
   $(".view-Photos.view-display-id-page_1 li.views-row").hover(
      function () {
    
    // $(this).find('a').addClass('fancybox-thumbs');
	
      },
      function () {
        $(this).find('a').removeClass("fancybox-thumbs");
      }
    );
   
 /*videos*/
 
   $('.view-videos.view-display-id-page_1 li.views-row').click(function() {
     $("#ajaxvid").replaceWith('<div class="aal"></div>');
                var tt =  $(this).find('.aal');
                var curr_val = $(this).find('.hnid').text();
                var new_val = parseInt(curr_val);

            $.ajax({
                url: '/getvideo/' + new_val,
                type: 'GET',
                beforeSend: function () {
                  //  $(".aal").prepend('<p class="loading-text">Loading details...</p>');
                },
                success: function (data) {
                     tt.replaceWith(data);
                      
                },
                complete: function () {
     
                }
                
            });
            
     $.fancybox.showLoading();          
    setTimeout(
    function() {
      $.fancybox.hideLoading();
      $.fancybox.open('#ajaxvid');
      $(".fancybox-inner").css("overflow", "hidden");
      setTimeout(function(){$(".fancybox-skin").css("width", "580")},300);
      setTimeout(function(){$(".fancybox-inner").css( {'height': '360', 'width': '580'})},300);	
    },
    2500
    );
});    
   
   
   
   
    $(".view-videos.view-display-id-page_1 li.views-row").hover(
      function () {
  
      $(this).find('a').addClass('fancybox-thumbs');
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
		      },
		    title : {
			type : 'float'
		    }   
		      
	      }
      });   
      //   $(this).find('a').addClass('fancybox-thumbs');

	
      },
      function () {
        $(this).find('a').removeClass("fancybox-thumbs");
      }
    );
      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */
   
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
