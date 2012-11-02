<?php

/**
 * Helper to implementation of hook_default_box().
 */
function _kula_blog_default_box() {
  $export = array();
  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'blog_description';
  $box->title = '';
  $box->description = 'Kula Definition';
  $box->body = '<p>[ibimage==837==Original==none==self==null]</p>';
  $box->format = 1;

  $export['blog_description'] = $box;
  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'blog_links';
  $box->title = 'Our Friends';
  $box->description = 'Blog Links';
  $box->body = '<p><a style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-repeat: initial; background-attachment: initial; -webkit-background-clip: initial; -webkit-background-origin: initial; background-color: transparent; line-height: inherit; text-align: left; color: #0055aa; text-decoration: none; background-position: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" href="http://www.elephantjournal.com/">Elephant Journal</a></p><p><a href="http://www.yogajournal.com/">Yoga Journal</a></p><p><a href="http://www.yogadork.com/">Yoga Dork</a></p>';
  $box->format = 1;

  $export['blog_links'] = $box;
  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'blog_stayintheloop';
  $box->title = 'Stay in the Loop';
  $box->description = 'Blog Social Media';
  $box->body = '<div id="blog-social-links">
  	<div class="entry">
  		<a class="icon-link" href="http://www.facebook.com/wanderlust"><img class="icon mceItem" src="/sites/all/themes/wanderlust/images/grafix/fb_16.gif" alt="Wanderlust on Facebook"></a>
  		<div>
  			<a class="heading" href="http://www.facebook.com/wanderlust">Become a Fan On Facebook</a>
  			<p class="subhead">Post to our wall</p>
  		</div>
  	</div>
  	<div class="entry">
  		<a href="http://www.twitter.com/wanderlustfest"><img class="icon mceItem" src="/sites/all/themes/wanderlust/images/grafix/twitter_16.gif" alt="Wanderlust on Twitter"></a>
  		<div>
  			<a class="heading" href="http://www.twitter.com/wanderlustfest">Do you Tweet?</a>
  			<p class="subhead">Follow us on Twitter</p>
  		</div>
  	</div>
  	<div class="entry">
  		<a href="/feeds/blog/"><img class="icon mceItem" src="/sites/all/themes/wanderlust/images/grafix/rss_16.gif" alt="Wanderlust RSS"></a>
  		<div>
  			<a class="heading" href="/feeds/blog/">Subscribe for FREE!</a>
  			<p class="subhead">Get RSS updates</p>
  		</div>
  	</div>
  </div>';
  $box->format = 1;

  $export['blog_stayintheloop'] = $box;
  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'blog_tix';
  $box->title = 'Tickets';
  $box->description = 'Buy Tickets';
  $box->body = '<p>buy tix</p>';
  $box->format = 1;

  $export['blog_tix'] = $box;
  return $export;
}

/**
 * Helper to implementation of hook_content_default_fields().
 */
function _kula_blog_content_default_fields() {
  $fields = array();

  // Exported field: field_blog_image
  $fields[] = array(
    'field_name' => 'field_blog_image',
    'type_name' => 'blog',
    'display_settings' => array(
      'weight' => '31',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'hidden',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'hidden',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'filefield',
    'required' => '0',
    'multiple' => '0',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => '0',
    'list_default' => 1,
    'description_field' => '0',
    'widget' => array(
      'file_extensions' => 'png gif jpg jpeg',
      'file_path' => 'blogimages',
      'progress_indicator' => 'bar',
      'max_filesize_per_file' => '',
      'max_filesize_per_node' => '',
      'max_resolution' => '0',
      'min_resolution' => '0',
      'alt' => '',
      'custom_alt' => 0,
      'title' => '',
      'custom_title' => 0,
      'title_type' => 'textfield',
      'default_image' => NULL,
      'use_default_image' => 0,
      'label' => 'Upload Blog Image',
      'weight' => '31',
      'description' => '',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Translatables
  array(
    t('Upload Blog Image'),
  );

  return $fields;
}

/**
 * Helper to implementation of hook_ctools_plugin_api().
 */
function _kula_blog_ctools_plugin_api() {
  $args = func_get_args();
  $module = array_shift($args);
  $api = array_shift($args);
  if ($module == "boxes" && $api == "box") {
    return array("version" => 1);
  }
}
