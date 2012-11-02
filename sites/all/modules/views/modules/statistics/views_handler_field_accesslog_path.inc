<?php
<<<<<<< HEAD
=======
// $Id: views_handler_field_accesslog_path.inc,v 1.1 2008/09/03 19:21:30 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * Field handler to provide simple renderer that turns a URL into a clickable link.
 */
class views_handler_field_accesslog_path extends views_handler_field {
  /**
   * Override init function to provide generic option to link to node.
   */
<<<<<<< HEAD
  function init(&$view, $options) {
    parent::init($view, $options);
    if (!empty($this->options['display_as_link'])) {
      $this->additional_fields['path'] = 'path';
=======
  function init(&$view, &$data) {
    parent::init($view, $data);
    if (isset($data['display_as_link'])) {
      $this->additional_fields[] = 'path';
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    }
  }

  function option_definition() {
    $options = parent::option_definition();

    $options['display_as_link'] = array('default' => TRUE);

    return $options;
  }

  /**
   * Provide link to the page being visited.
   */
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);
    $form['display_as_link'] = array(
      '#title' => t('Display as link'),
      '#type' => 'checkbox',
      '#default_value' => !empty($this->options['display_as_link']),
    );
  }

  function render($values) {
    $title = check_plain($values->{$this->field_alias});
    if (!empty($this->options['display_as_link'])) {
      return l($title, $values->{$this->aliases['path']}, array('html' => TRUE));
    }
    else {
      return $title;
    }
  }
}
