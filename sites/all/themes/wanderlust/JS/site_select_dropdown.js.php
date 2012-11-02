<?php require_once '../../../modules/wl_helper/wl_helper.base_domain.inc'; ?>

var _last_selected_site = '';
var site_selector_change = function() {
  var subdomain = $('#site-selector option:selected').attr('subdomain');
  if (!$('#site-selector option:selected').hasClass('no-site') && subdomain != _last_selected_site) {
    window.location.replace('http://' + subdomain + '.<?php echo wl_get_base_domain(); ?>');
  }
};

Drupal.behaviors.siteSelectDropdown = function() {
  _last_selected_site = $('#site-selector option:selected').attr('subdomain');
  $("#site-selector").msDropDown();
}