$(document).ready(function() {


// Google Analytics Cross Domain Tracking Code
// Add onClick _link to all <a> elements on page where href contains frontgatetickets.com

$("a[href*='frontgatetickets.com']").click(function() {
  $(this).attr('target','_blank');
  _gaq.push(['_link', this.href]);
  return false;

});


});