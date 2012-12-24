$(document).ready(function(){

/*add class with touch function for mobile
  $("div.mark.studio").bind('touchstart mousedown', function(e){
	    $("div[class^='.mark']").stop(true, true);

	   $("div.mark.studio").toggleClass("highlightMobile1");
        });
*/

  /*
$("#navigation a").each(function(){
   $(this).attr({ target: "_blank" });
   });
} );
  */
if (!$(this).hasClass("test")) {
 
$(".mark:not(.legendNo)").hover(function(){

   $(this).find('div.innersite').fadeIn();
   if ($(this).hasClass("festival")) {
     /*$('div.mark.festival.legendNo').addClass('highlight');  */ 
   }
   else if($(this).hasClass('yoga')) {
     /* $('div.mark.yoga.legendNo').addClass('highlight');*/   
   }
   else if($(this).hasClass('studio')){
     /* $('#div.mark.studio.legendNo').addClass('highlight'); */  
   }
   
},function(){
   $(this).find('div.innersite').hide();
   $('div.mark.festival.legendNo, div.mark.studio.legendNo, div.mark.yoga.legendNo').removeClass('highlight');     
});
}


/*hover legend*/
   $("#legend1 .mark").hover(function() {
   $(".mark.festival").addClass('highlight1');
   },
   function(){
   $('#.mark.festival').removeClass('highlight1'); 
   });
   
      
   $("#legend2 .mark").hover(function() {
   $(".mark.yoga").addClass('highlight1');
   },
   function(){
   $('#.mark.yoga').removeClass('highlight1'); 
   });
   
      
 /*for star only*/

   $("div.mark.studio").hover(function() {
   $(".mark.studio").addClass('highlight2');
   },
   function(){
   $('#.mark.studio').removeClass('highlight2'); 
   });







    
    
    
  
  $('body').append('<div id="ted_photo_hover"></div>');
    $('#ted_photo_hover').css({position: 'absolute'});

    $('#ted_photo_hover').offset({top: 500, left: 500});
  $('.ted_photo').hover(
  function(e){
    var name      = $(this).children('.ted_photo_data').html();
    var answer    = $(this).children('a').children('img').attr('title');
    var eventName = $(this).children('a').children('img').attr('alt');

    var hoverText = "";
    hoverText    += "Name: " + name + '<br>\r\n'; 
    hoverText    += "Event: " + eventName + '<br>\r\n'; 
    hoverText    += '"' + answer + '"'; 
  //    $('#ted_photo_hover').show();
    $('#ted_photo_hover').html(hoverText);
    $('#ted_photo_hover').css({top: e.pageY, left: e.pageX});
      divoff = $('#ted_photo_hover').offset();
  //    alert(e.pageX +' '+ e.pageY);
  //    $(this).children('a').children('img').attr('title', hoverText);
  //    $(this).children('img').attr('title', hoverText);
    //        $('#ted_photo_hover').css({'left': e.pageX + 'px', 'bottom': e.pageY + 'px', 'position': 'absolute'});
  },
  function(e){
  //    $('#ted_photo_hover').hide();
  });
  
  
  
});



