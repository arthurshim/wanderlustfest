// JavaScript Document
Drupal.behaviors.videos = function (context) {
$(".page-media .video-top-right a").click(function(e) {
  $('.video-top-right .views-row').removeClass('active-video');
  $(this).parent().parent().addClass('active-video');

  function videoShow (data) {
	$('div.panels-flexible-region-14-video_top_left-inside .pane-videos .pane-content').html('<div id="ytapiplayer"></div>');  
    var params = { allowScriptAccess: "always" , wmode: "opaque"};
    var atts = { id: "myytplayer" };
	var string = 'http://www.youtube.com/v/' + data.video;
	var string2 = '?enablejsapi=1&playerapiid=ytplayer&version=3';
	var string3 = string + string2;
	swfobject.embedSWF(string3,"ytapiplayer", "560", "360", "8", null, null, params, atts);
  }
  $.ajax({
    type: 'POST',
    url: this.href,
    dataType: 'json', 
    success: videoShow, 
    data: 'js=1'
    });
    return false; 	  
	  
	  
  });


}


