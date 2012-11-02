<?php

/**
 * Implementation of hook_context_default_contexts().
 */
function wl_standard_deploy_context_default_contexts() {
  $export = array();
<<<<<<< HEAD

=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'healers_landing';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'healers' => 'healers',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-highlighted_artists-block_3' => array(
          'module' => 'views',
          'delta' => 'highlighted_artists-block_3',
          'region' => 'headliners',
          'weight' => NULL,
        ),
      ),
      'layout' => 'artist-landing',
    ),
  );
  $context->condition_mode = 0;
<<<<<<< HEAD
  $export['healers_landing'] = $context;

=======

  $export['healers_landing'] = $context;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'meditation_landing';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'meditation' => 'meditation',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-highlighted_artists-block_7' => array(
          'module' => 'views',
          'delta' => 'highlighted_artists-block_7',
          'region' => 'headliners',
          'weight' => NULL,
        ),
      ),
      'layout' => 'artist-landing',
    ),
  );
  $context->condition_mode = 0;
<<<<<<< HEAD
  $export['meditation_landing'] = $context;

=======

  $export['meditation_landing'] = $context;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'music_landing';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'music' => 'music',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-highlighted_artists-block_2' => array(
          'module' => 'views',
          'delta' => 'highlighted_artists-block_2',
          'region' => 'headliners',
          'weight' => NULL,
        ),
      ),
      'layout' => 'artist-landing',
    ),
  );
  $context->condition_mode = 0;
<<<<<<< HEAD
  $export['music_landing'] = $context;

=======

  $export['music_landing'] = $context;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'performer_landing';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'theatrical-performers' => 'theatrical-performers',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-highlighted_artists-block_6' => array(
          'module' => 'views',
          'delta' => 'highlighted_artists-block_6',
          'region' => 'headliners',
          'weight' => NULL,
        ),
      ),
      'layout' => 'artist-landing',
    ),
  );
  $context->condition_mode = 0;
<<<<<<< HEAD
  $export['performer_landing'] = $context;

=======

  $export['performer_landing'] = $context;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'presenter_landing';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'presenters' => 'presenters',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-highlighted_artists-block_4' => array(
          'module' => 'views',
          'delta' => 'highlighted_artists-block_4',
          'region' => 'headliners',
          'weight' => NULL,
        ),
      ),
      'layout' => 'artist-landing',
    ),
  );
  $context->condition_mode = 0;
<<<<<<< HEAD
  $export['presenter_landing'] = $context;

=======

  $export['presenter_landing'] = $context;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'speakers_landing';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'speakers' => 'speakers',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-highlighted_artists-block_5' => array(
          'module' => 'views',
          'delta' => 'highlighted_artists-block_5',
          'region' => 'headliners',
          'weight' => '-55',
        ),
      ),
      'layout' => 'artist-landing',
    ),
  );
  $context->condition_mode = 0;
<<<<<<< HEAD
  $export['speakers_landing'] = $context;

=======

  $export['speakers_landing'] = $context;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'standard-site';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'site' => array(
      'values' => array(
        8 => 8,
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'nice_menus-3' => array(
          'module' => 'nice_menus',
          'delta' => 3,
          'region' => 'navigation',
          'weight' => NULL,
        ),
      ),
    ),
  );
  $context->condition_mode = 0;
<<<<<<< HEAD
  $export['standard-site'] = $context;

=======

  $export['standard-site'] = $context;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'yoga_landing';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'yoga' => 'yoga',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-highlighted_artists-block_1' => array(
          'module' => 'views',
          'delta' => 'highlighted_artists-block_1',
          'region' => 'headliners',
          'weight' => '-55',
        ),
      ),
      'layout' => 'artist-landing',
    ),
  );
  $context->condition_mode = 0;
<<<<<<< HEAD
  $export['yoga_landing'] = $context;

=======

  $export['yoga_landing'] = $context;
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  return $export;
}
