<?php
<<<<<<< HEAD
/**
 * Sets the body-tag class attribute.
 */
function wonderlust_id_safe($string) {
  // Replace with dashes anything that isn't A-Z, numbers, dashes, or underscores.
  $string = strtolower(preg_replace('/[^a-zA-Z0-9-]+/', '-', $string));
  // If the first character is not a-z, add 'id' in front.
  if (!ctype_lower($string{0})) { // Don't use ctype_alpha since its locale aware.
    $string = 'id' . $string;
  }
  return $string;
}

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function wonderlust_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $heading = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    // Uncomment to add current page to breadcrumb
    // $breadcrumb[] = drupal_get_title();
    return '<nav class="breadcrumb">' . $heading . implode(' » ', $breadcrumb) . '</nav>';
  }
}

function wanderlust_links($links, $attributes = array('class' => 'links'), $heading = '') {
  global $language;
  $output = '';

  if (count($links) > 0) {
    // Treat the heading first if it is present to prepend it to the
    // list of links.
    if (!empty($heading)) {
      if (is_string($heading)) {
        // Prepare the array that will be used when the passed heading
        // is a string.
        $heading = array(
          'text' => $heading,
          // Set the default level of the heading.
          'level' => 'h2',
        );
      }
      $output .= '<' . $heading['level'];
      if (!empty($heading['class'])) {
        $output .= drupal_attributes(array('class' => $heading['class']));
      }
      $output .= '>' . check_plain($heading['text']) . '</' . $heading['level'] . '>';
    }

    $output .= '<ul'. drupal_attributes($attributes) .'>';

    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) {
      $class = $key;

      // Add first, last and active classes to the list of links to help out themers.
      if ($i == 1) {
        $class .= ' first';
      }
      if ($i == $num_links) {
        $class .= ' last';
      }
      if (isset($link['href']) && ($link['href'] == $_GET['q'] || ($link['href'] == '<front>' && drupal_is_front_page()))
          && (empty($link['language']) || $link['language']->language == $language->language)) {
        $class .= ' active';
      }
      $class .= ' ' . $heading;
      $output .= '<li'. drupal_attributes(array('class' => $class)) .'>';

      if (isset($link['href'])) {
        // Pass in $link as $options, they share the same keys.
        $output .= l($link['title'], $link['href'], $link);
      }
      else if (!empty($link['title'])) {
        // Some links are actually not links, but we wrap these in <span> for adding title and class attributes
        if (empty($link['html'])) {
          $link['title'] = check_plain($link['title']);
        }
        $span_attributes = '';
        if (isset($link['attributes'])) {
          $span_attributes = drupal_attributes($link['attributes']);
        }
        $output .= '<span'. $span_attributes .'>'. $link['title'] .'</span>';
      }

      $i++;
      $output .= "</li>\n";
    }

    $output .= '</ul>';
  }

  return $output;
}

/**
 * Allow themable wrapping of all comments.
 */
function wonderlust_comment_wrapper($content, $node) {
  if (!$content || $node->type == 'forum') {
    return '<section id="comments">'. $content .'</section>';
  }
  else {
    return '<section id="comments"><h2>'. t('Comments') .'</h2>'. $content .'</section>';
  }
}

/**
 * Allow theming of publishing information.
 */
function wonderlust_node_submitted($node) {
  return t('Published by !username on !datetime',
    array(
      '!username' => '<span class="author">'. theme('username', $node). '</span>',
      '!datetime' => '<time datetime="!fulldatetime" pubdate>'. format_date($node->created). '</time>',
      '!fulldatetime' => format_date($node->created, 'custom', 'Y-m-d\TH:i:sZ')
    ));
}

function wonderlust_comment_submitted($comment) {
  return t('!username | !datetime',
    array(
      '!username' => '<span class="author">'. theme('username', $comment). '</span>',
      '!datetime' => '<time datetime="!fulldatetime" pubdate>'. format_date($comment->timestamp). '</time>',
      '!fulldatetime' => format_date($comment->created, 'custom', 'Y-m-d\TH:i:sZ')
    ));
}

/**
 * Duplicate of theme_menu_local_tasks() but adds clearfix to tabs.
 */
function wonderlust_menu_local_tasks() {
  $output = '';

  // CTools requires a different set of local task functions.
  if (module_exists('ctools')) {
    ctools_include('menu');
    $primary = ctools_menu_primary_local_tasks();
    $secondary = ctools_menu_secondary_local_tasks();
  }
  else {
    $primary = menu_primary_local_tasks();
    $secondary = menu_secondary_local_tasks();
  }

  if ($primary) {
    $output .= '<ul class="tabs primary clearfix">' . $primary . '</ul>';
  }
  if ($secondary) {
    $output .= '<ul class="tabs secondary clearfix">' . $secondary . '</ul>';
=======
// $Id: template.php,v 1.1.2.3 2009/07/18 17:48:55 dvessel Exp $


//drupal_add_js('sites/all/themes/wanderlust/JS/customSelect.jquery.js');
drupal_add_js('sites/all/themes/wanderlust/JS/jquery.dd.js');


/**
 * Preprocessor for page.tpl.php template file.
 */
function ninesixty_preprocess_page(&$vars, $hook) {
  // For easy printing of variables.
  $vars['logo_img']         = $vars['logo'] ? theme('image', substr($vars['logo'], strlen(base_path())), t('Home'), t('Home')) : '';
  $vars['linked_logo_img']  = $vars['logo_img'] ? l($vars['logo_img'], '<front>', array('attributes' => array('rel' => 'home'), 'title' => t('Home'), 'html' => TRUE)) : '';
  $vars['linked_site_name'] = $vars['site_name'] ? l($vars['site_name'], '<front>', array('attributes' => array('rel' => 'home'), 'title' => t('Home'))) : '';
  $vars['main_menu_links']      = theme('links', $vars['primary_links'], array('class' => 'links main-menu'));
  $vars['secondary_menu_links'] = theme('links', $vars['secondary_links'], array('class' => 'links secondary-menu'));

  // Make sure framework styles are placed above all others.
  $vars['css_alt'] = ninesixty_css_reorder($vars['css']);
  $vars['styles'] = drupal_get_css($vars['css_alt']);
}

/**
 * Contextually adds 960 Grid System classes.
 *
 * The first parameter passed is the *default class*. All other parameters must
 * be set in pairs like so: "$variable, 3". The variable can be anything available
 * within a template file and the integer is the width set for the adjacent box
 * containing that variable.
 *
 *  class="<?php print ns('grid-16', $var_a, 6); ?>"
 *
 * If $var_a contains data, the next parameter (integer) will be subtracted from
 * the default class. See the README.txt file.
 */
function ns() {
  $args = func_get_args();
  $default = array_shift($args);
  // Get the type of class, i.e., 'grid', 'pull', 'push', etc.
  // Also get the default unit for the type to be procesed and returned.
  list($type, $return_unit) = explode('-', $default);

  // Process the conditions.
  $flip_states = array('var' => 'int', 'int' => 'var');
  $state = 'var';
  foreach ($args as $arg) {
    if ($state == 'var') {
      $var_state = !empty($arg);
    }
    elseif ($var_state) {
      $return_unit = $return_unit - $arg;
    }
    $state = $flip_states[$state];
  }

  $output = '';
  // Anything below a value of 1 is not needed.
  if ($return_unit > 0) {
    $output = $type . '-' . $return_unit;
  }
  return $output;
}

/**
 * This rearranges how the style sheets are included so the framework styles
 * are included first.
 *
 * Sub-themes can override the framework styles when it contains css files with
 * the same name as a framework style. This can be removed once Drupal supports
 * weighted styles.
 */
function ninesixty_css_reorder($css) {
  global $theme_info, $base_theme_info;

  // Dig into the framework .info data.
  $framework = !empty($base_theme_info) ? $base_theme_info[0]->info : $theme_info->info;

  // Pull framework styles from the themes .info file and place them above all stylesheets.
  if (isset($framework['stylesheets'])) {
    foreach ($framework['stylesheets'] as $media => $styles_from_960) {
      // Setup framework group.
      if (isset($css[$media])) {
        $css[$media] = array_merge(array('framework' => array()), $css[$media]);
      }
      else {
        $css[$media]['framework'] = array();
      }
      foreach ($styles_from_960 as $style_from_960) {
        // Force framework styles to come first.
        if (strpos($style_from_960, 'framework') !== FALSE) {
          $framework_shift = $style_from_960;
          $remove_styles = array($style_from_960);
          // Handle styles that may be overridden from sub-themes.
          foreach ($css[$media]['theme'] as $style_from_var => $preprocess) {
            if ($style_from_960 != $style_from_var && basename($style_from_960) == basename($style_from_var)) {
              $framework_shift = $style_from_var;
              $remove_styles[] = $style_from_var;
              break;
            }
          }
          $css[$media]['framework'][$framework_shift] = TRUE;
          foreach ($remove_styles as $remove_style) {
            unset($css[$media]['theme'][$remove_style]);
          }
        }
      }
    }
  }

  return $css;
}



function _phptemplate_variables($hook, $vars = array()) {
  switch ($hook) {
    case 'page':
      $vars['body_class'] = '';

      // Set body class for formatting based on content type
      // if the node exists, i.e., if a node is the focus of the page.
      $vars['body_class'] = isset($vars['node']) ? 'type_' . $vars['node']->type .' ' : '';

      //Allows specific theming for taxonomy listings
      if (arg(0) == 'taxonomy') {
          $vars['body_class'] = 'taxonomy_list';
      }

      /*
       * The following lines replace the phptemplate_body_class found in Garland
       * These are only necessary if you are still using the sidebar classes in the Garland theme
       */
      $layout = '';
      //Is there a left sidebar?
      if ($vars['sidebar_left'] != '') {
          $layout = 'sidebar-left';
      }
      //Is there a right sidebar?
      if ($vars['sidebar_right'] != '') {
           $layout = ($layout == 'sidebar-left') ? 'sidebars' : 'sidebar-right';
      }
      //Put layout into body_class
      if ($layout != ''){
         $vars['body_class'] .= ' ' . $layout;
      }
      //End Garland-specific classes

      //Add additional class if this is the front page (for home page specific theming)
      if (drupal_is_front_page()) {
         $vars['body_class'] .= ' home';
      }

      break;
  }
  return $vars;
}



function wanderlust_preprocess_page(&$vars, $hook) {
  date_default_timezone_set('America/New_York'); // used by strtotime() below
  // site-specific header text
  $site = sites_get_current_site();
  $date_start = strtotime($site->extra_fields->field_event_date[0]['value']);

  $event_date = date('F j', $date_start);
  if ($site->extra_fields->field_event_date[0]['value2'] != $site->extra_fields->field_event_date[0]['value']) {
    $date_end = strtotime($site->extra_fields->field_event_date[0]['value2']);
    $event_date .= '-' . date('j', $date_end);
  }
  $event_date .= date(', Y', $date_start);

  $fields = array(//$event_date,
                  strtoupper($site->extra_fields->field_event_venue[0]['value']),
                  strtoupper($site->extra_fields->field_event_city[0]['value'] . ', ' . $site->extra_fields->field_event_state[0]['value']));
  $vars['event_info'] = implode(' • ', $fields);

// add sites selector dropdown (used in header.php)
//  $events = array();
  $vars['sites_selector'] = array();
  require_once drupal_get_path('module', 'sites') . '/sites.core.inc';
  $sites = _sites_get_sites();
  while (count($sites) > 0) {
    $earliest = NULL;
    $earliest_i = NULL;
    foreach ($sites as $i => $site) {
      if ($site->extra_fields->field_event_hide[0]['value'] == 'disabled') {
        unset($sites[$i]);
        continue 2;
      }
      else {
        if ($earliest == NULL) {
          $earliest = $site;
          $earliest_i = $i;
          continue;
        }
      
        $site_time = strtotime($site->extra_fields->field_event_date[0]['value']);
        $earliest_time = strtotime($earliest->extra_fields->field_event_date[0]['value']);
        if ($site_time < $earliest_time) {
          $earliest = $site;
          $earliest_i = $i;
        }
      }
    }
    
    $vars['sites_selector'][$earliest->purl_prefix] = $earliest->name;
    //$events[] = array('name' => $earliest->name, 'subdomain' => $earliest->purl_prefix);
    unset($sites[$earliest_i]);
  }
//  ksort($events);
//  $vars['sites_selector'] = array();
//  foreach ($events as $event) {
//   $vars['sites_selector'][$event['subdomain']] = $event['name'];
//  }

  $current = sites_get_current_site();
  $vars['current_site'] = $current;
  $vars['current_subdomain'] = $current->purl_prefix;


  // per-path bg image
  $vars['bg_image'] = wl_bg_background_for_path($_GET['q']);

  if ($_GET['q'] == 'home') {
    $vars['body_classes'] = str_replace('not-front', 'front', $vars['body_classes']);
    $vars['template_files'] = array('page-front');
  }

  $path = drupal_get_path_alias($_GET['q']);
  $vars['classes_array'][] = drupal_html_class('page-' . $path);
  // Add unique class for each website section.
  list($section, ) = explode('/', $path, 2);
  if (arg(0) == 'node') {
    if (arg(1) == 'add') {
      $section = 'node-add';
    }
    elseif (is_numeric(arg(1)) && (arg(2) == 'edit' || arg(2) == 'delete')) {
      $section = 'node-' . arg(2);
    }
  }
  $vars['classes_array'][] = drupal_html_class('section-' . $section);
  $vars['body_classes'] = implode(' ', $vars['classes_array']) . ' ' . $vars['body_classes'];


  if (($current->purl_prefix == 'phoenix') || ($current->purl_prefix == 'dallas') || ($current->purl_prefix == 'atlanta') || ($current->purl_prefix == 'nyc') || ($current->purl_prefix == 'santamonica') || ($current->purl_prefix == 'chicago') || ($current->purl_prefix == 'seattle')){
    $vars['smartwater_class'] = 'smartwater';    
 	}

}


function wanderlust_preprocess_views_view_field__field_event_date_value(&$vars, $hook) {
  $row = $vars['row'];
  $date_start = strtotime($row->node_data_field_event_hide_field_event_date_value);
  $event_date = date('F j', $date_start);
  if ($row->node_data_field_event_hide_field_event_date_value2 != $row->node_data_field_event_hide_field_event_date_value) {
    $date_end = strtotime($row->node_data_field_event_hide_field_event_date_value2);
    $event_date .= '-' . date('j', $date_end);
  }
  $event_date .= date(', Y', $date_start);
  $vars['output'] = $event_date;
}


function wanderlust_preprocess_node(&$vars, $hook) {

  if (($current_subdomain == 'phoenix') || ($current_subdomain == 'dallas') || ($current_subdomain == 'atlanta') || ($current_subdomain == 'nyc') || ($current_subdomain == 'santamonica') || ($current_subdomain == 'chicago') || ($current_subdomain == 'seattle')){
    $vars['smartwater_class'] = 'smartwater';    
 	}
  
	$vars['bloggerinfo'] = theme('blocks', 'bloggerinfo');

 	// fbook comments
 	$_facebook_app_id = wl_helper_get_fbook_app_id();
 	$_page_url = urlencode(wl_get_base_domain() . '/node/' . $vars['node']->nid);
 	$_num_comments = 10;
 	$_width = 500;
 	$vars['facebook_comments'] = <<<EOT
    <div class="facebook-comments">
      <div id="fb-root"></div>
      <script>
            window.fbAsyncInit = function() {
              FB.init({
                appId: '$_facebook_app_id',
                status: true,
                cookie: true,
                xfbml: true});
            };
            (function() {
              var e = document.createElement('script');
              e.type = 'text/javascript';
              e.src = document.location.protocol +
                '//connect.facebook.net/en_US/all.js';
              e.async = true;
              document.getElementById('fb-root').appendChild(e);
            }());
          </script>
      <fb:comments href="$_page_url" numposts="$_num_comments" width="$_width" publish_feed="true"></fb:comments>
    </div>
EOT;
}

/* GET RID OF 'NOT VERIFIED' TEXT ON COMMENTS */
function wanderlust_username($object) {

  if ($object->uid && $object->name) {
    if (drupal_strlen($object->name) > 20) {
      $name = drupal_substr($object->name, 0, 15) .'...';
    }
    else {
      $name = $object->name;
    }

    if (user_access('access user profiles')) {
      $output = l($name, 'user/'. $object->uid, array('attributes' => array('title' => t('View user profile.'))));
    }
    else {
      $output = check_plain($name);
    }
  }
  else if ($object->name) {
    if (!empty($object->homepage)) {
      $output = l($object->name, $object->homepage, array('attributes' => array('rel' => 'nofollow')));
    }
    else {
      $output = check_plain($object->name);
    }

    /**
     * HERE I've commented out the next line, which is the line that was adding
     * the unwanted text to our author names!
     */
    // $output .= ' ('. t('not verified') .')';
  }
  else {
    $output = variable_get('anonymous', t('Anonymous'));
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }

  return $output;
}

<<<<<<< HEAD
/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
function wonderlust_preprocess_block(&$vars, $hook) {
  $block = $vars['block'];

  // Drupal 7 uses a $content variable instead of $block->content.
  $vars['content'] = $block->content;
  // Drupal 7 should use a $title variable instead of $block->subject.
  $vars['title'] = $block->subject;

  // Special classes for blocks.
  $vars['classes_array'][] = 'block-' . $block->module;
  $vars['classes_array'][] = 'region-' . $vars['block_zebra'];
  $vars['classes_array'][] = $vars['zebra'];
  $vars['classes_array'][] = 'region-count-' . $vars['block_id'];
  $vars['classes_array'][] = 'count-' . $vars['id'];

  // Create the block ID.
  $vars['block_html_id'] = 'block-' . $block->module . '-' . $block->delta;

  $vars['edit_links_array'] = array();
  if (user_access('administer blocks')) {
    include_once './' . drupal_get_path('theme', 'wonderlust') . '/template.block-editing.inc';
    wonderlust_preprocess_block_editing($vars, $hook);
    $vars['classes_array'][] = 'with-block-editing';
  }
  $vars['edit_links'] = !empty($vars['edit_links_array']) ? '<div class="edit">' . implode(' ', $vars['edit_links_array']) . '</div>' : '';
}


function wanderlust_preprocess_node(&$vars, $hook) {
  if (isset($current_subdomain) && in_array($current_subdomain, array('phoenix', 'dallas', 'atlanta', 'nyc', 'santamonica', 'chicago', 'seattle'))){
    $vars['smartwater_class'] = 'smartwater';    
  }
}

function wanderlust_preprocess_page(&$vars, $hook) {
  if (isset($_SERVER['HTTP_HOST'])) {
    $domain = preg_replace('`^www.`', '', $_SERVER['HTTP_HOST']);
    if ($subdomain = array_shift(explode('.', $domain))) {
      $vars['body_classes'] .= ' '. $subdomain;
    }
  }
}



function wanderlust_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) {
  $class = ($menu ? 'expanded' : ($has_children ? 'collapsed' : 'leaf'));
  if (!empty($extra_class)) {
    $class .= ' ' . $extra_class;
  }
  if ($in_active_trail) {
    $class .= ' active-trail';
  }
  
  $title = str_replace(' ', '-', strip_tags($link));
  $class .= ' ' . drupal_strtolower($title);
  
  return '<li class="' . $class . '">' . $link . $menu . "</li>\n";
}

function wanderlust_menu_item_link($link) {
    if (empty($link['localized_options'])) {
      $link['localized_options'] = array();
    }
    $states = array(
	'menu-co-primary-links',
	'menu-chicago-primary-links',
	'menu-anusarainsp-primary-links',
	'menu-cosmopolitan-primary-links',
	'menu-seattle-primary-links',
	'menu-ny-primary-links',
	'menu-santamonica-primary-links',
	'menu-squaw-links',
	'menu-standard-links',
	'menu-whistler-primary-links',
    );
    $titles = array('Purchase', 'Lineup', 'Schedule', 'Experience');
    if(in_array($link['menu_name'], $states)){
        $attributes = array();    
	if(in_array($link['title'], $titles)) {   
	     $attributes['onlick'] = "recordOutboundLink(this, 'Outbound Links', '$link[href]');return false;";
	     $link['localized_options']['attributes'] = $attributes;
	}   
   }
    return l($link['title'], $link['href'], $link['localized_options']);
}
=======
function phptemplate_preprocess_node(&$vars) {
  if (arg(0) == 'taxonomy') {
    $suggestions = array(
      'node-taxonomy'
    );
    $vars['template_files'] = array_merge($vars['template_files'], $suggestions);
  }
}


if (!function_exists('drupal_html_class')) {
  /**
   * Prepare a string for use as a valid class name.
   *
   * Do not pass one string containing multiple classes as they will be
   * incorrectly concatenated with dashes, i.e. "one two" will become "one-two".
   *
   * @param $class
   *   The class name to clean.
   * @return
   *   The cleaned class name.
   */
  function drupal_html_class($class) {
    // By default, we filter using Drupal's coding standards.
    $class = strtr(drupal_strtolower($class), array(' ' => '-', '_' => '-', '/' => '-', '[' => '-', ']' => ''));

    // http://www.w3.org/TR/CSS21/syndata.html#characters shows the syntax for valid
    // CSS identifiers (including element names, classes, and IDs in selectors.)
    //
    // Valid characters in a CSS identifier are:
    // - the hyphen (U+002D)
    // - a-z (U+0030 - U+0039)
    // - A-Z (U+0041 - U+005A)
    // - the underscore (U+005F)
    // - 0-9 (U+0061 - U+007A)
    // - ISO 10646 characters U+00A1 and higher
    // We strip out any character not in the above list.
    $class = preg_replace('/[^\x{002D}\x{0030}-\x{0039}\x{0041}-\x{005A}\x{005F}\x{0061}-\x{007A}\x{00A1}-\x{FFFF}]/u', '', $class);

    return $class;
  }
} /* End of drupal_html_class conditional definition. */

if (!function_exists('drupal_html_id')) {
  /**
   * Prepare a string for use as a valid HTML ID and guarantee uniqueness.
   *
   * @param $id
   *   The ID to clean.
   * @return
   *   The cleaned ID.
   */
  function drupal_html_id($id) {
    $id = strtr(drupal_strtolower($id), array(' ' => '-', '_' => '-', '[' => '-', ']' => ''));

    // As defined in http://www.w3.org/TR/html4/types.html#type-name, HTML IDs can
    // only contain letters, digits ([0-9]), hyphens ("-"), underscores ("_"),
    // colons (":"), and periods ("."). We strip out any character not in that
    // list. Note that the CSS spec doesn't allow colons or periods in identifiers
    // (http://www.w3.org/TR/CSS21/syndata.html#characters), so we strip those two
    // characters as well.
    $id = preg_replace('/[^A-Za-z0-9\-_]/', '', $id);

    return $id;
  }
} /* End of drupal_html_id conditional definition. */
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
