<?php
// $Id$

/**
 * @file
 * Administration page callbacks for the unified_login module.
 */

/**
 * Form builder. Configure unified login.
 *
 * @ingroup forms
 * @see system_settings_form().
 */
function unified_login_admin_settings() {
	$form['unified_login_API_key'] = array(
		'#type' => 'textfield',
		'#title' => t('API Key'),
		'#weight' => 10,
		'#default_value' => variable_get('unified_login_API_key', t('undefined')),
		'#description' => t('Your unique API key identifies your site and event(s). If you don\'t know your API key, ask your SourceSpring account rep for one.'),
	);
	$form['unified_login_SSURL'] = array(
		'#type' => 'textfield',
		'#title' => t('SourceSpring URL'),
		'#weight' => 11,
		'#default_value' => variable_get('unified_login_SSURL', t('undefined')),
		'#description' => t('Specify which URL to use for communication with SourceSpring.'),
	);

	return system_settings_form($form);
}