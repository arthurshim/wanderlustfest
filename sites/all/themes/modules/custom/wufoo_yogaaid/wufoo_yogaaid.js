Drupal.behaviors.wufoo_redirect = function(context) {
  Drupal.settings['wufoo_yogaaid'] = setInterval("wufoo_checker()", 5000);
  //alert(Drupal.settings.wufoo_yogaaid['entityId']);
//  console.log(Drupal.settings);
};

function wufoo_checker(){
  var url = "//" + document.domain + "/sites/all/modules/custom/wufoo_yogaaid/webredirect2.php";
  url += "?entityId=" + window.get_entity_id();
//  alert(url + " " +Drupal.settings['wufoo_yogaaid']);
  $.getJSON(url, function(data)  {
    if (data.Status == 'Error') {
      var msg = data.Message;
      if (data.URL != undefined && data.URL.length > 0) {
        msg += '<br/>' + data.URL;
      }
      $('#yogaaid-message').html(msg);
      $('.yoga-loader').hide();
      clearInterval(Drupal.settings['wufoo_yogaaid']);
    }else if(data.Status == 'OK') {
      window.location.href = data.URL;
    }
  });
}
