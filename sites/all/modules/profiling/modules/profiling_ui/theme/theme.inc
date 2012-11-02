<?php

/**
 * @file
 * Profiling user interface theme functions.
 */

/**
 * Implementation of template_preprocess_TEMPLATE().
 */
function template_preprocess_profiling_timeline(&$variables) {
  $variables['slices'] = array();

  $i = 0;
  foreach ($variables['timers'] as $timer) {
    $slice = array(
      'link' => url(profiling_ui_timer_single_path($timer)),
      'title' => check_plain($timer->name),
      'left' => round(($timer->time_start - $variables['start']) / $variables['duration'] * 100),
      'width' => ceil(($timer->time_stop - $timer->time_start) / $variables['duration'] * 100),
      'label' => profiling_ui_format_duration($timer->duration),
    );
    // Ugly fix.
    if ($slice['width'] == 0) {
      $slice['width'] = 1;
    }
    $variables['slices'][] = $slice;
  }
}

/**
 * Implementation of template_preprocess_TEMPLATE().
 */
function template_preprocess_profiling_report(&$variables) {
  drupal_add_css(drupal_get_path('module', 'profiling_ui') . '/theme/profiling.css');

  $variables['items_index'] = array();
  $variables['rendered_items'] = array();

  $i = 0;
  foreach ($variables['items'] as $data) {
    $name = 'report-' . (++$i);

    $variables['items_index'][$name] = $data['title'];
    $variables['rendered_items'][$name] = theme('profiling_report_item', $data['title'], $data['content']);
  }
}

/**
 * Implementation of template_preprocess_TEMPLATE().
 */
function template_preprocess_profiling_report_item(&$variables) {
  $variables['classes'] = 'profiling-report-item';
  $variables['title'] = '<span class="profiling-collapse" title="' . t("Click to (un)collapse") . '">' . $variables['title'] . '</span>';
  $variables['content'] = '<div class="profiling-collapsible">' . $variables['content'] . '</div>';
}

/**
 * Theme a formatted value, using its unit (or not).
 * 
 * @param mixed $value
 *   Any value castable as int.
 * @param string $type
 *   Data type.
 * @param string $unit
 *   Unit.
 * @param string $suffix = TRUE
 *   (optional) If explicitely set to FALSE, won't suffix the value with the
 *   unit.
 * @param boolean $use_thresold = TRUE
 *   (optional) Use a thresold value above which the value will be highlighted.
 * @param mixed $threshold = NULL
 *   (optional) Threshold value used to compare with the value. This variable
 *   type must be compatible in order to use the PHP comparison operators with
 *   the value type.
 *   This variable is ignored if $threshold is set to FALSE.
 *   If $threshold is set to TRUE and this value is NULL, it will attempt to
 *   find a default configured threshold for the given $suffix given.
 * 
 * @return string
 *   (x)html output.
 */
function theme_profiling_value($value, $type, $unit, $suffix = TRUE, $use_threshold = TRUE, $threshold = NULL) {
  // Deal with suffix (which could be empty).
  if ($suffix && ($suffix = profiling_ui_unit_suffix($unit))) {
    $output = $value . '&nbsp;' . $suffix;
  }
  else {
    $output = (string)$value;
  }

  // Deal with threshold.
  if ($use_threshold) {
    if (!$threshold) {
      // Get default for given unit, if no custom value is given.
      $threshold = profiling_ui_threshold_get($type, $unit);
    }
    // If we already had a threshold value, or found one.
    if ($threshold && $value >= $threshold) {
      $output = '<strong>' . $output . '</strong>';
    }
  }

  return $output;
}
