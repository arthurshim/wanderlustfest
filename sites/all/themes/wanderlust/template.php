<?php
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
//drupal_set_message('<pre>' . print_r($links, 1) . '</pre>');
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
  }

  return $output;
}

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
    $subdomain = array_shift(explode('.', $domain));
    if(isset($subdomain) && $subdomain == 'journal' ) {
      $vars['head_title'] = str_replace("|", '', $vars['head_title']);
    }
    
    if ($subdomain) {
      $vars['body_classes'] .= ' '. $subdomain;
    }

 /* $domain = preg_replace('`^www.`', '', $_SERVER['HTTP_HOST']);
  if($domain == 'journal') {
  
  }*/
    /*
   if($subdomain == 'oahu') {	
	
	$vars['template_file'] = 'page-oahu';
    }

   if($subdomain == 'chile') {	
	
	$vars['template_file'] = 'page-chile';
    }    
    */
  }
  
  global $language;
  
  if($language->language == 'fr') {
 $vars['connect'] = <<<EOF
  
  <div id="thankyou">Thank you for signing up! You should receive an email confirmation shortly.</div>
     <div id="mc_embed_signup">

<form action="http://wanderlust.us3.list-manage.com/subscribe/post?u=3252bf638e8eb23d7ebc4af05&amp;id=e19ac9899d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<h2>Cyberlettre Wanderlust</h2>
<div class="mc-field-group">
<label for="mce-EMAIL">Courriel<span class="asterisk">*</span>
</label>
<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
<label for="mce-FNAME">Prénom</label>
<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
<label for="mce-LNAME">Nom </label>
<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group">
<label for="mce-MMERGE8">Zip/Postal Code </label>
<input type="text" value="" name="MMERGE8" class="" id="mce-MMERGE8">
</div>
<div class="mc-field-group">
<label for="mce-COUNTRY">Province </label>
<select name="COUNTRY" class="" id="mce-COUNTRY">
<option value=""></option>
<option value="United States">United States</option>
<option value="Canada">Canada</option>
<option value="Australia">Australia</option>
<option value="New Zealand">New Zealand</option>
<option value="Chile">Chile</option>
<option value="Other">Other</option>

</select>
</div>
<div class="mc-field-group">
<label for="mce-EVENT">Quel événement vous intéresse le plus?</label>
<select name="EVENT" class="" id="mce-EVENT">
<option value=""></option>
<option value="All Events">All Events</option>
<option value="Stratton">Stratton</option>
<option value="Aspen-Snowmass">Aspen-Snowmass</option>
<option value="Squaw Valley">Squaw Valley</option>
<option value="Whistler">Whistler</option>
<option value="Tremblant">Tremblant</option>
<option value="Austin">Austin</option>
<option value="O'ahu">O'ahu</option>
<option value="City Events">City Events</option>
<option value="Other">Other</option>

</select>
</div>
<div class="mc-field-group">
<label for="mce-SOURCE"> Comment avez-vous entendu parler de nous?  </label>
<select name="SOURCE" class="" id="mce-SOURCE">
<option value=""></option>
<option value="A friend told me">A friend told me</option>
<option value="A teacher told me">A teacher told me</option>
<option value="At my studio">At my studio</option>
<option value="In a magazine">In a magazine</option>
<option value="Through your website">Through your website</option>
<option value="In a blog or other website">In a blog or other website</option>
<option value="Saw a poster or flyer">Saw a poster or flyer</option>
<option value="Saw a banner ad">Saw a banner ad</option>
<option value="Other">Other</option>

</select>
</div>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_3252bf638e8eb23d7ebc4af05_e19ac9899d" value=""></div>
<div class="clear"><input type="submit" value="Abonnez-moi" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>

 </div>
EOF;
  }

    elseif ($subdomain == 'mel' || $subdomain == 'akl' || $subdomain == 'syd' ){
   $vars['connect'] = <<<EOF
  
  <div id="thankyou">Thank you for signing up! You should receive an email confirmation shortly.</div>
     <div id="mc_embed_signup">

<form action="http://wanderlust.us3.list-manage.com/subscribe/post?u=3252bf638e8eb23d7ebc4af05&amp;id=e19ac9899d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<h2>Sign up for the Wanderlust Newsletter</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
<label for="mce-FNAME">First Name </label>
<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
<label for="mce-LNAME">Last Name </label>
<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group">
<label for="mce-MMERGE8">Zip/Postal Code </label>
<input type="text" value="" name="MMERGE8" class="" id="mce-MMERGE8">
</div>
<div class="mc-field-group">
<label for="mce-COUNTRY">Country </label>
<select name="COUNTRY" class="" id="mce-COUNTRY">
<option value=""></option>
<option value="United States">United States</option>
<option value="Canada">Canada</option>
<option value="Australia">Australia</option>
<option value="New Zealand">New Zealand</option>
<option value="Chile">Chile</option>
<option value="Other">Other</option>

</select>
</div>
<div class="mc-field-group">
<label for="mce-EVENT">Which Wanderlust Festival most interests you? </label>
<select name="EVENT" class="" id="mce-EVENT">
<option value=""></option>
<option value="All Events">All Events</option>
<option value="Stratton">Stratton</option>
<option value="Aspen-Snowmass">Aspen-Snowmass</option>
<option value="Squaw Valley">Squaw Valley</option>
<option value="Whistler">Whistler</option>
<option value="Tremblant">Tremblant</option>
<option value="Austin">Austin</option>
<option value="O'ahu">O'ahu</option>
<option value="City Events">City Events</option>
<option value="Other">Other</option>

</select>
</div>
<div class="mc-field-group">
<label for="mce-SOURCE">How did you hear about us? </label>
<select name="SOURCE" class="" id="mce-SOURCE">
<option value=""></option>
<option value="A friend told me">A friend told me</option>
<option value="A teacher told me">A teacher told me</option>
<option value="At my studio">At my studio</option>
<option value="In a magazine">In a magazine</option>
<option value="Through your website">Through your website</option>
<option value="In a blog or other website">In a blog or other website</option>
<option value="Saw a poster or flyer">Saw a poster or flyer</option>
<option value="Saw a banner ad">Saw a banner ad</option>
<option value="Other">Other</option>

</select>
</div>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_3252bf638e8eb23d7ebc4af05_e19ac9899d" value=""></div>
<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>

 </div>
EOF;
  }





  
  else {
    $vars['connect'] = <<<EOF
  
  <div id="thankyou">Thank you for signing up! You should receive an email confirmation shortly.</div>
     <div id="mc_embed_signup">

<form action="http://wanderlust.us3.list-manage.com/subscribe/post?u=3252bf638e8eb23d7ebc4af05&amp;id=e19ac9899d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<h2>Sign up for the Wanderlust Newsletter</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
<label for="mce-FNAME">First Name </label>
<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
<label for="mce-LNAME">Last Name </label>
<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group">
<label for="mce-MMERGE8">Zip/Postal Code </label>
<input type="text" value="" name="MMERGE8" class="" id="mce-MMERGE8">
</div>
<div class="mc-field-group">
<label for="mce-COUNTRY">Country </label>
<select name="COUNTRY" class="" id="mce-COUNTRY">
<option value=""></option>
<option value="United States">United States</option>
<option value="Canada">Canada</option>
<option value="Australia">Australia</option>
<option value="New Zealand">New Zealand</option>
<option value="Chile">Chile</option>
<option value="Other">Other</option>

</select>
</div>
<div class="mc-field-group">
<label for="mce-EVENT">Which Wanderlust Festival most interests you? </label>
<select name="EVENT" class="" id="mce-EVENT">
<option value=""></option>
<option value="All Events">All Events</option>
<option value="Stratton">Stratton</option>
<option value="Aspen-Snowmass">Aspen-Snowmass</option>
<option value="Squaw Valley">Squaw Valley</option>
<option value="Whistler">Whistler</option>
<option value="Tremblant">Tremblant</option>
<option value="Austin">Austin</option>
<option value="O'ahu">O'ahu</option>
<option value="City Events">City Events</option>
<option value="Other">Other</option>

</select>
</div>
<div class="mc-field-group">
<label for="mce-SOURCE">How did you hear about us? </label>
<select name="SOURCE" class="" id="mce-SOURCE">
<option value=""></option>
<option value="A friend told me">A friend told me</option>
<option value="A teacher told me">A teacher told me</option>
<option value="At my studio">At my studio</option>
<option value="In a magazine">In a magazine</option>
<option value="Through your website">Through your website</option>
<option value="In a blog or other website">In a blog or other website</option>
<option value="Saw a poster or flyer">Saw a poster or flyer</option>
<option value="Saw a banner ad">Saw a banner ad</option>
<option value="Other">Other</option>

</select>
</div>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_3252bf638e8eb23d7ebc4af05_e19ac9899d" value=""></div>
<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>

 </div>
EOF;
    
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
  
  
 //drupal_set_message('<pre>' . print_r($title, 1) . '</pre>');
  
  
  return '<li class="' . $class . '">' . $link . $menu . "</li>\n";
}
//add google analytics code to outbound links
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
	'menu-blogs-primary-links',//add more primary links here
    );
    $titles = array('Schedule');
    if(in_array($link['menu_name'], $states)){
        $attributes = array();    
	if(in_array($link['title'], $titles)) {   
	     $attributes['onlick'] = "_gaq.push(['_link', '$link[href]']);return false;";
	     $link['localized_options']['attributes'] = $attributes;
	}   
   }
    return l($link['title'], $link['href'], $link['localized_options']);
}

function wwanderlust_viewsdisplaytabs_tab_groups($displays, $class) {
  drupal_add_css(drupal_get_path('module', 'viewsdisplaytabs') .'/viewsdisplaytabs.css');
  
  $out = '<div class="viewsdisplaytabs-wrapper">';
  
  
    
  // unset($displays[0][5]);
  foreach ($displays as $group => $display_items) {
    $out .= '<div class="viewsdisplaytabs-group-wrapper">';
    $group = ( $group === 0 ? null : $group );
    $out .= theme('item_list', $display_items, $group, 'ul', array('class' => $class));
    $out .= '</div>';
  }
  $out .= '</div>';
  $out .= '<div class="viewsdisplaytabs-wrapper-closure"></div>';
  return $out;
}

function phptemplate_preprocess_page(&$vars) {
  $scripts = drupal_add_js();
  if(in_array('page-media-photos',$vars['template_files']))
    unset($scripts['all']['module']['sites/all/modules/jquery_update/replace/jquery.min.js']);
  $vars['scripts'] = drupal_get_js('header', $scripts);
}

function wwanderlust_content_view_multiple_field($items, $field, $values) {
   
  if($field['field_name']=='field_photos_images'){
    $output = '';
     $i = 0;
    foreach ($items as $item){
 
          if($i == 0) {
            $output .= '<p><a class="" data-fancybox-group="thumb"  href="/' . $item . '">' . theme('imagecache', 'node_teaser_image', $item) . '</a></p>';
           // $output .= '<p><a class="" data-fancybox-group="thumb"  href="/' . $item . '"><img src="/' . $item . '" alt="" width="200" height="150" /></a></p>';

          }
          else {
	    

	$output .= '<p><a class="hid" data-fancybox-group="thumb"  href="/' . $item . '">' . theme('imagecache', 'node_teaser_image', $item) . '</a></p>'; 
          //  $output .= '<p><a class="hid" data-fancybox-group="thumb"  href="/' . $item . '"><img src="/' . $item . '" alt="" /></a></p>';
          }
          $i++;

    }
    return $output;    
  }
}

function wanderlust_nice_menus_build($menu, $depth = -1, $trail = NULL) {
  $output = '';
  // Prepare to count the links so we can mark first, last, odd and even.
  $index = 0;
  $count = 0;
  foreach ($menu as $menu_count) {
    if ($menu_count['link']['hidden'] == 0) {
      $count++;
    }
  }
  

  
  // Get to building the menu.
  foreach ($menu as $menu_item) {
    $mlid = $menu_item['link']['mlid'];
    // Check to see if it is a visible menu item.
    if (!isset($menu_item['link']['hidden']) || $menu_item['link']['hidden'] == 0) {
      // Check our count and build first, last, odd/even classes.
      $index++;
      $first_class = $index == 1 ? ' first ' : '';
      $oddeven_class = $index % 2 == 0 ? ' even ' : ' odd ';
      $last_class = $index == $count ? ' last ' : '';
      // Build class name based on menu path
      // e.g. to give each menu item individual style.
      // Strip funny symbols.
      $clean_path = str_replace(array('http://', 'www', '<', '>', '&', '=', '?', ':', '.'), '', $menu_item['link']['href']);
      // Convert slashes to dashes.
      $clean_path = str_replace('/', '-', $clean_path);
      $class = 'menu-path-'. $clean_path;
      if ($trail && in_array($mlid, $trail)) {
        $class .= ' active-trail';
      }
      // If it has children build a nice little tree under it.
      if ((!empty($menu_item['link']['has_children'])) && (!empty($menu_item['below'])) && $depth != 0) {
        // Keep passing children into the function 'til we get them all.
        $children = theme('nice_menus_build', $menu_item['below'], $depth, $trail);
        // Set the class to parent only of children are displayed.
        $parent_class = ($children && ($menu_item['link']['depth'] <= $depth || $depth == -1)) ? 'menuparent ' : '';
        
       
          
        $output .= '<li class="menu-' . $mlid . ' ' . $parent_class . $class . $first_class . $oddeven_class . $last_class .'">'. theme('menu_item_link', $menu_item['link']);
        // Check our depth parameters.
        if ($menu_item['link']['depth'] <= $depth || $depth == -1) {
          // Build the child UL only if children are displayed for the user.
          if ($children) {
            $output .= '<ul>';
            $output .= $children;
            $output .= "</ul>\n";
          }
        }
        $output .= "</li>\n";
      }
      else {
         // drupal_set_message('<pre>' . print_r($menu_item['link']['menu_name'], 1) . '</pre>');
  /*      if($menu_item['link']['menu_name'] == 'menu-blogs-primary-links') {
          
          $term = taxonomy_get_term((int)substr($menu_item['link']['link_path'], 14));
        //  drupal_set_message('<pre>' . print_r($term->description, 1) . '</pre>');
          $output .= '<li class="menu-' . $mlid . ' ' . $class . $first_class . $oddeven_class . $last_class .'">'. theme('menu_item_link', $menu_item['link']) .'<div class="termdescr">' . $term->description . '</div></li>'."\n";
        } else {*/
  //drupal_set_message('<pre>' . print_r($menu_item['link'] , 1) . '<pre>');
          $output .= '<li class="menu-' . $mlid . ' ' . $class . $first_class . $oddeven_class . $last_class .'">'. theme('menu_item_link', $menu_item['link']) .'</li>'."\n";
  //      }
     
      }
    }
  }
  return $output;
}

function wanderlust_preprocess_panels_pane(&$vars) {
  $vars['title'] = t($vars['title']);
}