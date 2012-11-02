// $Id: cufon-drupal.js,v 1.1 2009/07/13 21:41:46 eads Exp $

// Initialize Cufon based on Drupal settings
<<<<<<< HEAD
Drupal.behaviors.cufonReplace = function(context) {
  for (o in Drupal.settings.cufonSelectors) { 
    var s = Drupal.settings.cufonSelectors[o];
    $(s.selector + ':not(.cufon-replace-processed)', context).addClass('cufon-replace-processed').each(function() {
      Cufon.replace($(this), s.options);
    });
  }
 
  // Work around Internet Explorer rendering delay
  Cufon.now();
};

// Set a drupal behavior so that content added later can be replaced
Drupal.behaviors.cufon = function (context) {
  // Check to see if the first_run flag has been initialized
  if ( typeof Drupal.behaviors.cufon.first_run == 'undefined' ) {
      Drupal.behaviors.cufon.first_run = true;
  }
 
  // If not the first run, replace the new content.
  if (!Drupal.behaviors.cufon.first_run) {
    for (o in Drupal.settings.cufonSelectors) {
      s = Drupal.settings.cufonSelectors[o];
      Cufon.replace($(s.selector, context), s.options)
    }
  }
 
  Drupal.behaviors.cufon.first_run = false;
}
=======
for (o in Drupal.settings.cufonSelectors) { 
  s = Drupal.settings.cufonSelectors[o];
  Cufon.replace(s.selector, s.options)
}

// Work around Internet Explorer rendering delay
Cufon.now();
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
