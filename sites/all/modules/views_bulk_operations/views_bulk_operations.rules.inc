<?php
<<<<<<< HEAD

/**
 * Implementation of hook_rules_action_info().
 */
function views_bulk_operations_rules_action_info() {
  $actions = array();

  // Execute VBO programmatically.
  foreach (module_invoke_all('views_bulk_operations_object_info') as $type => $info) {
    $actions['views_bulk_operations_rules_action_' . $type] = array(
      'label' => t('Use !type object to execute a VBO programmatically', array('!type' => $type)),
      'arguments' => array(
        'object' => array(
          'type' => $type,
          'label' => t('Object'),
          'description' => t('The chosen object will be loaded as the <code>$object</code> variable, available below.'),
        ),
      ),
      'module' => 'Views Bulk Operations',
      'eval input' => array(),
      'base' => 'views_bulk_operations_rules_action',
    );
  }

  // Modify node fields.
  $actions['views_bulk_operations_fields_rules_action'] = array(
    'label' => t('Modify node fields'),
    'arguments' => array(
      'node' => array(
        'type' => 'node',
        'label' => t('Node'),
      ),
    ),
    'module' => 'Node',
  );

  return $actions;
}

function _views_bulk_operations_rules_variables(&$context, $state) {
  if (!empty($state['variables'])) foreach ($state['variables'] as $variable) {
    if (!empty($variable->data)) {
      $context['rules'][$variable->name] = $variable->data->_data;
    }
  }
}

function views_bulk_operations_rules_action($object, $settings, $element, &$state) {
  _views_bulk_operations_rules_variables($settings, $state);
  views_bulk_operations_action($object, $settings);
  return array('object' => $object);
}

function views_bulk_operations_rules_action_form($settings, &$form, &$form_state) {
  $form += views_bulk_operations_action_form($settings);
}

function views_bulk_operations_rules_action_validate($form, &$form_state) {
  views_bulk_operations_action_validate($form, $form_state);
}

function views_bulk_operations_rules_action_submit(&$settings, $form, &$form_state) {
  $submit = views_bulk_operations_action_submit($form, $form_state);
  $settings = array_merge($settings, $submit);
}

function views_bulk_operations_fields_rules_action($object, $settings, $element, &$state) {
  _views_bulk_operations_rules_variables($settings, $state);
  views_bulk_operations_fields_action($object, $settings);
  return array('node' => $object);
}

function views_bulk_operations_fields_rules_action_form($settings, &$form, &$form_state) {
  $form += views_bulk_operations_fields_action_form($settings);
}

function views_bulk_operations_fields_rules_action_validate($form, &$form_state) {
  views_bulk_operations_fields_action_validate($form, $form_state);
}

function views_bulk_operations_fields_rules_action_submit(&$settings, $form, &$form_state) {
  $submit = views_bulk_operations_fields_action_submit($form, $form_state);
  $settings = array_merge($settings, $submit);
}
=======
// $Id: views_bulk_operations.rules.inc,v 1.1.2.3 2010/05/05 00:27:02 kratib Exp $

/**
 * Implementation of hook_rules_action_alter().
 */
function views_bulk_operations_rules_action_info_alter(&$actions) {
  foreach (module_invoke_all('views_bulk_operations_object_info') as $type => $info) {
    $actions['views_bulk_operations_action_' . $type] = array(
      'label' => t('Execute a VBO programmatically on !type', array('!type' => $type)),
      // Make sure there is something passed for $object to the action.
      'arguments' => array('object' => array('type' => $type, 'label' => t('Object'))),
      'module' => 'Views Bulk Operations',
      'eval input' => array(),
      // Let the rules system for executing core style actions execute it.
      'base' => 'rules_core_action_execute',
      'action_name' => 'views_bulk_operations_action',
      'configurable' => TRUE,
    );
  }
}

>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
