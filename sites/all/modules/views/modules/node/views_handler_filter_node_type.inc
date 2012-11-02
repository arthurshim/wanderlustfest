<?php
<<<<<<< HEAD
=======
// $Id: views_handler_filter_node_type.inc,v 1.2 2009/06/02 17:57:48 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * Filter by node type
 */
class views_handler_filter_node_type extends views_handler_filter_in_operator {
  function get_value_options() {
    if (!isset($this->value_options)) {
      $this->value_title = t('Node type');
      $types = node_get_types();
      foreach ($types as $type => $info) {
        $options[$type] = t($info->name);
      }
<<<<<<< HEAD
      asort($options);
=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      $this->value_options = $options;
    }
  }
}
