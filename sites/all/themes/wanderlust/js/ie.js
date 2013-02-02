$(document).ready(function() {

  // ADD HTML5 TAGS FOR IE7
  document.createElement('header');
  document.createElement('hgroup');
  document.createElement('nav');
  document.createElement('menu');
  document.createElement('section');
  document.createElement('article');
  document.createElement('aside');
  document.createElement('footer');

  // FALLBACK MARKER ANIMATION FOR IE
  if (!Modernizr.csstransitions) { // Test if CSS transitions are supported
      $(function () {
          $(".mark,.site-marker").hover(function () {
              if ($(this).data("bouncing") == false || $(this).data("bouncing") == undefined) {
                  $(this).effect("bounce", {
                      direction: 'up',
                      distance: 10,
                      times: 1
                  });
                  $(this).data("bouncing", true);
              }
          }, function () {
              $(this).data("bouncing", false);
          });
  
      });
  }
	
});