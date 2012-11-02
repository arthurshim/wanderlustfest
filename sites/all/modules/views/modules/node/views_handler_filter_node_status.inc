<?php
<<<<<<< HEAD
=======
// $Id: views_handler_filter_node_status.inc,v 1.2 2009/06/03 00:26:39 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * Filter by published status
 */
class views_handler_filter_node_status extends views_handler_filter {
  function admin_summary() { }
  function operator_form() { }

  function query() {
    $table = $this->ensure_my_table();
<<<<<<< HEAD
    $this->query->add_where($this->options['group'], "$table.status = 1 OR ($table.uid = ***CURRENT_USER*** AND ***CURRENT_USER*** <> 0) OR ***ADMINISTER_NODES*** = 1");
=======
    $this->query->add_where($this->options['group'], "$table.status <> 0 OR ($table.uid = ***CURRENT_USER*** AND ***CURRENT_USER*** <> 0) OR ***ADMINISTER_NODES*** = 1");
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }
}
