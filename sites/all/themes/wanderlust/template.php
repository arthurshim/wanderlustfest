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
  
  <div id="thankyou">Merci pour votre inscription! Vous devriez recevoir un email de confirmation sous peu.</div>
  <div class="joincontent">
        <form method='post' id="newsletter"  name='oi_form' action='/testmail.php'>

    <table border="0" cellpadding="0" cellspacing="0">
  
      <tr>
        <td colspan="2"><p class="title">Cyberlettre Wanderlust</p></td>
      </tr>
      <tr>
        <td width="180" valign="middle" style="padding:2px; ">Courriel*<span style="color:#841D0A;"></span></td>
        <td valign="middle" style="padding:2px; "><input type='text' name='email' id="email" /></td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; ">Prénom<span style="color:#841D0A;"></span></td>
        <td valign="middle" style="padding:2px; "><input type='text' name='FirstName' id="firstname" /></td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; ">Nom<span style="color:#841D0A;"></span></td>
        <td valign="middle" style="padding:2px; "><input type='text' name='LastName' id="lastname" /></td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; ">État / Province<span style="color:#841D0A;"></span></td>
        <td valign="middle" style="padding:2px; ">
          <select name='State/Prov' size='1' id="state">
          <option value=''></option>
          <option value="">------ USA ------</option>
                  <option value='AL' >AL</option>
                  <option value='AK' >AK</option>
                  <option value='AZ' >AZ</option>
                  <option value='AR' >AR</option>
                  <option value='CA' >CA</option>
                  <option value='CO' >CO</option>
                  <option value='CT' >CT</option>
                  <option value='DE' >DE</option>
                  <option value='DC' >DC</option>
                  <option value='FL' >FL</option>
                  <option value='GA' >GA</option>
                  <option value='HI' >HI</option>
                  <option value='ID' >ID</option>
                  <option value='IL' >IL</option>
                  <option value='IN' >IN</option>
                  <option value='IA' >IA</option>
                  <option value='KS' >KS</option>
                  <option value='KY' >KY</option>
                  <option value='LA' >LA</option>
                  <option value='ME' >ME</option>
                  <option value='MD' >MD</option>
                  <option value='MA' >MA</option>
                  <option value='MI' >MI</option>
                  <option value='MN' >MN</option>
                  <option value='MS' >MS</option>
                  <option value='MO' >MO</option>
                  <option value='MT' >MT</option>
                  <option value='NE' >NE</option>
                  <option value='NV' >NV</option>
                  <option value='NH' >NH</option>
                  <option value='NJ' >NJ</option>
                  <option value='NM' >NM</option>
                  <option value='NY' >NY</option>
                  <option value='NC' >NC</option>
                  <option value='ND' >ND</option>
                  <option value='OH' >OH</option>
                  <option value='OK' >OK</option>
                  <option value='OR' >OR</option>
                  <option value='PA' >PA</option>
                  <option value='RI' >RI</option>
                  <option value='SC' >SC</option>
                  <option value='SD' >SD</option>
                  <option value='TN' >TN</option>
                  <option value='TX' >TX</option>
                  <option value='UT' >UT</option>
                  <option value='VT' >VT</option>
                  <option value='VA' >VA</option>
                  <option value='WA' >WA</option>
                  <option value='WV' >WV</option>
                  <option value='WI' >WI</option>
                  <option value='WY' >WY</option>
          <option value="">----- CANADA -----</option>
                  <option value='AB' >AB</option>
                  <option value='BC' >BC</option>
                  <option value='LB' >LB</option>
                  <option value='MB' >MB</option>
                  <option value='NB' >NB</option>
                  <option value='NF' >NF</option>
                  <option value='NS' >NS</option>
                  <option value='NT' >NT</option>
                  <option value='ON' >ON</option>
                  <option value='PE' >PE</option>
                  <option value='QC' >QC</option>
                  <option value='SK' >SK</option>
                  <option value='YT' >YT</option>
          <option value="">---------------</option>
          <option value='Other' >OTHER</option>
          </select></td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; ">ZIP/Postal Code<span style="color:#841D0A;">*</span></td>
        <td valign="middle" style="padding:2px; "><input type='text' name='ZipCode' id="postal_code" /></td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; ">Pays<span style="color:#841D0A;"></span></td>
        <td valign="middle" style="padding:2px; ">
          <select name='Country' size='1' id="country">
            <option value=''></option>
            <option value='United States' >United States</option>
            <option value='Canada' >Canada</option>
            <option value='Chile' >Canada</option>            
            <option value='Other' >OTHER</option>
          </select>
        </td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; ">Quel événement vous intéresse le plus?</td>
        <td valign="middle" style="padding:2px; ">
          <select name='EventName' size='1' id="EventName">
            <option value=''></option>
            <option value='ALL' >Tous les événements</option>
            <option value='VT' >Wanderlust Vermont</option>
            <option value='CA' >Wanderlust California</option>
            <option value='CO' >Wanderlust Colorado</option>
            <option value='BC' >Wanderlust Whistler</option>
            <option value='CH' >Wanderlust Chile</option>
            <option value='HI' >Wanderlust O'ahu</option>
            <option value='NYC' >Yoga in the City NYC</option>
            <option value='LA' >Yoga in the City LA</option>
            <option value='SF' >Yoga in the City SF</option>
          </select>
        </td>
      </tr>      
      <tr>
        <td valign="middle" style="padding:2px; ">
          Comment avez-vous entendu parler de nous? </td>
        <td valign="middle" style="padding:2px; ">
          <select name='HearAbout' size='1' id="country">
            <option value=''></option>
            <option value='friend' >Un ami m'a dit</option>
            <option value='teacher' >Un professeur m'a dit</option>
            <option value='studio' >À mon studio</option>
            <option value='magazine' >In a magazine</option>
            <option value='website' >Dans un magazine</option>
            <option value='blog' >Dans un blog ou un autre site</option>
            <option value='poster' >Vu une affiche ou un dépliant</option>
            <option value='bannerad' >Vu une bannière publicitaire</option>
            <option value='other' >Autre</option>
          </select>        
        </td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; font: normal normal 10px Arial, Helvetica, sans-serif; color:#545454;">
          <input type='hidden' name='goto' value='' />
          <input type='hidden' name='iehack' value='&#9760;' />
        </td>
        <td valign="middle" style="padding:2px; "><input type='submit' onClick="" id="submit" value='Abonnez-moi' /></td>
      </tr>
   
</table>
   </form>
 </div>
EOF;
  }

    elseif ($subdomain == 'la' || $subdomain == 'mel' || $subdomain == 'akl' ){
    $vars['connect'] = <<<EOF
      <div id="thankyou">Thank you for signing up! You should receive an email confirmation shortly.</div>

      <div class="joincontent">

        <form method='post' id="newsletter"  name='oi_form' action='/testmail2.php'>
          <table border="0" cellpadding="0" cellspacing="0">

          <tr>
            <td colspan="2"><p class="title">Wanderlust Mailing List Signup</p></td>
          </tr>
          <tr>
            <td width="180" valign="middle" style="padding:2px; ">
              Email
            </td>
            <td valign="middle" style="padding:2px; ">
              <input type='text' name='email'/><br />
            </td>
          </tr>

          <tr>
            <td valign="middle" style="padding:2px; ">
              First Name
            </td>
            <td valign="middle" style="padding:2px; ">
              <input type='text' name='FirstName' />
            </td>
          </tr>

          <tr>
            <td valign="middle" style="padding:2px; ">
              Last Name 
            </td>

            <td valign="middle" style="padding:2px; ">          
              <input type='text' name='LastName' /><br />
            </td>
          </tr>

          <tr>          
            <td valign="middle" style="padding:2px; ">
              How did you hear about us?
            </td>

            <td valign="middle" style="padding:2px; ">
              <select name='Howdidyouhearaboutus' size='1' >
                <option value=''></option>
                <option value='friend' >A friend told me</option>
                <option value='teacher' >A teacher told me</option>
                <option value='studio' >At my studio</option>
                <option value='magazine' >In a magazine</option>
                <option value='website' >Through your website</option>
                <option value='blog' >In a blog or other website</option>
                <option value='poster' >Saw a poster or flyer</option>
                <option value='bannerad' >Saw a banner ad</option>
                <option value='other' >Other</option>
              </select>           
            </td>
          </tr>

          <tr>
            <td valign="middle" style="padding:2px; ">
              Which event most interests you?
            </td>
            <td valign="middle" style="padding:2px; ">
              <select name='Whicheventmostinterestsyou'  size='1'>
                <option value=''></option>
                <option value='auckland' >Wanderlust Auckland</option>
                <option value='melbourne' >Wanderlust Melbourne</option>
                <option value='sydney' >Wanderlust Sydney</option>
                <option value='other' >Other Wanderlust Events</option>                
              </select>                         
            </td>
          </tr>

          <input type='hidden' name='goto' value='' />
          <input type='hidden' name='iehack' value='&#9760;' />
          <td valign="middle" style="padding:2px; ">
          <input type='submit' onClick="" id="submit" value='Subscribe' /></td>
          
          </table>
        </form>
      </div>      
EOF;
  }





  
  else {
    $vars['connect'] = <<<EOF
  
  <div id="thankyou">Thank you for signing up! You should receive an email confirmation shortly.</div>
  <div class="joincontent">
        <form method='post' id="newsletter"  name='oi_form' action='/testmail.php'>

    <table border="0" cellpadding="0" cellspacing="0">
  
      <tr>
        <td colspan="2"><p class="title">Wanderlust Mailing List Signup</p></td>
      </tr>
      <tr>
        <td width="180" valign="middle" style="padding:2px; ">Email*<span style="color:#841D0A;"></span></td>
        <td valign="middle" style="padding:2px; "><input type='text' name='email' id="email" /></td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; ">First Name<span style="color:#841D0A;"></span></td>
        <td valign="middle" style="padding:2px; "><input type='text' name='FirstName' id="firstname" /></td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; ">Last Name<span style="color:#841D0A;"></span></td>
        <td valign="middle" style="padding:2px; "><input type='text' name='LastName' id="lastname" /></td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; ">State/Province<span style="color:#841D0A;"></span></td>
        <td valign="middle" style="padding:2px; ">
          <select name='State/Prov' size='1' id="state">
          <option value=''></option>
          <option value="">------ USA ------</option>
                  <option value='AL' >AL</option>
                  <option value='AK' >AK</option>
                  <option value='AZ' >AZ</option>
                  <option value='AR' >AR</option>
                  <option value='CA' >CA</option>
                  <option value='CO' >CO</option>
                  <option value='CT' >CT</option>
                  <option value='DE' >DE</option>
                  <option value='DC' >DC</option>
                  <option value='FL' >FL</option>
                  <option value='GA' >GA</option>
                  <option value='HI' >HI</option>
                  <option value='ID' >ID</option>
                  <option value='IL' >IL</option>
                  <option value='IN' >IN</option>
                  <option value='IA' >IA</option>
                  <option value='KS' >KS</option>
                  <option value='KY' >KY</option>
                  <option value='LA' >LA</option>
                  <option value='ME' >ME</option>
                  <option value='MD' >MD</option>
                  <option value='MA' >MA</option>
                  <option value='MI' >MI</option>
                  <option value='MN' >MN</option>
                  <option value='MS' >MS</option>
                  <option value='MO' >MO</option>
                  <option value='MT' >MT</option>
                  <option value='NE' >NE</option>
                  <option value='NV' >NV</option>
                  <option value='NH' >NH</option>
                  <option value='NJ' >NJ</option>
                  <option value='NM' >NM</option>
                  <option value='NY' >NY</option>
                  <option value='NC' >NC</option>
                  <option value='ND' >ND</option>
                  <option value='OH' >OH</option>
                  <option value='OK' >OK</option>
                  <option value='OR' >OR</option>
                  <option value='PA' >PA</option>
                  <option value='RI' >RI</option>
                  <option value='SC' >SC</option>
                  <option value='SD' >SD</option>
                  <option value='TN' >TN</option>
                  <option value='TX' >TX</option>
                  <option value='UT' >UT</option>
                  <option value='VT' >VT</option>
                  <option value='VA' >VA</option>
                  <option value='WA' >WA</option>
                  <option value='WV' >WV</option>
                  <option value='WI' >WI</option>
                  <option value='WY' >WY</option>
          <option value="">----- CANADA -----</option>
                  <option value='AB' >AB</option>
                  <option value='BC' >BC</option>
                  <option value='LB' >LB</option>
                  <option value='MB' >MB</option>
                  <option value='NB' >NB</option>
                  <option value='NF' >NF</option>
                  <option value='NS' >NS</option>
                  <option value='NT' >NT</option>
                  <option value='ON' >ON</option>
                  <option value='PE' >PE</option>
                  <option value='QC' >QC</option>
                  <option value='SK' >SK</option>
                  <option value='YT' >YT</option>
          <option value="">---------------</option>
          <option value='Other' >OTHER</option>
          </select></td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; ">ZIP/Postal Code<span style="color:#841D0A;">*</span></td>
        <td valign="middle" style="padding:2px; "><input type='text' name='ZipCode' id="postal_code" /></td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; ">Country<span style="color:#841D0A;"></span></td>
        <td valign="middle" style="padding:2px; ">
          <select name='Country' size='1' id="country">
            <option value=''></option>
            <option value='United States' >United States</option>
            <option value='Canada' >Canada</option>
            <option value='Chile' >Canada</option>            
            <option value='Other' >OTHER</option>
          </select>
        </td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; ">Which event most interests you?</td>
        <td valign="middle" style="padding:2px; ">
          <select name='EventName' size='1' id="EventName">
            <option value=''></option>
            <option value='ALL' >All Events</option>
            <option value='VT' >Wanderlust Vermont</option>
            <option value='CA' >Wanderlust California</option>
            <option value='CO' >Wanderlust Colorado</option>
            <option value='BC' >Wanderlust Whistler</option>
            <option value='CH' >Wanderlust Chile</option>
            <option value='HI' >Wanderlust O'ahu</option>
            <option value='NYC' >Yoga in the City NYC</option>
            <option value='LA' >Yoga in the City LA</option>
            <option value='SF' >Yoga in the City SF</option>
          </select>
        </td>
      </tr>      
      <tr>
        <td valign="middle" style="padding:2px; ">
          How did you hear about us? </td>
        <td valign="middle" style="padding:2px; ">
          <select name='HearAbout' size='1' id="country">
            <option value=''></option>
            <option value='friend' >A friend told me</option>
            <option value='teacher' >A teacher told me</option>
            <option value='studio' >At my studio</option>
            <option value='magazine' >In a magazine</option>
            <option value='website' >Through your website</option>
            <option value='blog' >In a blog or other website</option>
            <option value='poster' >Saw a poster or flyer</option>
            <option value='bannerad' >Saw a banner ad</option>
            <option value='other' >Other</option>
          </select>        
        </td>
      </tr>
      <tr>
        <td valign="middle" style="padding:2px; font: normal normal 10px Arial, Helvetica, sans-serif; color:#545454;">
          <input type='hidden' name='goto' value='' />
          <input type='hidden' name='iehack' value='&#9760;' />
        </td>
        <td valign="middle" style="padding:2px; "><input type='submit' onClick="" id="submit" value='Subscribe' /></td>
      </tr>
   
</table>
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