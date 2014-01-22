$(document).ready(function() {

/* OLD CODE
// Google Analytics Cross Domain Tracking Code
// Add onClick _link to all <a> elements on page where href contains frontgatetickets.com

$("a[href*='frontgatetickets.com']").click(function() {
  $(this).attr('target','_blank');
  _gaq.push(['_link', this.href]);
  return false;

});

*/


 // Google Analytics Cross Domain Tracking - Dynamically add GA code to outbound links

  $("a[href*='wanderlust.com']").click(function () {
    var pageTracker = _gat._getTrackerByName();
    this.href = pageTracker._getLinkerUrl( this.href );
  });

  $("a[href*='welcu.com']").click(function () {
    var pageTracker = _gat._getTrackerByName();
    this.href = pageTracker._getLinkerUrl( this.href );
  });

  $("a[href*='frontgatetickets.com']").click(function () {
    var pageTracker = _gat._getTrackerByName();
    this.href = pageTracker._getLinkerUrl( this.href );
  });


  $("a[href*='sched.org']").click(function () {
    var pageTracker = _gat._getTrackerByName();
    this.href = pageTracker._getLinkerUrl( this.href );
  });
  



});