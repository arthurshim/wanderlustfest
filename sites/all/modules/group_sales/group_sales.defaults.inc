<?php

/**
 * Helper to implementation of hook_default_box().
 */
function _group_sales_default_box() {
  $export = array();
  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'groupsales';
  $box->title = 'Group Sales';
  $box->description = 'Group Sales';
  $box->body = '<p><em>New for 2010</em>, Wanderlust is pleased to offer discounted rates for groups of <a name="group"><strong>8 or more people</strong></a>. Gather your fellow yogis, friends &amp; family and come to Wanderlust together! The discount varies depending on the size of your group. &nbsp;We are also offering <em>group ticket and housing packages so&nbsp;</em>you can stay together in a <strong>beautiful house</strong> <em>right in the Valley</em>! &nbsp;Our mountain cabins sleep 9 to 16 people, feature modern amenities along with multiple bedrooms, bathrooms and full kitchens.&nbsp;</p><p class="heading5">INSTRUCTIONS</p><p>Simply <em>fill out our </em><a href="/group-sales">Group Sales</a><em> form</em>&nbsp;and one of our representatives will get back to you shortly. Each group must have a <em>group leader</em> who will be the point of contact. The <em>group leader </em>will provide names of all members in the group, purchase tickets for all members, and communicate with group members. The entire group must be registered as <strong>one unit</strong> at one time.&nbsp;Once you\'ve purchased tickets for your group, no additions to the group can be made.&nbsp;</p><p class="heading5">CLASS SCHEDULING</p><p>Each member of the group will be able to register for their preferred classes through Wanderlust\'s scheduling system, which will be live on March 29, 2010. &nbsp;The group does not need to select the same classes.&nbsp;</p><p class="heading5">GROUP PRICING</p><table border="0"><tbody><tr class="labels"><td style="width: 100px;">Number in Group</td><td style="width: 100px;">Sage</td><td style="width: 100px;">Seeker</td></tr><tr><td>1</td><td>$420</td><td>$340.00</td></tr><tr><td>8-11</td><td>$405.00</td><td>$323.00</td></tr><tr><td>12-15</td><td>$396.00</td><td>$316.20</td></tr><tr><td>16+</td><td>$382.50</td><td>$306.00</td></tr></tbody></table><p>&nbsp;</p><p class="heading5">CONTACT GROUP SALES</p><p>For more information or to submit a request, please visit&nbsp;<a href="/group-sales">Group Sales</a>.</p>';
  $box->format = 1;

  $export['groupsales'] = $box;
  return $export;
}

/**
 * Helper to implementation of hook_ctools_plugin_api().
 */
function _group_sales_ctools_plugin_api() {
  $args = func_get_args();
  $module = array_shift($args);
  $api = array_shift($args);
  if ($module == "boxes" && $api == "box") {
    return array("version" => 1);
  }
}
