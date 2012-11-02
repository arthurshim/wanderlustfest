<?php
<<<<<<< HEAD
=======
// $Id: views_handler_filter_node_tnid_child.inc,v 1.1 2008/12/02 18:57:27 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * Filter by whether the node is not the original translation.
 */
class views_handler_filter_node_tnid_child extends views_handler_filter {
  function admin_summary() { }
  function operator_form(&$form, &$form_state) { }
  function can_expose() { return FALSE; }

  function query() {
    $table = $this->ensure_my_table();
    $this->query->add_where($this->options['group'], "$table.tnid <> $table.nid AND $table.tnid > 0");
  }
}

