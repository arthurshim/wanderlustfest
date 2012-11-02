<?php
<<<<<<< HEAD

/**
 * @file
 * Webform module page break component.
 */

/**
 * Implements _webform_defaults_component().
=======
// $Id: pagebreak.inc,v 1.3.2.4 2009/01/09 08:31:06 quicksketch Exp $

/**
 * @file
 *   Webform module page break component.
 */

/**
 * Create a default pagebreak component.
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 */
function _webform_defaults_pagebreak() {
  return array(
    'name' => '',
    'form_key' => NULL,
    'pid' => 0,
    'weight' => 0,
<<<<<<< HEAD
    'extra' => array(
      'private' => FALSE,
    ),
=======
    'extra' => array(),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  );
}

/**
<<<<<<< HEAD
 * Implements _webform_theme_component().
 */
function _webform_theme_pagebreak() {
  return array(
    'webform_display_pagebreak' => array(
      'arguments' => array('element' => NULL),
      'file' => 'components/pagebreak.inc',
    ),
  );
}

/**
 * Implements _webform_edit_component().
 */
function _webform_edit_pagebreak($component) {
  $form = array();
  // Force the parent to always be root.
  $form['position']['pid'] = array(
    '#type' => 'hidden',
    '#value' => '0',
  );

  $form['extra']['description'] = array();  // No description.
  $form['display'] = array('#type' => 'markup'); // Hide the display options.

=======
 * Create a set of form items to be displayed on the form for editing this
 * component. Use care naming the form items, as this correlates directly to the
 * database schema. The component "Name" and "Description" fields are added to
 * every component type and are not necessary to specify here (although they may
 * be overridden if desired).
 * @return
 *   An array of form items to be displayed on the edit component page.
 */
function _webform_edit_pagebreak($currfield) {
  drupal_set_message(t('Use caution when combining the pagebreak and file components. File components will not be submitted unless they are after the last pagebreak in the form.'), 'warning');

  $form = array();
  // No description.
  $form['extra']['description'] = array(
      '#type' => 'hidden',
      '#value' => '',
  );
  // Force the parent to always be root.
  $form['advanced']['pid'] = array(
      '#type' => 'hidden',
      '#value' => '0',
  );
  // Never mandatory.
  $form['advanced']['mandatory'] = array(
      '#type' => 'hidden',
      '#value' => '',
  );
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  return $form;
}

/**
<<<<<<< HEAD
 * Implements _webform_render_component().
 */
function _webform_render_pagebreak($component, $value = NULL, $filter = TRUE) {
  $element = array(
=======
 * Module specific instance of hook_help().
 */
function _webform_help_pagebreak($section) {
  switch ($section) {
    case 'admin/settings/webform#pagebreak_description':
      return t('Break up a multi-page form.');
  }
}

function _webform_render_pagebreak($component) {
  $form = array();
  // Render page breaks as hidden elements so that they can be displayed in
  // emails as separators.
  $form = array(
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    '#type' => 'hidden',
    '#value' => $component['name'],
    '#weight' => $component['weight'],
  );
<<<<<<< HEAD
  return $element;
}

/**
 * Implements _webform_render_component().
 */
function _webform_display_pagebreak($component, $value = NULL, $format = 'html') {
  $element = array(
    '#theme' => 'webform_display_pagebreak',
    '#title' => $component['name'],
    '#weight' => $component['weight'],
    '#format' => $format,
    '#webform_component' => $component,
  );
  return $element;
}

/**
 * Format the text output data for this component.
 */
function theme_webform_display_pagebreak($element) {
  return $element['#format'] == 'html' ? '<h2 class="webform-page">' . check_plain($element['#title']) . '</h2>' : "--" . $element['#title'] . "--\n";
=======
  return $form;
}

/**
 * Module specific instance of hook_theme().
 */
function _webform_theme_pagebreak() {
  return array(
    'webform_mail_pagebreak' => array(
      'arguments' => array('data' => NULL, 'component' => NULL),
    ),
  );
}

/**
 * Format the output of e-mailed data for this component.
 *
 * @param $data
 *   A string or array of the submitted data.
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @return
 *   Textual output to be included in the email.
 */
function theme_webform_mail_pagebreak($data, $component) {
  return "\n-- ". $component['name'] ." --\n";
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
}
