<?php
<<<<<<< HEAD
=======
// $Id: views_handler_field_comment_link_edit.inc,v 1.1 2008/09/03 19:21:29 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * Field handler to present a link node edit.
 */
class views_handler_field_comment_link_edit extends views_handler_field_comment_link {
  function construct() {
    parent::construct();
    $this->additional_fields['uid'] = 'uid';
  }

<<<<<<< HEAD
  function option_definition() {
    $options = parent::option_definition();
    $options['destination'] = array('default' => FALSE);

    return $options;
  }

  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);

    $form['destination'] = array(
      '#type' => 'checkbox',
      '#title' => t('Use destination'),
      '#description' => t('Add destination to the link'),
      '#default_value' => $this->options['destination'],
    );
  }

=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  function render($values) {
    // ensure user has access to edit this comment.
    $comment = new stdClass();
    $comment->cid = $values->{$this->aliases['cid']};
    $comment->uid = $values->{$this->aliases['uid']};
    if (!comment_access('edit', $comment)) {
      return;
    }

    $text = !empty($this->options['text']) ? $this->options['text'] : t('edit');
<<<<<<< HEAD
    if (!$this->options['destination']) {
      return l($text, "comment/edit/" . $values->{$this->aliases['cid']});
    }
    else {
      return l($text, "comment/edit/" . $values->{$this->aliases['cid']}, array('query' => drupal_get_destination()));
    }
=======
    return l($text, "comment/edit/" . $values->{$this->aliases['cid']});
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }
}

