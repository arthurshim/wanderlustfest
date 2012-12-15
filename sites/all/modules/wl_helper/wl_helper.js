$(document).ready(function(){
  /*
$("#navigation a").each(function(){
   $(this).attr({ target: "_blank" });
   });
} );
  */

  
$(".mark").hover(function(){

   $(this).find('div.innersite').fadeIn();
},function(){
   $(this).find('div.innersite').hide();
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

