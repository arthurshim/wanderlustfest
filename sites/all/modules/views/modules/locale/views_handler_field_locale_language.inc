<?php
<<<<<<< HEAD
=======
// $Id: views_handler_field_locale_language.inc,v 1.1 2009/02/20 23:02:09 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * Field handler to translate a language into its readable form.
 */
class views_handler_field_locale_language extends views_handler_field {
<<<<<<< HEAD
  function option_definition() {
    $options = parent::option_definition();
    $options['native_language'] = array('default' => FALSE);

    return $options;
  }

  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);
    $form['native_language'] = array(
      '#title' => t('Native language'),
      '#type' => 'checkbox',
      '#default_value' => $this->options['native_language'],
      '#description' => t('If enabled, the native name of the language will be displayed'),
    );
  }

  function render($values) {
    $languages = locale_language_list(empty($this->$options['native_language']) ? 'name' : 'native');
    return isset($languages[$values->{$this->field_alias}]) ? $languages[$values->{$this->field_alias}] : '';
=======
  function render($values) {
    $languages = language_list();
    return isset($languages[$values->{$this->field_alias}]) ? $languages[$values->{$this->field_alias}]->name : '';
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }
}
