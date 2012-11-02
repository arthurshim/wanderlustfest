<?php
<<<<<<< HEAD
=======
// $Id: search.views_convert.inc,v 1.2 2009/06/30 19:14:27 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * @file
 * Field conversion for fields handled by this module.
 */

function search_views_convert($display, $type, &$view, $field, $id = NULL) {
  switch ($type) {
    case 'filter':
      switch ($field['tablename']) {
        case 'temp_search_results':
          switch ($field['field']) {
            case 'word':
              $view->set_item_option($display, 'filter', $id, 'table', 'search_index');
              $view->set_item_option($display, 'filter', $id, 'field', 'keys');
              break;
          }
          break;
      }
      break;
  }
}
