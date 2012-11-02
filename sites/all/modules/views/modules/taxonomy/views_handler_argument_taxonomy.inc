<?php
<<<<<<< HEAD
=======
// $Id: views_handler_argument_taxonomy.inc,v 1.1 2008/09/03 19:21:30 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * Argument handler for basic taxonomy tid.
 */
class views_handler_argument_taxonomy extends views_handler_argument {

  /**
   * Override the behavior of title(). Get the title of the node.
   */
  function title() {
    $term = taxonomy_get_term($this->argument);
    if (!empty($term)) {
      return check_plain($term->name);
    }
    // TODO review text
    return t('No name');
  }
}
