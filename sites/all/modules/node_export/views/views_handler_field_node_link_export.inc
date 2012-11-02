<?php
<<<<<<< HEAD
// $Id: views_handler_field_node_link_export.inc,v 1.1.2.2.2.6 2010/10/29 00:32:25 danielb Exp $
=======
// $Id: views_handler_field_node_link_export.inc,v 1.1.2.2.2.5 2010/01/26 03:03:39 danielb Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * @file
 * The Node Export views field handler.
 */

/**
 * Field handler to present a export node link.
 *
 * Closely modeled after views/modules/node/views_handler_field_node_link_edit.inc
 */
class views_handler_field_node_link_export extends views_handler_field_node_link {
  function construct() {
    parent::construct();
    $this->additional_fields['uid'] = 'uid';
    $this->additional_fields['type'] = 'type';
    $this->additional_fields['format'] = array('table' => 'node_revisions', 'field' => 'format');
  }

  function render($values) {
    // Insure that user has access to export this node.
    $node = new stdClass();
    $node->nid = $values->{$this->aliases['nid']};
    $node->uid = $values->{$this->aliases['uid']};
    $node->type = $values->{$this->aliases['type']};
    $node->format = $values->{$this->aliases['format']};
    $node->status = 1; // unpublished nodes ignore access control
<<<<<<< HEAD
    if (!node_export_access($node)) {
=======
    if (!export_access($node)) {
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      return;
    }

    $text = !empty($this->options['text']) ? $this->options['text'] : t('export');
    return l($text, "node/$node->nid/export", array('query' => drupal_get_destination()));
  }
}
