<?php
<<<<<<< HEAD
=======
// $Id: pathauto_taxonomy.inc,v 1.39.2.5 2010/07/31 15:57:16 davereid Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * @file
 * Hook implementations for taxonomy module integration.
 *
 * @ingroup pathauto
 */

/**
 * Implements hook_pathauto().
 */
function taxonomy_pathauto($op) {
  switch ($op) {
    case 'settings':
      $settings = array();
      $settings['module'] = 'taxonomy';
      $settings['token_type'] = 'taxonomy';
      $settings['groupheader'] = t('Taxonomy term paths');
      $settings['patterndescr'] = t('Default path pattern (applies to all vocabularies with blank patterns below)');
      $settings['patterndefault'] = 'category/[vocab-raw]/[catpath-raw]';
      $patterns = token_get_list('taxonomy');
      foreach ($patterns as $type => $pattern_set) {
        if ($type != 'global') {
          foreach ($pattern_set as $pattern => $description) {
            $settings['placeholders']['['. $pattern .']'] = $description;
          }
        }
      }
      $settings['supportsfeeds'] = '0/feed';
      $settings['bulkname'] = t('Bulk generate aliases for terms that are not aliased');
      $settings['bulkdescr'] = t('Generate aliases for all existing terms which do not already have aliases.');

      $vocabularies = taxonomy_get_vocabularies();
      if (sizeof($vocabularies) > 0) {
        $settings['patternitems'] = array();
        $forum_vid = variable_get('forum_nav_vocabulary', '');
        foreach ($vocabularies as $vocab) {
          if ($vocab->vid != $forum_vid) {
            $vocabname = $vocab->name;
            $fieldlabel = t('Pattern for all %vocab-name paths', array('%vocab-name' => $vocabname));
            $settings['patternitems'][$vocab->vid] = $fieldlabel;
          }
        }
      }
      return (object) $settings;
    default:
      break;
  }
}

/**
 * Generate aliases for all categories without aliases.
 */
function taxonomy_pathauto_bulkupdate() {
  // From all node types, only attempt to update those with patterns
  $pattern_vids = array();
  foreach (taxonomy_get_vocabularies() as $vid => $info) {
<<<<<<< HEAD
    // Exclude forum module's vocabulary.
    if ($vid == variable_get('forum_nav_vocabulary', '')) {
      continue;
    }

=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
    $pattern = trim(variable_get('pathauto_taxonomy_'. $vid .'_pattern', ''));

    // If it's not set, check the default
    // TODO - If there's a default we shouldn't do this crazy where statement because all vocabs get aliases
    // TODO - Special casing to exclude the forum vid (and the images vid and...?)
    if (empty($pattern)) {
      $pattern = trim(variable_get('pathauto_taxonomy_pattern', ''));
    }
    if (!empty($pattern)) {
      $pattern_vids[] = $vid;
<<<<<<< HEAD
    }
  }

  $count = 0;
  if (!empty($pattern_vids)) {
    $concat = _pathauto_sql_concat("'taxonomy/term/'", 'td.tid');
    $sql = "SELECT td.tid FROM {term_data} td LEFT JOIN {url_alias} ua ON $concat = ua.src WHERE ua.src IS NULL AND td.vid IN (" . db_placeholders($pattern_vids, 'int') . ")";
    $query = db_query_range($sql, $pattern_vids, 0, variable_get('pathauto_max_bulk_update', 50));

    while ($tid = db_result($query)) {
      $term = taxonomy_get_term($tid);
      $count += _taxonomy_pathauto_alias($term, 'bulkupdate');
    }
=======
      if (empty($vid_where)) {
        $vid_where = " AND (vid = '%s' ";
      }
      else {
        $vid_where .= " OR vid = '%s'";
      }
    }
  }
  $vid_where .= ')';

  // Exclude the forums and join all the args into one array so they can be passed to db_query
  $forum_vid[] = variable_get('forum_nav_vocabulary', '');
  $query_args = array_merge($forum_vid, $pattern_vids);
  $query = "SELECT tid, vid, name, description, src, dst FROM {term_data} LEFT JOIN {url_alias} ON CONCAT('taxonomy/term/', CAST(tid AS CHAR)) = src WHERE src IS NULL AND vid <> %d ". $vid_where;
  $result = db_query_range($query, $query_args, 0, variable_get('pathauto_max_bulk_update', 50));

  $count = 0;
  $placeholders = array();
  while ($category = db_fetch_object($result)) {
    $count += _taxonomy_pathauto_alias($category, 'bulkupdate');
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }

  drupal_set_message(format_plural($count,
    'Bulk generation of terms completed, one alias generated.',
    'Bulk generation of terms completed, @count aliases generated.'));
}

/**
 * Create aliases for taxonomy objects.
 *
 * @param $category
 *   A taxonomy object.
 */
function _taxonomy_pathauto_alias($category, $op) {
  $count = 0;

  $placeholders = pathauto_get_placeholders('taxonomy', $category);

  $forum_vid = variable_get('forum_nav_vocabulary', '');
  // If we're in a forum vocabulary, also create a forum container, forum, or forum topic alias.
  if (module_exists('forum') && $forum_vid == (int)$category->vid) {
    $source = 'forum/'. $category->tid;
    if (pathauto_create_alias('forum', $op, $placeholders, $source, $category->tid, $category->vid)) {
      $count++;
    }
  }
  else {
    $source = taxonomy_term_path($category);
    if (pathauto_create_alias('taxonomy', $op, $placeholders, $source, $category->tid, $category->vid)) {
      $count++;
    }
  }
  return $count;
}

/**
 * Implementation of hook_pathauto() for forum module.
 */
function forum_pathauto($op) {
  switch ($op) {
    case 'settings':
      $settings = array();
      $settings['module'] = 'forum';
      $settings['token_type'] = 'taxonomy';
      $settings['groupheader'] = t('Forum paths');
      $settings['patterndescr'] = t('Pattern for forums and forum containers');
      $settings['patterndefault'] = '[vocab-raw]/[catpath-raw]';
      $patterns = token_get_list('taxonomy');
      foreach ($patterns as $type => $pattern_set) {
        if ($type != 'global') {
          foreach ($pattern_set as $pattern => $description) {
            $settings['placeholders']['['. $pattern .']'] = $description;
          }
        }
      }
      $settings['supportsfeeds'] = '0/feed';
      $settings['bulkname'] = t('Bulk generate aliases for forum paths that are not aliased');
      $settings['bulkdescr'] = t('Generate aliases for all existing forums and forum containers which do not already have aliases.');
      return (object) $settings;
    default:
      break;
  }
}

/**
 * Generate aliases for all forums and forum containers without aliases.
 */
function forum_pathauto_bulkupdate() {
<<<<<<< HEAD
  $concat = _pathauto_sql_concat("'forum/'", 'td.tid');
  $forum_vid = variable_get('forum_nav_vocabulary', '');
  $sql = "SELECT td.tid FROM {term_data} td LEFT JOIN {url_alias} ua ON $concat = ua.src WHERE ua.src IS NULL AND td.vid = %d";
  $query = db_query_range($sql, $forum_vid, 0, variable_get('pathauto_max_bulk_update', 50));

  $count = 0;
  while ($tid = db_result($query)) {
    $term = taxonomy_get_term($tid);
    $count += _taxonomy_pathauto_alias($term, 'bulkupdate');
=======
  $forum_vid = variable_get('forum_nav_vocabulary', '');
  $query = "SELECT tid, vid, name, description, src, dst FROM {term_data} LEFT JOIN {url_alias} ON CONCAT('forum/', CAST(tid AS CHAR)) = src WHERE vid = %d AND src IS NULL";
  $result = db_query_range($query, $forum_vid, 0, variable_get('pathauto_max_bulk_update', 50));

  $count = 0;
  $placeholders = array();
  while ($category = db_fetch_object($result)) {
    $count = _taxonomy_pathauto_alias($category, 'bulkupdate') + $count;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  }

  drupal_set_message(format_plural($count,
    'Bulk update of forums and forum containers completed, one alias generated.',
    'Bulk update of forums and forum containers completed, @count aliases generated.'));
}
