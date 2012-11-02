Drupal.settings.views = Drupal.settings.views || {'ajax_path': 'views/ajax'};

Drupal.behaviors.ajax_video_gallery = function() {
  if (Drupal.settings.rootdownVideos) {
    for (viewName in Drupal.settings.rootdownVideos) {
      for (displayName in Drupal.settings.rootdownVideos[viewName]) {
        var view = $('.view-id-' + viewName + '.view-display-id-' + displayName);
        if (view.length <= 0) {
          continue;
        }
        
        var settings = Drupal.settings.rootdownVideos[viewName][displayName];
        var containers = $(settings.containerSelectors);
        
        if (settings.insertVideoDiv) {
          $(view).prepend('<div class="large-video-container"></div>');
        }
        
        $('.views-row:not(.videos-processed):first', view).addClass('active-video'); // @@TODO: add option in interface for this
        
        // read the url for each video and add as an attribute to the thumbnail element
        $('.views-row:not(.videos-processed)', view).each(
          (function(view, settings) {
            return function() {
              $(this).addClass('videos-processed');
              if (settings.wholeRowClickable) {
                clickableElement = this;
              }
              else {
                clickableElement = settings.clickableElementSelectors;
              }
              
              var nid = $(settings.videoNidFieldSelector + ' .field-content', this).html();
              $(settings.videoNidFieldSelector, this).remove();
              if ($.trim(settings.taxonomyFieldSelector).length > 0) {
                var term = $(settings.taxonomyFieldSelector + ' .field-content', this).html().replace(/ /g, '-').toLowerCase(); // handles full term names as well as tids
                $(clickableElement).attr('term', term);
              }
              
              $(clickableElement)
                .attr('nid', nid)
                .click(function() {
                      $('.views-row', view).removeClass('active-video');
                      if (settings.wholeRowClickable) {
                        $(this).addClass('active-video');
                      }
                      else {
                        $(this).parents('.views-row').addClass('active-video');
                      }
                      // ajaxSubmit doesn't accept a data argument, so we have to
                      // pass additional fields this way.

                      var nid = $(this).attr('nid');
                      var term = $(this).attr('term');
                      var replacementViewName = settings.replacementViewName;
                      var replacementViewDisplayName = settings.replacementViewDisplayName;
                      if (typeof term == 'undefined') {
                        var replacementViewArgs = [nid];
                      }
                      else {
                        var replacementViewArgs = [term, nid];
                      }

                      var viewsAjaxSettings = {
                        view_name: replacementViewName,
                        view_display_id: replacementViewDisplayName,
                        view_args: replacementViewArgs.join('/'),
                        view_path: 'qwerty',//replacementViewPath, // $_GET['q']
                        view_base_path: 'asdf',//$view->get_path(),
                        view_dom_id: 999,//replacementViewDomID, //$vars['dom_id'],
                        pager_element: 0,//$view->pager['element'],
                      };

                      var form = $('<form></form>');
                      $.each(viewsAjaxSettings, function(key, setting) {
                        $(form).append('<input type="hidden" name="'+ key + '" value="'+ setting +'"/>');
                      });

                      var ajax_path = Drupal.settings.views.ajax_path;
                      if (ajax_path.constructor.toString().indexOf("Array") != -1) {
                        ajax_path = ajax_path[0];
                      }

                      $(form).ajaxSubmit({
                        url: ajax_path, // '/views/ajax',
                        type: 'GET',
                        success: function(response) {
                          // Check the 'display' for data.
                          if (response.status && response.display) {
                            var $newView = $(response.display);
                            $(containers).empty().append($newView);
                            //$view = $newView;
                            Drupal.attachBehaviors($newView.parent());
                          }
                        },
                        error: function(xhr) {
                          console.log('ERROR', xhr); // @@TODO: error
                        },
                        dataType: 'json'
                      });
                    });
                  };
                })(view, settings)); // each()
      }
    }
  }  
}
