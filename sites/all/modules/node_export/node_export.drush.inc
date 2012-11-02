<?php
<<<<<<< HEAD
// $Id: node_export.drush.inc,v 1.1.2.15 2010/12/09 05:53:56 danielb Exp $
=======
// $Id: node_export.drush.inc,v 1.1.2.8 2010/01/26 03:03:39 danielb Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * @file
 *   Drush support for node_export.
 */

/**
 * Implementation of hook_drush_command().
 */
function node_export_drush_command() {
  $items = array();

<<<<<<< HEAD
  $items['node-export-export'] = array(
    'callback' => 'node_export_drush_callback_export',
    'description' => "Export nodes by Node ID.",
    'arguments' => array(
      'nids' => "A list of space-separated node IDs to export.",
    ),
    'options' => array(
      '--file' => "The filename of the output file.  If supplied, the node code will be exported to that file, otherwise it will export to stdout.",
      '--status' => "Filter for 'status'; A boolean value (0 or 1) indicating whether the node is published (visible to non-administrators).",
      '--promote' => "Filter for 'promote'; A boolean value (0 or 1) indicating whether the node should be displayed on the front page.",
      '--sticky' => "Filter for 'sticky'; A boolean value (0 or 1) indicating whether the node should be displayed at the top of lists in which it appears.",
      '--translate' => "Filter for 'translate'; A boolean value (0 or 1) indicating whether the node translation needs to be updated.",
      '--language' => "Filter for 'language'; The language code (e.g. de or en-US) of this node.",
      '--type' => "Filter for 'type'; The machine-readable name (e.g. story or page) of the type of this node.",
    ),
    'examples' => array(
      'drush node-export-export 45 46 47 --file=filename' =>
        "Export nodes with node IDs 45, 46, and 47 to the file with the supplied filename.",
      'drush node-export-export --type=story,page --file=filename' =>
        "Export nodes of type story and page to the file with the supplied filename.",
      //'drush node-export-export 45 46 47 > filename' =>
      //  "Export nodes with node IDs 45, 46, and 47 to the file with the supplied filename.  NOTE: Error messages may be output to the file.",
    ),
  );
  $items['node-export-import'] = array(
    'callback' => 'node_export_drush_callback_import',
    'description' => "Import nodes from a previous export.",
    'options' => array(
      '--uid' => "User ID of user to save nodes as. If not given will use the user with an ID of 1. You may specify 0 for the Anonymous user.",
      '--file' => "The filename of the input file.  If supplied, the node code will be imported from that file, otherwise it will import to stdin.",
    ),
    'examples' => array(
      'drush node-export-import --file=filename' =>
        'Import nodes from the file with the given filename.',
      'drush node-export-import --uid=2 --file=filename' =>
        "Import nodes from the file with the given filename.  The author of the nodes will be set to the user that has the user ID of 2.",
      //'drush node-export-import < filename' =>
      //  'Import nodes from the file with the given filename.',
    ),
  );

  // Add aliases for usability.
  node_export_drush_command_add_alias($items, 'node-export-export', 'node-export');
  node_export_drush_command_add_alias($items, 'node-export-export', 'ne-export');
  node_export_drush_command_add_alias($items, 'node-export-import', 'ne-import');
=======
  $items['node_export'] = array(
    'callback' => 'node_export_drush_callback_export',
    'description' => "Export nodes.",
    'arguments' => array(
      'node ids' => 'A list of node ids to export.',
    ),    
    'options' => array(
      '--file' => "A filename to write the node data to.",
    ),
    'examples' => array(
      'drush node_export 45 46 47 --file=filename' => 
        'Export nodes 45, 46, and 47 to given filename.',
    ),
    'drush node_export 45 46 47 > filename' => 
      'Export nodes 45, 46, and 47 to given filename. (Runs the risk of error messages going to that file.)',
  );
  $items['node_export import'] = array(
    'callback' => 'node_export_drush_callback_import',
    'description' => "Import node code from a previous export.",
    'options' => array(
      '--uid' => "Uid of user to save nodes as. If not given will use 1. You may specify 0 for the Anonymous user.",
    ),
    'examples' => array(
      'drush node_export import < filename' => 
        'Import nodes from given filename.',
      'drush node_export import --uid=2 < filename' => 
        'Import nodes from given filename, saving them with uid 2 as author.',
    ),
  );
  $items['node_export type'] = array(
    'callback' => 'node_export_drush_callback_export_type',
    'description' => "Export all nodes in the given content type.",
    'arguments' => array(
      'type' => 'The content type to export.',
    ),    
    'options' => array(
      '--file' => "A filename to write the node data to.",
    ),
    'examples' => array(
      'drush node_export type story --file=filename' => 
        'Export all nodes of type \'story\' to given filename.',
    ),
    'drush node_export type story > filename' => 
      'Export all nodes of type \'story\' to given filename. (Runs the risk of error messages going to that file.)',
  );
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

  return $items;
}

/**
<<<<<<< HEAD
 * A function to help alias commands as other commands.
 */
function node_export_drush_command_add_alias(&$items, $command, $alias) {
   // Create a property on the command for adding aliases, if not there.
   if (!isset($items[$command]['node_export command aliases'])) {
      $items[$command]['node_export command aliases'] = array();
   }
   // Record the alias into that property.
   $items[$command]['node_export command aliases'][] = $alias;
   // Create the alias as a new command.
   $items[$alias] = $items[$command];
   // Indicate what this new command is an alias for.
   $items[$alias]['node_export alias for'] = $command;
}

/**
=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 * Implementation of hook_drush_help().
 *
 * This function is called whenever a drush user calls
 * 'drush help <name-of-your-command>'
 *
 * @param
 *   A string with the help section (prepend with 'drush:')
 *
 * @return
 *   A string with the help text for your command.
 */
function node_export_drush_help($section) {
<<<<<<< HEAD
  // This is to prevent duplication of information from hook_drush_command().
  $commands = node_export_drush_command();
  foreach ($commands as $command => $command_info) {
    if ($section == 'drush:'. $command) {
      $out = $command_info['description'];
      if (isset($command_info['node_export alias for'])) {
        $output .= "\nThis command is an alias for ";
        $output .= $command_info['node_export alias for'] .".";
      }
      if (isset($command_info['node_export command aliases'])) {
        if (count($command_info['node_export command aliases']) == 1) {
          $output .= "\nThis command can be called by it's alias; ";
          $output .= $command_info['node_export command aliases'] .".";
        }
        else {
          $last_alias = array_pop($command_info['node_export command aliases']);
          $output .= "\nThis command can be called by it's aliases; ";
          $output .= implode(", ", $command_info['node_export command aliases']);
          $output .= ", or ". $last_alias .".";
        }
      }
      $out .= "\n\nArguments:";
      if (isset($command_info['arguments'])) {
        foreach ($command_info['arguments'] as $k => $v) {
          $out .= "\n  ". $k ." : ". $v;
        }
      }
      $out .= "\n\nOptions:";
      if (isset($command_info['options'])) {
        foreach ($command_info['options'] as $k => $v) {
          $out .= "\n  ". $k ." : ". $v;
        }
      }
      $out .= "\n\nExamples:";
      if (isset($command_info['examples'])) {
        foreach ($command_info['examples'] as $k => $v) {
          $out .= "\n  \'". $k ."\' : ". $v;
        }
      }
      return dt($out);
    }
=======
  switch ($section) {
    case 'drush:node_export':
      return dt("Exports nodes. Usage: 'drush node_export > filename'.");
    case 'drush:node_export import':
      return dt("Imports nodes that have been exported. Usage: 'drush node_export import < filename'.");
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }
}

/**
 * Drush command callback.
 *
 * Export nodes.
 */
function node_export_drush_callback_export() {
<<<<<<< HEAD

  // Set up an array of nid_filters.
  $nid_filters = array();

  // The base nids.
  $args = array_filter(func_get_args(), 'is_numeric');
  if ($args) {
    $nid_filters['base'] = $args;
  }

  // Filter for values in the node table (except for nids).
  $filters = array(
    'status' => "%d",
    'promote' => "%d",
    'sticky' => "%d",
    'translate' => "%d",
    'language' => "'%s'",
    'type' => "'%s'",
  );
  $wheres = array();
  $args = array();
  foreach ($filters as $filter => $filter_type) {
    $filter_option = drush_get_option($filter);
    if ($filter_option) {
      $filter_option_values = explode(",", $filter_option);
      $filter_option_placeholders = array();
      foreach ($filter_option_values as $v) {
        $filter_option_placeholders[] = $filter_type;
      }
      $wheres[] = $filter ." IN (". implode(", ", $filter_option_placeholders) .")";
      $args = $args + $filter_option_values;
    }
  }
  if (!empty($wheres)) {
    $query = "SELECT nid FROM {node} WHERE (". implode(") AND (", $wheres) .")";
    $result = db_query($query, $args);
    while ($row = db_fetch_array($result)) {
      $nid_filters['filters'][] = $row['nid'];
    }
  }

  if (count($nid_filters) > 1) {
     // Compute the intersect of all $nid_filters if there are more than one.
    $nids = call_user_func_array('array_intersect', $nid_filters);
  }
  else if (count($nid_filters) == 1) {
    // Use the only filter if there is only one.
    $nids = reset($nid_filters);
  }
  else {
    // Is there are no filters at all, do a query to get all nids.
    $query = "SELECT nid FROM {node}";
    $result = db_query($query);
    $nids = array();
    while ($row = db_fetch_array($result)) {
      $nids[] = $row['nid'];
    }
  }

  if (empty($nids)) {
    drush_set_error('DRUSH_NOT_COMPLETED', "No nodes found.");
  }

  $data = node_export_node_bulk($nids, TRUE);

  $filename = drush_get_option('file');

  if ($filename) {
    // Output data to file. Note this only takes a flat filename for the current directory.
    // If file exists, ask for whether to overwrite.
    if (file_exists($filename)) {
      if (!drush_confirm(dt("File $filename exists. Do you really want to overwrite?"))) {
        return;
=======
  $commands = func_get_args();
  
  $nids = array_filter($commands, 'is_numeric');
  
  $data = node_export_node_bulk($nids, TRUE);
  
  $filename = drush_get_option('file');
  
  if ($filename) {
    // Output data to file. Note this only takes a flat filename for the current directory.
    // If file exists, ask for whether to overwrite
    if (file_exists($filename)) {
      if (!drush_confirm(dt('File ' . $filename . ' exists. Do you really want to overwrite?'))) {
        return; 
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      }
    }
    // Write the file.
    file_put_contents($filename, $data);
  }
  else {
<<<<<<< HEAD
    // stdout.
    drush_print_r($data);
=======
    // Print to terminal.
    drush_print_r($data);   
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }
}

/**
 * Drush command callback.
 *
 * Import nodes from data.
 */
function node_export_drush_callback_import() {
<<<<<<< HEAD
=======
  $commands = func_get_args();
    
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  // Switch to admin or the specified user so imported nodes are not anonymous.
  $uid = drush_get_option('uid');
  // Test on NULL so uid may be given as 0.
  if (is_null($uid)) {
    $uid = 1;
  }
<<<<<<< HEAD
  // User 0 is already loaded.
=======
  // uid 0 is already loaded.
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  if ($uid != 0) {
    global $user;
    $user = user_load($uid);
  }
<<<<<<< HEAD

  $filename = drush_get_option('file');

  if ($filename) {
    $node_code = file_get_contents($filename, "r");
  }
  else {
    $node_code = file_get_contents("php://stdin", "r");
  }
=======
  
  $node_code = file_get_contents("php://stdin", "r");
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

  if (!empty($node_code)) {
    $result = node_export_import($node_code, 'save-edit', FALSE, 'drush_print', 'dt');
    if ($result === FALSE) {
      // There was a problem with types?
<<<<<<< HEAD
      drush_set_error('DRUSH_NOT_COMPLETED', "A problem was found with the import data. Check that the node types and all the required modules exist.");
=======
      drush_set_error('DRUSH_NOT_COMPLETED', 'Problem found with the import file. Check the node types exist.');
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    }
  }

}

<<<<<<< HEAD
=======
/**
 * Drush comand callback.
 *
 * Export nodes of the provided type.
*/
function node_export_drush_callback_export_type($type) {
  if ($type == NULL) {
    drush_set_error('DRUSH_NOT_COMPLETED', 'Please supply the type of nodes you want to export.');
  }
  $file = drush_get_option('file');
  
  $nids = array();
  $sql = "SELECT nid FROM {node} WHERE type = '%s'";
  $rs = db_query($sql, $type);
  
  while ($row = db_fetch_array($rs)) {
    $nids[] = $row['nid'];
  }
  
  if (!empty($nids)) {
    call_user_func_array('node_export_drush_callback_export', $nids);
  }
  else {
    drush_set_error('DRUSH_NOT_COMPLETED', "No nodes found of type $type.");
  }
}

>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
