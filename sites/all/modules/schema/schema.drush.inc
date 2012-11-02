<?php

/**
 * @file
 *   Schema drush commands.
 */

/**
 * Implementation of hook_drush_command().
 */
function schema_drush_command() {
  $items = array();

  // the key in the $items array is the name of the command.
  $items['schema-inspect'] = array(
    'description' => "Show the Drupal schema definition for table(s)",
    'arguments' => array(
      'tables' => 'A comma delimited list of table names',
    ),
  );
  $items['schema-describe'] = array(
    'description' => 'Describe the schema(s) defined by a module\'s hook_schema().',
    'core' => array(6, 7),
    'arguments' => array(
      'module' => 'The name of the module to describe.',
      'optional' => TRUE,
    ),
    'examples' => array(
      'drush schema-describe node' => 'Displays the schema definitions for the node module.',
    ),
  );  
  return $items;
}

/**
 * Implementation of hook_drush_help().
 */
function schema_drush_help($section) {
  switch ($section) {
    case 'drush:schema-inspect':
      return dt("Show the Drupal schema definition for table(s).");
  }
}

/**
 * A drush command callback.
 */
function drush_schema_inspect() {
  $args = func_get_args();
  $names = explode(',', $args[0]);
  foreach ($names as $name) {
    if ($table = schema_invoke('inspect', $name)) {
      $output = schema_phpprint_table($name, $table[$name]);
      drush_print($output);
    }
    else {
      drush_set_error(dt('Mising table: @table', array('@table' => $name)));
    }
  }
}

/**
 * Command callback for drush schema-describe.
 */
function drush_schema_describe($module = NULL) {
  $schemas = drupal_get_schema_unprocessed($module);
  if (!empty($schemas)) {
    foreach ($schemas as $tablename => $table) {
      $rows = array();
      drush_print(str_repeat('-', 80));
      drush_print($tablename . ' - ' . $table['description']);
      drush_print(str_repeat('-', 80));
      $rows[] = array('field', 'description', 'type');
      foreach ($table['fields'] as $fieldname => $field) {
        $rows[] = array($fieldname, $field['description'], $field['type']);
      }
      drush_print_table($rows, TRUE);
    }
  } else {
    // Since no module was specified, show the user a list to choose from.
    module_load_all_includes('install');
    $modules = array();
    foreach (module_implements('schema') as $module_name) {
      $modules[$module_name] = $module_name;
    }
    $choice = drush_choice($modules, 'Enter a number to choose which schema to describe', '!key');
    if ($choice !== FALSE) {
      drush_schema_describe($choice);
    }
  }
}