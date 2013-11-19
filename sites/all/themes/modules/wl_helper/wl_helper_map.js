Drupal.behaviors.map = function(context){
	var str = window.location.href;    
	newVar = str.split('/');
	newVar2  = newVar[2];

	var favorite = $.cookie('mysite');
	  if (favorite != null) {
		 $(location).attr('href', 'http://' + favorite + '.' +newVar2);
		 
	}
	
};
