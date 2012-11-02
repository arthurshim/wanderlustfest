<?php
<<<<<<< HEAD
=======
// $Id: views_handler_argument_user_uid.inc,v 1.1 2008/09/03 19:21:30 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * @file
 * Provide user uid argument handler.
 */

/**
 * Argument handler to accept a user id.
 */
class views_handler_argument_user_uid extends views_handler_argument_numeric {
  /**
   * Override the behavior of title(). Get the name of the user.
   */
  function title_query() {
    if (!$this->argument) {
      return array(variable_get('anonymous', t('Anonymous')));
    }

    $titles = array();
    $placeholders = implode(', ', array_fill(0, sizeof($this->value), '%d'));

    $result = db_query("SELECT u.name FROM {users} u WHERE u.uid IN ($placeholders)", $this->value);
    while ($term = db_fetch_object($result)) {
      $titles[] = check_plain($term->name);
    }
    return $titles;
  }
}

