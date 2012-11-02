<?php
<<<<<<< HEAD
=======
// $Id: views_handler_argument_locale_language.inc,v 1.1 2009/02/20 23:02:09 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * Argument handler to accept a language.
 */
class views_handler_argument_locale_language extends views_handler_argument {
  function construct() {
    parent::construct('language');
  }

  /**
   * Override the behavior of summary_name(). Get the user friendly version
   * of the language.
   */
  function summary_name($data) {
    return $this->locale_language($data->{$this->name_alias});
  }

  /**
   * Override the behavior of title(). Get the user friendly version
   * of the language.
   */
  function title() {
    return $this->locale_language($this->argument);
  }

  function locale_language($langcode) {
    $languages = locale_language_list();
    return isset($languages[$langcode]) ? $languages[$langcode] : t('Unknown language');
  }
}

