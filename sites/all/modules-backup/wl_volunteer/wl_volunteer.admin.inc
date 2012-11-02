<?php
// $Id$

/**
 * @file
 * Administration page callbacks for the unified_login module.
 */

/**
 * Form builder. Configure wl_volunteer.
 *
 * @ingroup forms
 * @see system_settings_form().
 */
function wl_volunteer_admin_settings() {
	$form['wl_volunteer_setting1'] = array(
		'#type' => 'textfield',
		'#title' => t('Field #1'),
		'#weight' => 10,
		'#default_value' => variable_get('wl_volunteer_setting1', t('undefined')),
		'#description' => t('A placeholder field for an admin setting.'),
	);
	$form['wl_volunteer_setting2'] = array(
		'#type' => 'textfield',
		'#title' => t('Field #2'),
		'#weight' => 11,
		'#default_value' => variable_get('wl_volunteer_setting2', t('undefined')),
		'#description' => t('A placeholder field for an admin setting.'),
	);

	return system_settings_form($form);
}