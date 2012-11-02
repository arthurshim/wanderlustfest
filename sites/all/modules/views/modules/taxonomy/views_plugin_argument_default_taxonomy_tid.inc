<?php
<<<<<<< HEAD
=======
// $Id: views_plugin_argument_default_taxonomy_tid.inc,v 1.1.6.2 2010/03/22 22:34:18 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * @file
 *   Taxonomy tid default argument.
 */

class views_plugin_argument_default_taxonomy_tid extends views_plugin_argument_default {
<<<<<<< HEAD
  var $option_name = 'default_taxonomy_tid';
  function option_definition() {
    $options = parent::option_definition();

    $options[$this->options_name . '_term_page'] = array('default' => TRUE);
    $options[$this->options_name . '_node'] = array('default' => FALSE);
    $options[$this->options_name . '_limit'] = array('default' => FALSE);
    $options[$this->options_name . '_vids'] = array('default' => array());
=======
  function option_definition() {
    $options = parent::option_definition();

    $options['term_page'] = array('default' => TRUE);
    $options['node'] = array('default' => FALSE);
    $options['limit'] = array('default' => FALSE);
    $options['vids'] = array('default' => NULL);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

    return $options;
  }

<<<<<<< HEAD
  function argument_form(&$form, &$form_state) {
    $form[$this->option_name . '_term_page'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load default argument from term page'),
      '#default_value' => $this->argument->options[$this->option_name . '_term_page'],
      '#process' => array('views_process_dependency'),
      '#dependency' => array(
        'radio:options[default_action]' => array('default'),
        'radio:options[default_argument_type]' => array($this->id)
      ),
      '#dependency_count' => 2,
    );
    $form[$this->option_name . '_node'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load default argument from node page, thats good for related taxonomy blocks'),
      '#default_value' => $this->argument->options[$this->option_name . '_node'],
      '#process' => array('views_process_dependency'),
      '#dependency' => array(
        'radio:options[default_action]' => array('default'),
        'radio:options[default_argument_type]' => array($this->id)
      ),
      '#dependency_count' => 2,
    );

    $form[$this->option_name . '_limit'] = array(
      '#type' => 'checkbox',
      '#title' => t('Limit terms by vocabulary'),
      '#default_value'=> $this->argument->options[$this->option_name . '_limit'],
      '#process' => array('views_process_dependency'),
      '#dependency' => array(
        'radio:options[default_action]' => array('default'),
        'radio:options[default_argument_type]' => array($this->id),
        'edit-options-default-taxonomy-tid-node' => array(1),
      ),
      '#dependency_count' => 3,
=======
  function options_form(&$form, &$form_state) {
    $form['term_page'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load default argument from term page'),
      '#default_value' => $this->options['term_page'],
    );
    $form['node'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load default argument from node page, thats good for related taxonomy blocks.'),
      '#default_value' => $this->options['node'],
    );

    $form['limit'] = array(
      '#type' => 'checkbox',
      '#title' => t('Limit terms by vocabulary'),
      '#default_value'=> $this->options['limit'],
      '#process' => array('expand_checkboxes', 'views_process_dependency'),
      '#dependency' => array(
        'edit-options-argument-default-taxonomy-tid-node' => array(1),
      ),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    );

    $options = array();
    $vocabularies = taxonomy_get_vocabularies();
    foreach ($vocabularies as $voc) {
      $options[$voc->vid] = check_plain($voc->name);
    }

<<<<<<< HEAD
    $form[$this->option_name . '_vids'] = array(
      '#prefix' => '<div><div id="edit-options-default-taxonomy-tid-vids-wrapper">',
      '#suffix' => '</div></div>',
      '#type' => 'checkboxes',
      '#title' => t('Vocabularies'),
      '#description' => t('If you wish to limit terms for specific vocabularies, check them; if none are checked, all terms will be included.'),
      '#options' => $options,
      '#default_value' => isset($this->argument->options[$this->option_name . '_vids']) ? $this->argument->options[$this->option_name . '_vids'] : array(),
      '#process' => array('expand_checkboxes', 'views_process_dependency'),
      '#dependency' => array(
        'radio:options[default_action]' => array('default'),
        'radio:options[default_argument_type]' => array($this->id),
        'edit-options-default-taxonomy-tid-limit' => array(1),
        'edit-options-default-taxonomy-tid-node' => array(1),
      ),
      '#dependency_count' => 4,
    );
  }

  function get_argument() {
    // Load default argument from taxonomy page.
    if (!empty($this->argument->options[$this->option_name . '_term_page'])) {
=======
    $form['vids'] = array(
      '#prefix' => '<div><div id="edit-options-vids">',
      '#suffix' => '</div></div>',
      '#type' => 'checkboxes',
      '#title' => t('Vocabularies'),
      '#options' => $options,
      '#default_value' => $this->options['vids'],
      '#process' => array('expand_checkboxes', 'views_process_dependency'),
      '#dependency' => array(
        //'edit-options-argument-default-taxonomy-tid-limit' => array(1),
        'edit-options-argument-default-taxonomy-tid-node' => array(1),
      ),
    );
  }

  function options_submit(&$form, &$form_state, &$options) {
    // Clear checkbox values.
    $options['vids'] = array_filter($options['vids']);
  }

  function get_argument() {
    // Load default argument from taxonomy page.
    if (!empty($this->options['term_page'])) {
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      if (arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
        return arg(2);
      }
    }
    // Load default argument from node.
<<<<<<< HEAD
    if (!empty($this->argument->options[$this->option_name . '_node'])) {
=======
    if (!empty($this->options['node'])) {
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      foreach (range(1, 3) as $i) {
        $node = menu_get_object('node', $i);
        if (!empty($node)) {
          break;
        }
      }
      // Just check, if a node could be detected.
      if ($node) {
<<<<<<< HEAD
        if (!empty($this->argument->options[$this->option_name . '_limit'])) {
          $tids = array();
          // Filter by vid.
          foreach ($node->taxonomy as $tid => $term) {
            if (!empty($this->argument->options[$this->option_name . '_vids'][$term->vid])) {
=======
        if (!empty($this->options['limit'])) {
          $tids = array();
          // filter by vid
          foreach ($node->taxonomy as $tid => $term) {
            if (!empty($this->options['vids'][$term->vid])) {
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
              $tids[] = $tid;
            }
          }
          return implode(",", $tids);
        }
        // Return all tids.
        else {
          return implode(",", array_keys($node->taxonomy));
        }
      }
    }
<<<<<<< HEAD

    // If the current page is a view that takes tid as an argument,
    // find the tid argument and return it.
    $views_page = views_get_page_view();
    if ($views_page && isset($views_page->view->argument['tid'])) {
      return $views_page->view->argument['tid']->argument;
    }
=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }
}

