<?php
<<<<<<< HEAD
=======
// $Id: views_handler_field_comment_link_reply.inc,v 1.1 2008/09/03 19:21:29 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * Field handler to present a link to delete a node.
 */
class views_handler_field_comment_link_reply extends views_handler_field_comment_link {
  function render($values) {
    //check for permission to reply to comments
    if (!user_access('post comments')) {
      return;
    }
    $text = !empty($this->options['text']) ? $this->options['text'] : t('reply');
    return l($text, "comment/reply/" . $values->{$this->aliases['nid']} . '/' . $values->{$this->aliases['cid']});
  }
}
