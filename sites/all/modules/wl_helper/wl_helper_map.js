Drupal.behaviors.map = function(context){
	
	var favorite = $.cookie('mysite');
	  if (favorite != null) {
		 $(location).attr('href', 'http://' + favorite + '.wanderfest.com');
		 
	}
	
};
