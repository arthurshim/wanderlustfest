<?php
<<<<<<< HEAD

/**
 * @file
 * Webform module file component.
 */

/**
 * Implements _webform_defaults_component().
=======
// $Id: file.inc,v 1.4.2.35 2010/03/21 19:45:01 quicksketch Exp $

/**
 * @file
 *   Webform module file component.
 */

/**
 * Create a default file component.
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 */
function _webform_defaults_file() {
  return array(
    'name' => '',
    'form_key' => NULL,
<<<<<<< HEAD
=======
    'email' => 1,
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    'mandatory' => 0,
    'pid' => 0,
    'weight' => 0,
    'extra' => array(
      'filtering' => array(
        'types' => array('gif', 'jpg', 'png'),
        'addextensions' => '',
        'size' => 800,
      ),
      'savelocation' => '',
      'width' => '',
<<<<<<< HEAD
      'title_display' => 0,
      'description' => '',
      'attributes' => array(),
      'private' => FALSE,
=======
      'description' => '',
      'attributes' => array(),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    ),
  );
}

/**
<<<<<<< HEAD
 * Implements _webform_theme_component().
 */
function _webform_theme_file() {
  return array(
    'webform_edit_file' => array(
      'arguments' => array('form' => NULL),
      'file' => 'components/file.inc',
    ),
    'webform_render_file' => array(
      'arguments' => array('element' => NULL),
      'file' => 'components/file.inc',
    ),
    'webform_display_file' => array(
      'arguments' => array('element' => NULL),
      'file' => 'components/file.inc',
    ),
  );
}

/**
 * Implements _webform_edit_component().
 */
function _webform_edit_file($component) {
    $form = array();
    $form['#theme'] = 'webform_edit_file';

    $form['validation']['filtering'] = array(
      '#element_validate' => array('_webform_edit_file_filtering_validate'),
      '#parents' => array('extra', 'filtering'),
    );

    // Find the list of all currently valid extensions.
    $current_types = isset($component['extra']['filtering']['types']) ? $component['extra']['filtering']['types'] : array();

    $types = array('gif', 'jpg', 'png');
    $form['validation']['filtering']['types']['webimages'] = array(
=======
 * Create a set of form items to be displayed on the form for editing this component.
 * Use care naming the form items, as this correlates directly to the database schema.
 * The component "Name" and "Description" fields are added to every component type and
 * are not necessary to specify here (although they may be overridden if desired).
 * @return
 *   An array of form items to be displayed on the edit component page
 */
function _webform_edit_file($currfield) {
    $edit_fields = array();
    $edit_fields['#theme'] = 'webform_edit_file';
    $edit_fields['extra']['filtering'] = array(
      '#type' => 'fieldset',
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
      '#title' => t('Upload Filtering'),
      '#description' => t('Select the types of uploads you would like to allow.'),
      '#element_validate' => array('_webform_edit_file_filtering_validate'),
    );

    // Find the list of all currently valid extensions.
    $current_types = isset($currfield['extra']['filtering']['types']) ? $currfield['extra']['filtering']['types'] : array();

    $types = array('gif', 'jpg', 'png');
    $edit_fields['extra']['filtering']['types']['webimages'] = array(
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      '#type' => 'checkboxes',
      '#title' => t('Web Images'),
      '#options' => drupal_map_assoc($types),
      '#default_value' => array_intersect($current_types, $types),
    );

    $types = array('bmp', 'eps', 'tif', 'pict', 'psd');
<<<<<<< HEAD
    $form['validation']['filtering']['types']['desktopimages'] = array(
=======
    $edit_fields['extra']['filtering']['types']['desktopimages'] = array(
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      '#type' => 'checkboxes',
      '#title' => t('Desktop Images'),
      '#options' => drupal_map_assoc($types),
      '#default_value' => array_intersect($current_types, $types),
    );

<<<<<<< HEAD
    $types = array('txt', 'rtf', 'html', 'odf', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx', 'xml');
    $form['validation']['filtering']['types']['documents'] = array(
=======
    $types = array('txt', 'rtf', 'html', 'odf', 'pdf', 'doc', 'ppt', 'xls', 'xml');
    $edit_fields['extra']['filtering']['types']['documents'] = array(
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      '#type' => 'checkboxes',
      '#title' => t('Documents'),
      '#options' => drupal_map_assoc($types),
      '#default_value' => array_intersect($current_types, $types),
    );

    $types = array('avi', 'mov', 'mp3', 'ogg', 'wav');
<<<<<<< HEAD
    $form['validation']['filtering']['types']['media'] = array(
=======
    $edit_fields['extra']['filtering']['types']['media'] = array(
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      '#type' => 'checkboxes',
      '#title' => t('Media'),
      '#options' => drupal_map_assoc($types),
      '#default_value' => array_intersect($current_types, $types),
    );

    $types = array('bz2', 'dmg', 'gz', 'jar', 'rar', 'sit', 'tar', 'zip');
<<<<<<< HEAD
    $form['validation']['filtering']['types']['archives'] = array(
=======
    $edit_fields['extra']['filtering']['types']['archives'] = array(
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      '#type' => 'checkboxes',
      '#title' => t('Archives'),
      '#options' => drupal_map_assoc($types),
      '#default_value' => array_intersect($current_types, $types),
    );

<<<<<<< HEAD
    $form['validation']['filtering']['addextensions'] = array(
      '#type' => 'textfield',
      '#title' => t('Additional Extensions'),
      '#default_value' => $component['extra']['filtering']['addextensions'],
      '#description' => t('Enter a list of additional file extensions for this upload field, seperated by commas.<br /> Entered extensions will be appended to checked items above.'),
      '#size' => 60,
      '#weight' => 3,
      '#default_value' => $component['extra']['filtering']['addextensions'],
    );

    $form['validation']['filtering']['size'] = array(
      '#type' => 'textfield',
      '#title' => t('Max Upload Size'),
      '#default_value' => $component['extra']['filtering']['size'],
      '#description' => t('Enter the max file size a user may upload (in KB).'),
      '#size' => 10,
      '#weight' => 3,
      '#field_suffix' => t('KB'),
      '#default_value' => $component['extra']['filtering']['size'],
      '#parents' => array('extra', 'filtering', 'size'),
      '#element_validate' => array('_webform_edit_file_size_validate'),
    );
    $form['extra']['savelocation'] = array(
      '#type' => 'textfield',
      '#title' => t('Upload Directory'),
      '#default_value' => $component['extra']['savelocation'],
      '#description' => t('Webform uploads are always saved in the site files directory. You may optionally specify a subfolder to store your files.'),
      '#weight' => 3,
      '#field_prefix' => file_directory_path() . '/webform/',
      '#element_validate' => array('_webform_edit_file_check_directory'),
      '#after_build' => array('_webform_edit_file_check_directory'),
    );
    $form['display']['width'] = array(
      '#type' => 'textfield',
      '#title' => t('Width'),
      '#default_value' => $component['extra']['width'],
      '#description' => t('Width of the file field.') . ' ' . t('Leaving blank will use the default size.'),
      '#size' => 5,
      '#maxlength' => 10,
      '#weight' => 4,
      '#parents' => array('extra', 'width')
    );
    return $form;
}

/**
 * A Form API element validate function to check filesize is numeric.
 */
function _webform_edit_file_size_validate($element) {
  if (!empty($element['#value'])) {
    if (!is_numeric($element['#value']) || intval($element['#value']) != $element['#value']) {
      form_error($element, t('Max upload size must be a number in KB.'));
    }
  }
}

/**
 * A Form API after build and validate function.
 *
 * Ensure that the destination directory exists and is writable.
 */
function _webform_edit_file_check_directory($element) {
  $base_dir = file_directory_path() . '/webform';
  $base_success = file_check_directory($base_dir, FILE_CREATE_DIRECTORY);

  $destination_dir = $base_dir . '/' . $element['#value'];

  // Sanity check input to prevent use parent (../) directories.
  $real_base = realpath($base_dir);
  $real_destination = realpath($destination_dir);
  if (strpos($real_destination, $real_base) !== 0) {
    form_error($element, t('The save directory %directory is not valid.', array('%directory' => $destination_dir)));
  }
  else {
    // Try to make the directory recursively before calling file_check_directory().
    // This may be removed in D7, as recusive is the default there.
    @mkdir($destination_dir, 0775, TRUE);
    $destination_success = file_check_directory($destination_dir, FILE_CREATE_DIRECTORY);

    if (!$base_success || !$destination_success) {
      form_error($element, t('The save directory %directory could not be created. Check that the webform files directory is writtable.', array('%directory' => $destination_dir)));
    }
  }

  return $element;
}

/**
 * A Form API element validate function.
 *
 * Change the submitted values of the component so that all filtering extensions
 * are saved as a single array.
 */
function _webform_edit_file_filtering_validate($element, &$form_state) {
  // Predefined types.
  $extensions = array();
  foreach (element_children($element['types']) as $category) {
    foreach (array_keys($element['types'][$category]['#value']) as $extension) {
      if ($element['types'][$category][$extension]['#value']) {
=======
    $edit_fields['extra']['filtering']['addextensions'] = array(
      '#type' => 'textfield',
      '#title' => t('Additional Extensions'),
      '#default_value' => $currfield['extra']['filtering']['addextensions'],
      '#description' => t('Enter a list of additional file extensions for this upload field, seperated by commas.<br /> Entered extensions will be appended to checked items above.'),
      '#size' => 60,
      '#weight' => 3,
      '#default_value' => $currfield['extra']['filtering']['addextensions'],
    );

    $edit_fields['extra']['filtering']['size'] = array(
      '#type' => 'textfield',
      '#title' => t('Max Upload Size'),
      '#default_value' => $currfield['extra']['filtering']['size'],
      '#description' => t('Enter the max file size a user may upload (in KB).'),
      '#size' => 10,
      '#weight' => 3,
      '#default_value' => $currfield['extra']['filtering']['size'],
    );
    $edit_fields['extra']['savelocation'] = array(
      '#type' => 'textfield',
      '#title' => t('Upload Directory'),
      '#default_value' => $currfield['extra']['savelocation'],
      '#description' => '<div style="display: block">'. t('Webform uploads are always saved in the site files directory. You may optionally specify a subfolder to store your files.') .'</div>',
      '#weight' => 3,
      '#element_validate' => array('_webform_edit_file_check_directory', '_webform_edit_file_validate'),
      '#after_build' => array('_webform_edit_file_check_directory'),
    );
    $edit_fields['extra']['width'] = array(
      '#type' => 'textfield',
      '#title' => t('Width'),
      '#default_value' => $currfield['extra']['width'],
      '#description' => t('Width of the file field.') .' '. t('Leaving blank will use the default size.'),
      '#size' => 5,
      '#maxlength' => 10,
      '#weight' => 4,
    );
    return $edit_fields;
}

function _webform_edit_file_check_directory($form_element) {
  $base_dir = file_directory_path() .'/webform';
  $base_success = file_check_directory($base_dir, FILE_CREATE_DIRECTORY);

  $destination_dir = $base_dir .'/'. $form_element['#value'];
  $destination_success = file_check_directory($destination_dir, FILE_CREATE_DIRECTORY);
  if (!$base_success || !$destination_success) {
    form_set_error('savelocation', t('The save directory %directory could not be created. Check that the webform files directory is writtable.', array('%directory' => $destination_dir)));
  }
  return $form_element;
}

/**
 * Change the submitted values of the component so that all filtering extensions
 * are saved as a single array.
 */
function _webform_edit_file_filtering_validate($form_element, &$form_state) {
  // Predefined types.
  $extensions = array();
  foreach (element_children($form_element['types']) as $category) {
    foreach (array_keys($form_element['types'][$category]['#value']) as $extension) {
      if ($form_element['types'][$category][$extension]['#value']) {
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
        $extensions[] = $extension;
      }
    }
  }

  // Additional types.
<<<<<<< HEAD
  $additional_extensions = explode(',', $element['addextensions']['#value']);
=======
  $additional_extensions = explode(',', $form_element['addextensions']['#value']);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  foreach ($additional_extensions as $extension) {
    $clean_extension = drupal_strtolower(trim($extension));
    if (!empty($clean_extension) && !in_array($clean_extension, $extensions)) {
      $extensions[] = $clean_extension;
    }
  }

<<<<<<< HEAD
  form_set_value($element['types'], $extensions, $form_state);
}

function theme_webform_edit_file($form) {
  // Add a little JavaScript to check all the items in one type.
  $javascript = '
    function check_category_boxes() {
      var checkValue = !document.getElementById("edit-extra-filtering-types-"+arguments[0]+"-"+arguments[1]).checked;
      for(var i=1; i < arguments.length; i++) {
        document.getElementById("edit-extra-filtering-types-"+arguments[0]+"-"+arguments[i]).checked = checkValue;
      }
    }
 ';
  drupal_add_js($javascript, 'inline');

  // Format the components into a table.
  $per_row = 6;
  $rows = array();
  foreach (element_children($form['validation']['filtering']['types']) as $key => $filtergroup) {
    $row = array();
    $first_row = count($rows);
    if ($form['validation']['filtering']['types'][$filtergroup]['#type'] == 'checkboxes') {
      // Add the title.
      $row[] = $form['validation']['filtering']['types'][$filtergroup]['#title'];
      $row[] = '&nbsp;';
      // Convert the checkboxes into individual form-items.
      $checkboxes = expand_checkboxes($form['validation']['filtering']['types'][$filtergroup]);
=======
  form_set_value($form_element['types'], $extensions, $form_state);
}

function theme_webform_edit_file($form) {
  // Add a little javascript to check all the items in one type.
  $javascript = '
    <script type="text/javascript">
      function check_category_boxes () {
        var checkValue = !document.getElementById("edit-extra-filtering-types-"+arguments[0]+"-"+arguments[1]).checked;
        for(var i=1; i < arguments.length; i++) {
          document.getElementById("edit-extra-filtering-types-"+arguments[0]+"-"+arguments[i]).checked = checkValue;
        }
      }
  </script>
 ';
  drupal_set_html_head($javascript);

  // Format the components into a table.
  $per_row = 5;
  $rows = array();
  foreach (element_children($form['extra']['filtering']['types']) as $key => $filtergroup) {
    $row = array();
    $first_row = count($rows);
    if ($form['extra']['filtering']['types'][$filtergroup]['#type'] == 'checkboxes') {
      // Add the title.
      $row[] = $form['extra']['filtering']['types'][$filtergroup]['#title'];
      $row[] = '&nbsp;';
      // Convert the checkboxes into individual form-items.
      $checkboxes = expand_checkboxes($form['extra']['filtering']['types'][$filtergroup]);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      // Render the checkboxes in two rows.
      $checkcount = 0;
      $jsboxes = '';
      foreach (element_children($checkboxes) as $key) {
        $checkbox = $checkboxes[$key];
        if ($checkbox['#type'] == 'checkbox') {
          $checkcount++;
<<<<<<< HEAD
          $jsboxes .= "'" . $checkbox['#return_value'] . "',";
=======
          $jsboxes .= "'". $checkbox['#return_value'] ."',";
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
          if ($checkcount <= $per_row) {
            $row[] = array('data' => drupal_render($checkbox));
          }
          elseif ($checkcount == $per_row + 1) {
            $rows[] = array('data' => $row, 'style' => 'border-bottom: none;');
            $row = array(array('data' => '&nbsp;'), array('data' => '&nbsp;'));
            $row[] = array('data' => drupal_render($checkbox));
          }
          else {
            $row[] = array('data' => drupal_render($checkbox));
          }
        }
      }
      // Pretty up the table a little bit.
      $current_cell = $checkcount % $per_row;
      if ($current_cell > 0) {
        $colspan = $per_row - $current_cell   + 1;
        $row[$current_cell + 1]['colspan'] = $colspan;
      }
      // Add the javascript links.
      $jsboxes = drupal_substr($jsboxes, 0, drupal_strlen($jsboxes) - 1);
      $rows[] = array('data' => $row);
<<<<<<< HEAD
      $select_link = ' <a href="javascript:check_category_boxes(\'' . $filtergroup . '\',' . $jsboxes . ')">(select)</a>';
      $rows[$first_row]['data'][1] = array('data' => $select_link, 'width' => 40);
      unset($form['validation']['filtering']['types'][$filtergroup]);
    }
    elseif ($filtergroup != 'size') {
      // Add other fields to the table (ie. additional extensions).
      $row[] = $form['validation']['filtering']['types'][$filtergroup]['#title'];
      unset($form['validation']['filtering']['types'][$filtergroup]['#title']);
      $row[] = array(
        'data' => drupal_render($form['validation']['filtering']['types'][$filtergroup]),
        'colspan' => $per_row + 1,
      );
      unset($form['validation']['filtering']['types'][$filtergroup]);
=======
      $select_link = ' <a href="javascript:check_category_boxes(\''. $filtergroup .'\','. $jsboxes .')">(select)</a>';
      $rows[$first_row]['data'][1] = array('data' => $select_link, 'width' => 40);
      unset($form['extra']['filtering']['types'][$filtergroup]);
    }
    elseif ($filtergroup != 'size') {
      // Add other fields to the table (ie. additional extensions).
      $row[] = $form['extra']['filtering']['types'][$filtergroup]['#title'];
      unset($form['extra']['filtering']['types'][$filtergroup]['#title']);
      $row[] = array(
        'data' => drupal_render($form['extra']['filtering']['types'][$filtergroup]),
        'colspan' => $per_row + 1,
      );
      unset($form['extra']['filtering']['types'][$filtergroup]);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      $rows[] = array('data' => $row);
    }
  }
  $header = array(array('data' => t('Category'), 'colspan' => '2'), array('data' => t('Types'), 'colspan' => $per_row));

  // Create the table inside the form.
<<<<<<< HEAD
  $form['validation']['filtering']['types']['table'] = array(
=======
  $form['extra']['filtering']['types']['table'] = array(
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    '#value' => theme('table', $header, $rows)
  );

  $output = drupal_render($form);

<<<<<<< HEAD
=======
  // Prefix the upload location field with the default path for webform.
  $output = str_replace('Upload Directory: </label>', 'Upload Directory: </label>'. file_directory_path() .'/webform/', $output);

>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  return $output;
}

/**
<<<<<<< HEAD
 * Implements _webform_render_component().
 */
function _webform_render_file($component, $value = NULL, $filter = TRUE) {
  // Normally every file component is given a unique ID based on its key.
  if (isset($component['nid'])) {
    $node = node_load($component['nid']);
    $form_key = implode('_', webform_component_parent_keys($node, $component));
  }
  // If being used as a default though, we don't yet have a form key.
  else {
    $form_key = 'default';
  }

  $element[$form_key] = array(
    '#type' => 'file',
    '#title' => $filter ? _webform_filter_xss($component['name']) : $component['name'],
    '#title_display' => $component['extra']['title_display'] ? $component['extra']['title_display'] : 'before',
    //'#required' => $component['mandatory'], // Drupal core bug with required file uploads.
    '#description' => $filter ? _webform_filter_descriptions($component['extra']['description']) : $component['extra']['description'],
    '#attributes' => $component['extra']['attributes'],
    '#tree' => FALSE, // file_check_upload assumes a flat $_FILES structure.
    '#element_validate' => array(
      '_webform_validate_file',
      '_webform_required_file',  // Custom required routine.
    ),
    '#pre_render' => array('webform_element_title_display'),
    '#webform_component' => $component,
  );
  $element['#webform_required'] = $component['mandatory'];
  $element['#webform_form_key'] = $form_key;
  $element['#weight'] = $component['weight'];
  $element['#theme'] = 'webform_render_file';
  $element['#title_display'] = $element[$form_key]['#title_display'];
  $element['#theme_wrappers'] = array('webform_element_wrapper');
  $element['#post_render'] = array('webform_element_wrapper');
  $element['#webform_component'] = $component;

  // Change the 'width' option to the correct 'size' option.
  if ($component['extra']['width'] > 0) {
    $element[$form_key]['#size'] = $component['extra']['width'];
  }

  // Add a hidden element to store the FID for new files.
  $element['_fid'] = array(
    '#type' => 'hidden',
    '#default_value' => '',
  );

  // Add a hidden element to store the FID for existing files.
  $element['_old'] = array(
    '#type' => 'hidden',
    '#value' => isset($value[0]) ? $value[0] : NULL,
  );

  return $element;
}

/**
 * Render a File component.
 */
function theme_webform_render_file($element) {
  // Add information about the existing file, if any.
  if (isset($element['#default_value'])) {
    $element['_fid']['#value'] = $element['#default_value'];
  }
  $value = $element['_fid']['#value'] ? $element['_fid']['#value'] : $element['_old']['#value'];

  if ($value && ($file = webform_get_file($value))) {
    $firstchild = array_shift(array_keys($element));
    $element[$firstchild]['#suffix'] = ' ' . l(t('Download @filename', array('@filename' => webform_file_name($file->filepath))), webform_file_url($file->filepath)) . (isset($element['#suffix']) ? $element['#suffix'] : '');
    $element[$firstchild]['#description'] = '<div class="webform-newfile-message">' . t('Uploading a new file will replace the current file.') . '</div>' . (isset($element[$firstchild]['#description']) ? $element[$firstchild]['#description'] : '');
  }

  // Add the required asterisk.
  if ($element['#webform_required']) {
    $element[$element['#webform_form_key']]['#required'] = TRUE;
  }

  $output = '';
  foreach (element_children($element) as $key) {
    $output .= drupal_render($element[$key]);
  }
  return $output;
}

/**
 * A Form API element validate function.
 *
 * Fix Drupal core's handling of required file fields.
 */
function _webform_required_file($element, $form_state) {
  $component = $element['#webform_component'];
  $parents = $element['#array_parents'];
  array_pop($parents);
  $form_key = implode('_', $parents);

  // Do not validate requiredness on back or draft button.
  if (isset($form_state['clicked_button']['#validate']) && empty($form_state['clicked_button']['#validate'])) {
    return;
  }

  // Check if a value is already set in the hidden field.
  $values = $form_state['values'];
  $key = array_shift($parents);
  $found = FALSE;
  while (isset($values[$key])) {
    if (isset($values[$key])) {
      $values = $values[$key];
      $found = TRUE;
    }
    else {
      $found = FALSE;
    }
    $key = array_shift($parents);
  }

  if (!$found || (empty($values['_fid']) && empty($values['_old']))) {
    if (empty($_FILES['files']['name'][$form_key]) && $component['mandatory']) {
      form_error($element, t('%field field is required.', array('%field' => $component['name'])));
    }
  }
}

/**
 * A Form API element validate function.
 *
 * Ensure that the uploaded file matches the specified file types.
 */
function _webform_validate_file($element, &$form_state) {
  $component = $element['#webform_component'];
  $form_key = implode('_', $element['#parents']);
=======
 * Build a form item array containing all the properties of this component.
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @return
 *   An array of a form item to be displayed on the client-side webform.
 */
function _webform_render_file($component) {
  $form_item[$component['form_key']] = array(
    '#type'          => $component['type'],
    '#title'         => $component['name'],
    //'#required'      => $component['mandatory'], // Drupal core bug with required file uploads.
    '#weight'        => $component['weight'],
    '#description'   => _webform_filter_descriptions($component['extra']['description']),
    '#attributes'    => $component['extra']['attributes'],
    '#tree'          => FALSE, // file_check_upload assumes a flat $_FILES structure.
    '#prefix'        => '<div class="webform-component-'. $component['type'] .'" id="webform-component-'. $component['form_key'] .'">',
    '#suffix'        => '</div>',
    '#element_validate'      => array(
      '_webform_validate_file',
      '_webform_required_file',  // Custom required routine.
    ),
    '#webform_component' => $component,
  );
  $form_item['#weight'] = $component['weight'];
  $form_item['new'] = array(
    '#type' => 'hidden',
    '#weight' => $component['weight'],
    '#value' => $component['form_key'],
    '#tree' => TRUE,
  );
  // Change the 'width' option to the correct 'size' option.
  if ($component['extra']['width'] > 0) {
    $form_item[$component['form_key']]['#size'] = $component['extra']['width'];
  }

  return $form_item;
}

function _webform_required_file($form_element, $form_state) {
  $component = $form_element['#webform_component'];
  $form_key = $component['form_key'];

  if (empty($_FILES['files']['name'][$form_key]) && $component['mandatory']) {
    form_set_error($form_key, t('%field field is required.', array('%field' => $component['name'])));
  }
}

function _webform_validate_file($form_element, &$form_state) {
  $component = $form_element['#webform_component'];
  $form_key = $component['form_key'];
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

  if (empty($_FILES['files']['name'][$form_key])) {
    return;
  }

  // Build a human readable list of extensions:
  $extensions = $component['extra']['filtering']['types'];
  $extension_list = '';
  if (count($extensions) > 1) {
    for ($n = 0; $n < count($extensions) - 1; $n++) {
<<<<<<< HEAD
      $extension_list .= $extensions[$n] . ', ';
    }
    $extension_list .= 'or ' . $extensions[count($extensions) - 1];
  }
  elseif (!empty($extensions)) {
=======
      $extension_list .= $extensions[$n] .', ';
    }
    $extension_list .= 'or '. $extensions[count($extensions)-1];
  }
  else {
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    $extension_list = $extensions[0];
  }

  if (in_array('jpg', $extensions)) {
    $extensions[] = 'jpeg';
  }

<<<<<<< HEAD
  $strrpos = function_exists('mb_strrpos') ? 'mb_strrpos' : 'strrpos';
  $dot = $strrpos($_FILES['files']['name'][$form_key], '.');
  $extension = drupal_strtolower(drupal_substr($_FILES['files']['name'][$form_key], $dot+1));
  $file_error = FALSE;
  if (!empty($extensions) && !in_array($extension, $extensions)) {
    form_error($element, t("Files with the '%ext' extension are not allowed, please upload a file with a %exts extension.", array('%ext' => $extension, '%exts' => $extension_list)));
    $file_error = TRUE;
=======
  $dot = strrpos($_FILES['files']['name'][$form_key], '.');
  $extension = drupal_strtolower(substr($_FILES['files']['name'][$form_key], $dot+1));
  if (!in_array($extension, $extensions)) {
    form_set_error($form_key, t("Files with the '%ext' extension are not allowed, please upload a file with a %exts extension.", array('%ext' => $extension, '%exts' => $extension_list)));
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }

  // Now let's check the file size (limit is set in KB).
  if ($_FILES['files']['size'][$form_key] > $component['extra']['filtering']['size'] * 1024) {
<<<<<<< HEAD
    form_error($element, t("The file '%filename' is too large (%filesize KB). Please upload a file %maxsize KB or smaller.", array('%filename' => $_FILES['files']['name'][$form_key], '%filesize' => (int) ($_FILES['files']['size'][$form_key]/1024), '%maxsize' => $component['extra']['filtering']['size'])));
    $file_error = TRUE;
  }

  // Save the file to a temporary location.
  if (!$file_error) {
    $upload_dir = file_directory_path() . '/webform/' . $component['extra']['savelocation'];
    if (file_check_directory($upload_dir, FILE_CREATE_DIRECTORY)) {
      $file = file_save_upload($form_key, array(), $upload_dir);
      if ($file) {
        @chmod($file->filepath, 0664);

        // Set the hidden field value.
        $parents = $element['#array_parents'];
        array_pop($parents);
        $parents[] = '_fid';
        form_set_value(array('#parents' => $parents), $file->fid, $form_state);
      }
      else {
        drupal_set_message(t('The uploaded file %filename was unable to be saved. The destination directory may not be writable.', array('%filename' => $file->filename)), 'error');
=======
    form_set_error($form_key, t("The file '%filename' is too large (%filesize KB). Please upload a file %maxsize KB or smaller.", array('%filename' => $_FILES['files']['name'][$form_key], '%filesize' => (int)($_FILES['files']['size'][$form_key]/1024), '%maxsize' => $component['extra']['filtering']['size'])));
  }
}

/**
 * Perform additional server-side processing on the submitted data, such as
 * managing an uploaded file.
 * @param $data
 *   The POST data associated with the component.
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @return
 *   Nothing.
 */
function _webform_submit_file(&$data, $component) {
  $upload_dir = file_directory_path() .'/webform/'. $component['extra']['savelocation'];
  if (!empty($_FILES['files']['name'][$data['new']])) {
    if (file_check_directory($upload_dir, FILE_CREATE_DIRECTORY)) {
      $file_saved = file_save_upload($data['new'], array(), $upload_dir);
      if (!$file_saved) {
        drupal_set_message(t('The uploaded file %filename was unable to be saved. The destination directory may not be writable.', array('%filename' => $file_saved['filename'])), 'error');
      }
      else {
        @chmod($file_saved->filepath, 0664);
        file_set_status($file_saved, FILE_STATUS_PERMANENT);
        if (isset($data['existing']['filepath'])) {
          file_delete($data['existing']['filepath']);
        }
        $data = serialize((array)$file_saved);
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      }
    }
    else {
      drupal_set_message(t('The uploaded file was unable to be saved. The destination directory does not exist.'), 'error');
    }
  }
<<<<<<< HEAD
}

/**
 * Implements _webform_submit_component().
 */
function _webform_submit_file($component, $value) {

  if ($value['_fid'] && ($file = webform_get_file($value['_fid']))) {
    // Save any new files permanently.
    file_set_status($file, FILE_STATUS_PERMANENT);

    // Delete any previous files.
    if ($value['_old'] && ($existing = webform_get_file($value['_old']))) {
      file_delete($existing->filepath);
      db_query("DELETE FROM {files} WHERE fid = %d", $existing->fid);
    }

    $value = $file->fid;
  }
  else {
    $value = $value['_old'] ? $value['_old'] : NULL;
  }

  return $value;
}

/**
 * Implements _webform_display_component().
 */
function _webform_display_file($component, $value, $format = 'html') {
  $fid = isset($value[0]) ? $value[0] : NULL;
  return array(
     '#title' => $component['name'],
     '#value' => $fid ? webform_get_file($fid) : NULL,
     '#weight' => $component['weight'],
     '#theme' => 'webform_display_file',
     '#theme_wrappers' => $format == 'html' ? array('webform_element', 'webform_element_wrapper') : array('webform_element_text'),
     '#post_render' => array('webform_element_wrapper'),
     '#webform_component' => $component,
     '#format' => $format,
  );
}

/**
 * Format the output of text data for this component
 */
function theme_webform_display_file($element) {
  $file = $element['#value'];
  $url = !empty($file) ? webform_file_url($file->filepath) : t('no upload');
  return !empty($file) ? ($element['#format'] == 'text' ? $url : l($file->filename, $url)) : ' ';
}

/**
 * Implements _webform_delete_component().
 */
function _webform_delete_file($component, $value) {
  // Delete an individual submission file.
  if (isset($value[0]) && ($file = webform_get_file($value[0]))) {
    unlink($file->filepath);
    db_query("DELETE FROM {files} WHERE fid = '%d'", $file->fid);
  }
}

/**
 * Implements _webform_analysis_component().
 */
function _webform_analysis_file($component, $sids = array()) {
  $placeholders = count($sids) ? array_fill(0, count($sids), "'%s'") : array();
  $sidfilter = count($sids) ? " AND sid in (" . implode(",", $placeholders) . ")" : "";
  $query = 'SELECT data ' .
    ' FROM {webform_submitted_data} ' .
    ' WHERE nid = %d ' .
    ' AND cid = %d' . $sidfilter;
=======
  else {
    $data = serialize(array());
  }
}

/**
 * Format the output of emailed data for this component
 *
 * @param mixed $data
 *   A string or array of the submitted data.
 * @param array $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @return
 *   Textual output to be included in the email.
 */
function theme_webform_mail_file($data, $component) {
  $file = is_string($data) ? unserialize($data) : $data;
  $output = $component['name'] .': '. (!empty($file['filepath']) ? webform_file_url($file['filepath']) : '') ."\n";
  return $output;
}

/**
 * Display the result of a file submission. The output of this function will be
 * displayed under the "results" tab then "submissions".
 * @param $data
 *   An array of information containing the submission result, directly
 *   correlating to the webform_submitted_data database schema.
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @param $enabled
 *   If enabled, the value may be changed. Otherwise it will set to readonly.
 * @return
 *   Textual output formatted for human reading.
 */
function _webform_submission_display_file($data, $component, $enabled = FALSE) {
  $filedata = unserialize($data['value'][0]);
  $form_item = _webform_render_file($component);
  if (!$enabled) {
    $form_item['#type'] = 'textfield';
    $form_item['#tree'] = TRUE;
    $form_item['#attributes']['readonly'] = 'readonly';
    $form_item['#default_value'] = empty($filedata['filepath']) ? $filedata['error'] : $filedata['filepath'];
  }
  if (!empty($filedata['filename'])) {
    $form_item['#suffix'] = ' <a href="'. webform_file_url($filedata['filepath']) .'">Download '. webform_file_name($filedata['filepath']) .'</a>'. $form_item['#suffix'];
    if ($enabled) {
      $form_item['#description'] = t('Uploading a new file will replace the current file.');
      $form_item['existing'] = array(
        '#type' => 'value',
        '#value' => $filedata,
      );
    }
  }
  return $form_item;
}

/**
 * Delete operation for file components or submissions.
 *
 * @param $data
 *   An array of information containing the submission result, directly
 *   correlating to the webform_submitted_data database schema.
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 */
function _webform_delete_file($data, $component) {
  // Delete an individual submission file.
  $filedata = unserialize($data['value']['0']);
  if (isset($filedata['filepath']) && is_file($filedata['filepath'])) {
    unlink($filedata['filepath']);
    db_query("DELETE FROM {files} WHERE filepath = '%s'", $filedata['filepath']);
  }
}

/**
 * Module specific instance of hook_help().
 */
function _webform_help_file($section) {
  switch ($section) {
    case 'admin/settings/webform#file_description':
      return t('Allow users to submit files of the configured types.');
  }
}

/**
 * Module specific instance of hook_theme().
 */
function _webform_theme_file() {
  return array(
    'webform_edit_file' => array(
      'arguments' => array('form' => NULL),
    ),
    'webform_mail_file' => array(
      'arguments' => array('data' => NULL, 'component' => NULL),
    ),
  );
}

/**
 * Calculate and returns statistics about results for this component from all
 * submission to this webform. The output of this function will be displayed
 * under the "results" tab then "analysis".
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema
 * @param $sids
 *   An optional array of submission IDs (sid). If supplied, the analysis will be limited
 *   to these sids.
 * @return
 *   An array of data rows, each containing a statistic for this component's
 *   submissions.
 */
function _webform_analysis_rows_file($component, $sids = array()) {
  $placeholders = count($sids) ? array_fill(0, count($sids), "'%s'") : array();
  $sidfilter = count($sids) ? " AND sid in (".implode(",", $placeholders).")" : "";
  $query = 'SELECT data '.
    ' FROM {webform_submitted_data} '.
    ' WHERE nid = %d '.
    ' AND cid = %d'. $sidfilter;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $nonblanks = 0;
  $sizetotal = 0;
  $submissions = 0;

  $result = db_query($query, array_merge(array($component['nid'], $component['cid']), $sids));
  while ($data = db_fetch_array($result)) {
<<<<<<< HEAD
    $file = webform_get_file($data['data']);
    if (isset($file->filesize)) {
      $nonblanks++;
      $sizetotal += $file->filesize;
=======
    $filedata = unserialize($data['data']);
    if (isset($filedata['filesize'])) {
      $nonblanks++;
      $sizetotal += $filedata['filesize'];
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    }
    $submissions++;
  }

  $rows[0] = array(t('Left Blank'), ($submissions - $nonblanks));
  $rows[1] = array(t('User uploaded file'), $nonblanks);
<<<<<<< HEAD
  $rows[2] = array(t('Average uploaded file size'), ($sizetotal != 0 ? (int) (($sizetotal/$nonblanks)/1024) . ' KB' : '0'));
=======
  $rows[2] = array(t('Average uploaded file size'), ($sizetotal !=0 ? (int)(($sizetotal/$nonblanks)/1024) .' KB' : '0'));
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  return $rows;
}

/**
<<<<<<< HEAD
 * Implements _webform_table_component().
 */
function _webform_table_file($component, $value) {
  $output = '';
  $file = webform_get_file($value[0]);
  if (!empty($file->fid)) {
    $output = '<a href="' . webform_file_url($file->filepath) . '">' . check_plain(webform_file_name($file->filepath)) . '</a>';
    $output .= ' (' . (int) ($file->filesize/1024) . ' KB)';
=======
 * Return the result of this component's submission for display in a table. The
 * output of this function will be displayed under the "results" tab then "table".
 * @param $data
 *   An array of information containing the submission result, directly
 *   correlating to the webform_submitted_data database schema
 * @return
 *   Textual output formatted for human reading.
 */
function _webform_table_data_file($data) {
  $output = '';
  $filedata = unserialize($data['value']['0']);
  if (!empty($filedata['filename'])) {
    $output = '<a href="'. webform_file_url($filedata['filepath']) .'">'. webform_file_name($filedata['filepath']) .'</a>';
    $output .= ' ('. (int)($filedata['filesize']/1024) .' KB)';
  }
  elseif (!empty($filedata['error'])) {
    $output = $filedata['error'];
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }
  return $output;
}

/**
<<<<<<< HEAD
 * Implements _webform_csv_headers_component().
 */
function _webform_csv_headers_file($component, $export_options) {
=======
 * Return the header information for this component to be displayed in a comma
 * seperated value file. The output of this function will be displayed under the
 * "results" tab then "download".
 * @param $component
 *   An array of information describing the component, directly correlating to
 *   the webform_component database schema.
 * @return
 *   An array of data to be displayed in the first three rows of a CSV file, not
 *   including either prefixed or trailing commas.
 */
function _webform_csv_headers_file($component) {
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $header = array();
  // Two columns in header.
  $header[0] = array('', '');
  $header[1] = array($component['name'], '');
  $header[2] = array(t('Name'), t('Filesize (KB)'));
  return $header;
}

/**
<<<<<<< HEAD
 * Implements _webform_csv_data_component().
 */
function _webform_csv_data_file($component, $export_options, $value) {
  $file = webform_get_file($value[0]);
  return empty($file->filename) ? array('', '') : array(webform_file_url($file->filepath), (int) ($file->filesize/1024));
}

/**
 * Helper function to create proper file names for uploaded file.
 */
function webform_file_name($filepath) {
  if (!empty($filepath)) {
    $info = pathinfo($filepath);
    $file_name = $info['basename'];
  }
  return isset($file_name) ? $file_name : '';
=======
 * Return the result of a file submission. The output of this function will be
 * displayed under the "results" tab then "submissions".
 * @param $data
 *   An array of information containing the submission result, directly
 *   correlating to the webform_submitted_data database schema.
 * @return
 *   Textual output formatted for CSV, not including either prefixed or trailing
 *   commas.
 */
function _webform_csv_data_file($data) {
  $filedata = unserialize($data['value']['0']);
  return empty($filedata['filename']) ? array('', '') : array(webform_file_url($filedata['filepath']), (int)($filedata['filesize']/1024));
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
}

/**
 * Helper function to create proper URLs for uploaded file.
 */
function webform_file_url($filepath) {
  if (!empty($filepath)) {
    $info = pathinfo($filepath);
<<<<<<< HEAD
    $file_url = file_create_url($info['dirname'] . '/' . rawurlencode($info['basename']));
=======
    $file_url = file_create_url($info['dirname'] .'/'. rawurlencode($info['basename']));
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }
  return isset($file_url) ? $file_url : '';
}

/**
<<<<<<< HEAD
 * Helper function to load a file from the database.
 */
function webform_get_file($fid) {
  static $files;

  if (!isset($files[$fid])) {
    if (empty($fid)) {
      $files[$fid] = FALSE;
    }
    else {
      $files[$fid] = db_fetch_object(db_query("SELECT * FROM {files} WHERE fid = %d", $fid));
    }
  }

  return $files[$fid];
=======
 * Helper function to create proper file names for uploaded file.
 */
function webform_file_name($filepath) {
  if (!empty($filepath)) {
    $info = pathinfo($filepath);
    $file_name = $info['basename'];
  }
  return isset($file_name) ? $file_name : '';
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
}
