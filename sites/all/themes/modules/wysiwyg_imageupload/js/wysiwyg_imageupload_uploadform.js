// $Id:$
// Copyright (c) 2010 KontextWork GbR
// Author: Eugen Mayer
Drupal.behaviors.wysiwyg_imageupload_uploadform = function () {
  var $jq = jQuery.noConflict();
  $jq('#edit-wysiwyg-imageupload-file').bind('change', function() {
      $jq('.dialog-page-content *').hide();
      $jq('.dialog-page-content').addClass('uploading');
      $jq('form').submit();
    }
  );
}
