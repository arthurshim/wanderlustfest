Drupal.behaviors.dropdown = function(context) {
			 /* 				$(window).resize(function() {
setTimeout(function(){$(".body-content-photos .fancybox-inner").css( {'height': '360', 'width': '570'})},300);
});          */  
    var $jq = jQuery.noConflict();
 $jq('.view-Photos.view-display-id-page_1 li.views-row').click(function() {
 
     $jq(this).find('a').addClass('fancybox-thumbs');
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
                       
  $jq.fancybox.showLoading();
  setTimeout(
function() {
  $jq.fancybox.hideLoading();
  $jq(this).find('a').addClass('fancybox-thumbs');
  
          $jq('.fancybox-thumbs').fancybox({     
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

     $jq('.view-Photos.view-display-id-page_1 li.views-row').find('a.fir:first').click();
     $jq('.view-Photos.view-display-id-page_1 li.views-row').find('a.fir:first').removeClass("fir");

},
3000
);

 });                           
                   
                           
                           
 //********                          
   $jq(".view-Photos.view-display-id-page_1 li.views-row").hover(
      function () {
    $jq(this).find('.bo').replaceWith('<div class="bo"><div class="aal"></div></div>');
    // $(this).find('a').addClass('fancybox-thumbs');
	
      },
      function () {
        $jq(this).find('a').removeClass("fancybox-thumbs");
      }
    );
   
 /*videos*/
 
   $jq('.view-videos.view-display-id-page_1 li.views-roww').click(function() {
          
   //  $(this).find('a').addClass("f");                                               
$jq('.fancybox-media, .views-field-title').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});                                              
    //$(this).find('a.fancybox-media').click();
    
   // setTimeout(function(){$(this).find('.aal').show()},300);	                                                    
                                                 
     //       $(this).find('a.f').removeClass("f");                                                
    /* $("#ajaxvid").replaceWith('<div class="aal"></div>');
                var tt =  $(this).find('.aal');
                var curr_val = $(this).find('.hnid').text();
                var new_val = parseInt(curr_val);

            $.ajax({
                url: '/getvideo/' + new_val,
                type: 'GET',
                beforeSend: function () {
                
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
    */
});    
 
$jq('.panels-flexible-region .content').click(function() {
  
                                           
$jq('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});                                              

});      
   
   
  /* 
    $jq(".view-videos.view-display-id-page_1 li.views-roww").hover(
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
      },
      function () {
        $(this).find('a').removeClass("fancybox-thumbs");
      }
    );

   
}*/

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
  var $jq = jQuery.noConflict();

  $jq("#views_slideshow_singleframe_teaser_section_Homepage_slider-block_1 .views_slideshow_singleframe_slide div.views-row div.views-field-field-image-fid-1 span.field-content").each(function() {
   var copy = $("a", (this)).html();
   if($("a", (this)).attr("href") == "" || !$("a", (this)).attr('href')) {
     $("a", (this)).remove();
     $(this).html(copy);
   }
	  
  });
  
  
 
  
      
});
}