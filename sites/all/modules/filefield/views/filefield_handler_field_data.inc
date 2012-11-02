<?php
<<<<<<< HEAD
=======
// $Id: filefield_handler_field_data.inc,v 1.2 2010/01/08 22:38:40 quicksketch Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * @file
 * filefield_handler_field_data.inc
 *
 * Provides a handler for displaying values within the serialized data column.
 */
class filefield_handler_field_data extends views_handler_field_node {

  function option_definition() {
    $options = parent::option_definition();
    $options['data_key'] = array('default' => 'description');
    return $options;
  }

  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);

<<<<<<< HEAD
    $options = array();
    $info = filefield_data_info();
    foreach ($info as $key => $data) {
      $options[$key] = $data['title'] . ' (' . $data['module'] .')';
    }

    $form['data_key'] = array(
      '#title' => t('Data key'),
      '#type' => 'radios',
      '#options' => $options,
      '#required' => TRUE,
      '#default_value' => $this->options['data_key'],
      '#description' => t('The data column may contain only a few or none any of these data options. The name of the module that provides the data is shown in parentheses.'),
=======
    $form['data_key'] = array(
      '#title' => t('Data key'),
      '#type' => 'radios',
      // TODO: Pull these values from the modules that extend FileField.
      '#options' => drupal_map_assoc(array('description', 'title', 'alt')),
      '#required' => TRUE,
      '#default_value' => $this->options['data_key'],
      '#description' => t('The data column may (or may not) contain any of the following data. Select the data that should be output for this field.'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      '#weight' => 4,
    );
  }

  function admin_summary() {
<<<<<<< HEAD
    // Display the data to be displayed.
    $info = filefield_data_info();
    return isset($info[$this->options['data_key']]['title']) ? $info[$this->options['data_key']]['title'] : $this->options['data_key'];
=======
    // Display the data to be displayed
    return $this->options['data_key'];
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }

  function render($values) {
    $values = drupal_clone($values); // Prevent affecting the original.
    $data = unserialize($values->{$this->field_alias});
<<<<<<< HEAD
    $values->{$this->field_alias} = filefield_data_value($this->options['data_key'], $data[$this->options['data_key']]);

    // Copied from views_handler_field_node(). We just remove the call to
    // sanitize_value() from the original call, becaue our value has already
    // been cleaned by filefield_data_value().
    return $this->render_link($values->{$this->field_alias}, $values);
=======
    $values->{$this->field_alias} = $data[$this->options['data_key']];
    return parent::render($values);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }

}
