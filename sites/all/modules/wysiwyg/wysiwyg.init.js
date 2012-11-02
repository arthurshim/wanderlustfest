<<<<<<< HEAD

jQuery.support = jQuery.support || {}; // D6- only.
=======
// $Id: wysiwyg.init.js,v 1.3 2009/02/01 09:20:48 sun Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

Drupal.wysiwyg = Drupal.wysiwyg || { 'instances': {} };

Drupal.wysiwyg.editor = Drupal.wysiwyg.editor || { 'init': {}, 'attach': {}, 'detach': {}, 'instance': {} };

Drupal.wysiwyg.plugins = Drupal.wysiwyg.plugins || {};

<<<<<<< HEAD
(function ($) {
  // Determine support for queryCommandEnabled().
  // An exception should be thrown for non-existing commands.
  // Safari and Chrome (WebKit based) return -1 instead.
  try {
    document.queryCommandEnabled('__wysiwygTestCommand');
    $.support.queryCommandEnabled = false;
  }
  catch (error) {
    $.support.queryCommandEnabled = true;
  }
})(jQuery);
=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
