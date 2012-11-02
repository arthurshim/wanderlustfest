<?php
<<<<<<< HEAD
=======
// $Id: views_handler_argument_vocabulary_vid.inc,v 1.1 2008/09/03 19:21:30 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * Argument handler to accept a vocabulary id.
 */
class views_handler_argument_vocabulary_vid extends views_handler_argument {
  /**
<<<<<<< HEAD
   * Override the behavior of title(). Get the name of the vocabulary.
=======
   * Override the behavior of title(). Get the name of the user.
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
   */
  function title() {
    $title = db_result(db_query("SELECT v.name FROM {vocabulary} v WHERE v.vid = %d", $this->argument));

    if (empty($title)) {
      return t('No vocabulary');
    }

    return check_plain($title);
  }
}
