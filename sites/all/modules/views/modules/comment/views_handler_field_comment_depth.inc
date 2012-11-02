<?php
<<<<<<< HEAD
=======
// $Id: views_handler_field_comment_depth.inc,v 1.1 2008/09/03 19:21:29 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * Field handler to display the depth of a comment
 */
class views_handler_field_comment_depth extends views_handler_field {
  /**
   * Work out the depth of this comment
   */
  function render($values) {
    return count(explode('.', $values->comments_thread)) - 1;
  }
}

