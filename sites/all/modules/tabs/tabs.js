<<<<<<< HEAD
// $Id: tabs.js,v 1.12 2010/01/18 08:11:21 nedjo Exp $

Drupal.tabs = Drupal.tabs || {};

Drupal.behaviors.tabs = function (context) {
  // Set the active class to the first tab with an form error.
  $('.drupal-tabs').children('ul > li').each( function() {
    if ($($(this).find('a').attr('href')).find('div.form-item .error:first').size()) {
      $(this).addClass('error').addClass('ui-tabs-selected');
=======
// $Id: tabs.js,v 1.6 2009/08/19 15:02:23 nedjo Exp $

Drupal.behaviors.tabs = function (context) {
  // Set the active class to the first tab with an form error.
  $('.drupal-tabs ul').children('li').each( function() {
    if ($($(this).find('a').attr('href')).find('div.form-item .error:first').size()) {
      $(this).addClass('error').addClass('active');
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    }
  });

  var fx = {duration: Drupal.settings.tabs.speed};
  if (Drupal.settings.tabs.fade) {
    fx.opacity = 'toggle';
  }
  if (Drupal.settings.tabs.slide) {
    fx.height = 'toggle';
  }
  // Process custom tabs.
  var selected = null;
  $('.drupal-tabs:not(.tabs-processed)', context)
<<<<<<< HEAD
    .find('> ul')
    .tabs({
      spinner: Drupal.t('Loading...'),
      // Add the 'active' class when showing tabs and remove it from siblings.
      show: function(event, ui) {
        $(ui.tab).parent('li').addClass('active').siblings('li').removeClass('active');
      },
=======
    .addClass('tabs-processed')
    .each(function () {
      if ($(this).is('.tabs-navigation')) {
        Drupal.tabsNavigation(this);
      }
    })
    .find('> ul')
    .each(function () {
      var href = $(this).find('li.active:first a').attr('href');
      selected = href ? href.substring(href.indexOf('#')) : 1;
    })
    .tabs({
      select: selected,
      selectedClass: 'active',
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      fx: fx
    })
    .addClass('tabs')
    .each(function () {
      // Assign secondary class to nested tabsets.
      var newClass = $(this).parents('.drupal-tabs').size() > 1 ? 'secondary' : 'primary';
<<<<<<< HEAD
      $(this)
        .addClass(newClass)
        .find('>li:first')
        .addClass('first')
        .end()
        .find('>li:last')
        .addClass('last');
    })
    .after('<span class="clear"></span>')
    .end()
    .addClass('tabs-processed')
    .each(function () {
      if ($(this).is('.tabs-navigation')) {
        Drupal.tabs.tabsNavigation(this);
      }
    })
    .show();
};

Drupal.tabs.tabsNavigation = function(elt) {
  // Extract tabset name.
  var tabsetName = $(elt).get(0).id.substring(5);
  var $tabs = $('> ul', elt);
  var i = 1;
  var $tabsContent = $('div.tabs-' + tabsetName, elt);
=======
      $(this).addClass(newClass);
    })
    .after('<span class="clear"></span>')
    .end()
    .show();
};

Drupal.tabsNavigation = function(elt) {
  // Extract tabset name.
  var tabsetName = $(elt).get(0).id.substring(5);
  var $tabs = $(elt).tabs();
  var i = 1;
  var $tabsContent = $('div.' + 'tabs-' + tabsetName, elt);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  var count = $tabsContent.size();
  $tabsContent.each(function() {
    if ((i > 1) || (i < count)) {
      $(this).append('<span class="clear"></span><div class="tabs-nav-link-sep"></div>');
    }
    if (i > 1) {
<<<<<<< HEAD
      var previousText = '‹ ' + (Drupal.settings.tabs.navigation_titles ? $tabs.find('> li:eq(' + parseInt(i - 2) + ')').text() : Drupal.settings.tabs.previous_text);
      var link = $(document.createElement('a'))
        .append('<span>' + previousText + '</span>')
=======
      var link = $(document.createElement('a'))
        .append(Drupal.settings.tabs.previous_text)
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
        .attr('id', 'tabs-' + tabsetName + '-previous-link-' + i)
        .addClass('tabs-nav-previous')
        .click(function() {
          var tabIndex = parseInt($(this).attr('id').substring($(this).attr('id').lastIndexOf('-') + 1)) -1;
          $tabs.tabs('select', tabIndex - 1);
<<<<<<< HEAD
          Drupal.tabs.scrollTo(elt);
=======
          //Drupal.scrollTo(elt);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
          return false;
        });
      $(this).append(link);
    }
    if (i < count) {
<<<<<<< HEAD
      var nextText = (Drupal.settings.tabs.navigation_titles ? $tabs.find('> li:eq(' + parseInt(i) + ')').text() : Drupal.settings.tabs.next_text) + ' ›';
      var link = $(document.createElement('a'))
        .append('<span>' + nextText + '</span>')
=======
      var link = $(document.createElement('a'))
        .append(Drupal.settings.tabs.next_text)
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
        .attr('id', 'tabs-' + tabsetName + '-next-button-' + i)
        .addClass('tabs-nav-next')
        .click(function() {
          var tabIndex = parseInt($(this).attr('id').substring($(this).attr('id').lastIndexOf('-') + 1)) -1;
          $tabs.tabs('select', tabIndex + 1);
<<<<<<< HEAD
          Drupal.tabs.scrollTo(elt);
=======
          //Drupal.scrollTo(elt);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
          return false;
        });
      $(this).append(link);
    }
    $tabsContent.append('<span class="clear"></span>');
    i++;
  });
};

<<<<<<< HEAD
Drupal.tabs.scrollTo = function(elt) {
  // Scroll to the top of the tab.
  var offset = $(elt).offset();
  // Only scroll upwards.
  if (offset.top - 10 < $(window).scrollTop()) {
    $('html,body').animate({scrollTop: (offset.top - 10)}, 500);
  }
};

=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
