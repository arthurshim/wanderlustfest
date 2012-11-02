<<<<<<< HEAD
// $Id: date_popup.js,v 1.1.2.4 2010/11/20 12:03:36 karens Exp $
=======
// $Id: date_popup.js,v 1.1.2.3 2009/01/12 17:23:25 karens Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * Attaches the calendar behavior to all required fields
 */
Drupal.behaviors.date_popup = function (context) {
  for (var id in Drupal.settings.datePopup) {
    $('#'+ id).bind('focus', Drupal.settings.datePopup[id], function(e) {
      if (!$(this).hasClass('date-popup-init')) {
        var datePopup = e.data;
        // Explicitely filter the methods we accept.
        switch (datePopup.func) {
          case 'datepicker':
            $(this)
              .datepicker(datePopup.settings)
              .addClass('date-popup-init')
<<<<<<< HEAD
            $(this).click(function(){
              $(this).focus();
            });
=======
              .focus();
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
            break;

          case 'timeEntry':
            $(this)
              .timeEntry(datePopup.settings)
              .addClass('date-popup-init')
<<<<<<< HEAD
            $(this).click(function(){
              $(this).focus();
            });
=======
              .focus();
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
            break;
        }
      }
    });
  }
};
