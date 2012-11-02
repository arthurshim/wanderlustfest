Drupal.behaviors.videos_search_clear_field = function() {
  $('.clearField:not(.clearfield-processed)').addClass('clearfield-processed').clearField();
};
