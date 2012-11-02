<?php
<<<<<<< HEAD
=======
// $Id: token.api.php,v 1.1.2.2 2010/09/23 01:04:12 davereid Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * @file
 * Hooks provided by the token module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Provide metadata about available placeholder tokens and token types.
 *
 * @param $type
 *   The type of tokens to list (e.g. 'global', 'node', or 'user'). To list all
 *   tokens, use 'all'.
 *
 * @return
 *   An associative array of available tokens. The base array is keys of token
 *   types and an array of its tokens. The token arrays are keys containing the
 *   raw name of the token and values containing its user-friendly name.
 */
function hook_token_list($type = 'all') {
  $tokens = array();

  if ($type == 'global' || $type == 'all') {
    $tokens['global']['random-number'] = t('A randomly generated number.');

  }
  if ($type == 'node' || $type == 'all') {
    $tokens['node']['node-random-nid'] = t("A randomly generated number between one and the node's unique ID.");
  }

  return $tokens;
}

/**
 * Provide replacement values for placeholder tokens.
 *
 * @param $type
 *   The type of token being replaced (e.g. 'global', 'node', or 'user').
 * @param $data
 *   (optional) An object to be used when generating replacement values.
 * @param $options
 *   (optional) A associative array of options to control the token replacement
 *   process.
 *
 * @return
 *   An associative array of replacement values, keyed by the original 'raw'
 *   tokens that were found in the source text. For example:
 *   $values['title-raw'] = 'My new node';
<<<<<<< HEAD
 *
 * @see hook_token_values_alter()
=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 */
function hook_token_values($type, $object = NULL, $options = array()) {
  $values = array();

  if ($type == 'global') {
    $values['random-number'] = mt_rand();
  }

  if ($type == 'node' && !empty($object)) {
    $values['node-random-nid'] = mt_rand(1, $object->nid);
  }

  return $values;
}

/**
<<<<<<< HEAD
 * Alter replacement values for placeholder tokens.
 *
 * @param $replacements
 *   An associative array of replacements returned by hook_token_values().
 * @param $context
 *   The context in which hook_token_values() was called. An associative array
 *   with the following keys, which have the same meaning as the corresponding
 *   parameters of hook_token_values():
 *   - 'type'
 *   - 'object'
 *   - 'options'
 *
 * @see hook_token_values()
 */
function hook_token_values_alter(&$replacements, $context) {
  if ($context['type'] == 'node' && !empty($context['object'])) {
    $node = $context['object'];

    if (isset($replacements['title-raw']) && !empty($node->field_title[0]['value'])) {
      $title = $node->field_title[0]['value'];
      $replacements['title-raw'] = $title;
      $replacements['title'] = check_plain($title);
    }
  }
}

/**
=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 * @} End of "addtogroup hooks".
 */
