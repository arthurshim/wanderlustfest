<?php
<<<<<<< HEAD
=======
// $Id: views_bulk_operations.views_default.inc,v 1.1.2.10 2010/09/29 19:26:22 kratib Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

function views_bulk_operations_views_default_views() {
  // Admin content.
  $view = new view;
  $view->name = 'admin_content';
<<<<<<< HEAD
  $view->description = 'Emulates the Drupal content administration page.';
  $view->tag = '';
  $view->base_table = 'node';
  $view->core = 0;
  $view->api_version = '2';
  $view->disabled = TRUE;
  $handler = $view->new_display('default', 'Default', 'default');
  $handler->override_option('fields', array(
    'title' => array(
      'label' => 'Title',
=======
  $view->description = t('Emulates the Drupal content administration page.');
  $view->tag = '';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', t('Default'), 'default');
  $handler->override_option('fields', array(
    'title' => array(
      'label' => t('Title'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      'link_to_node' => 1,
      'exclude' => 0,
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'relationship' => 'none',
      'override' => array(
        'button' => 'Override',
      ),
    ),
    'timestamp' => array(
<<<<<<< HEAD
      'label' => 'New?',
=======
      'label' => t('New?'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      'link_to_node' => 0,
      'comments' => 0,
      'exclude' => 0,
      'id' => 'timestamp',
      'table' => 'history_user',
      'field' => 'timestamp',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'type' => array(
<<<<<<< HEAD
      'label' => 'Type',
=======
      'label' => t('Type'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      'link_to_node' => 0,
      'exclude' => 0,
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'name' => array(
<<<<<<< HEAD
      'label' => 'Author',
=======
      'label' => t('Author'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      'link_to_user' => 1,
      'exclude' => 0,
      'id' => 'name',
      'table' => 'users',
      'field' => 'name',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'status' => array(
<<<<<<< HEAD
      'label' => 'Published',
=======
      'label' => t('Published'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      'type' => 'yes-no',
      'not' => 0,
      'exclude' => 0,
      'id' => 'status',
      'table' => 'node',
      'field' => 'status',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'edit_node' => array(
<<<<<<< HEAD
      'label' => 'Edit',
=======
      'label' => t('Edit'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      'text' => '',
      'exclude' => 0,
      'id' => 'edit_node',
      'table' => 'node',
      'field' => 'edit_node',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('sorts', array(
    'changed' => array(
      'order' => 'DESC',
      'granularity' => 'second',
      'id' => 'changed',
      'table' => 'node',
      'field' => 'changed',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('filters', array(
    'title' => array(
      'operator' => 'contains',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'title_op',
        'identifier' => 'title',
<<<<<<< HEAD
        'label' => 'Title contains',
=======
        'label' => t('Title contains'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
        'optional' => 1,
        'remember' => 0,
      ),
      'case' => 0,
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'type' => array(
      'operator' => 'in',
      'value' => array(),
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'type_op',
        'identifier' => 'type',
<<<<<<< HEAD
        'label' => 'Type',
=======
        'label' => t('Type'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
        'optional' => 1,
        'single' => 1,
        'remember' => 0,
        'reduce' => 0,
      ),
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'promote' => array(
      'operator' => '=',
      'value' => 'All',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'operator' => '',
        'identifier' => 'promote',
<<<<<<< HEAD
        'label' => 'Promoted',
=======
        'label' => t('Promoted'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
        'optional' => 1,
        'remember' => 0,
      ),
      'id' => 'promote',
      'table' => 'node',
      'field' => 'promote',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'status' => array(
      'operator' => '=',
      'value' => 'All',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'operator' => '',
        'identifier' => 'status',
<<<<<<< HEAD
        'label' => 'Published',
=======
        'label' => t('Published'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
        'optional' => 1,
        'remember' => 0,
      ),
      'id' => 'status',
      'table' => 'node',
      'field' => 'status',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'sticky' => array(
      'operator' => '=',
      'value' => 'All',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'operator' => '',
        'identifier' => 'sticky',
<<<<<<< HEAD
        'label' => 'Sticky',
=======
        'label' => t('Sticky'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
        'optional' => 1,
        'remember' => 0,
      ),
      'id' => 'sticky',
      'table' => 'node',
      'field' => 'sticky',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('access', array(
    'type' => 'perm',
    'perm' => 'administer nodes',
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
<<<<<<< HEAD
  $handler->override_option('title', 'Content');
  $handler->override_option('empty', 'There are no objects satisfying the filter settings. Try changing them to get some results.');
=======
  $handler->override_option('title', t('Content'));
  $handler->override_option('empty', t('There are no objects satisfying the filter settings. Try changing them to get some results.'));
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', 20);
  $handler->override_option('use_pager', '1');
  $handler->override_option('style_plugin', 'bulk');
  $handler->override_option('style_options', array(
    'grouping' => '',
    'override' => 1,
    'sticky' => 0,
    'order' => 'asc',
    'columns' => array(
      'title' => 'title',
      'timestamp' => 'title',
      'type' => 'type',
      'name' => 'name',
      'status' => 'status',
      'edit_node' => 'edit_node',
    ),
    'info' => array(
      'title' => array(
        'sortable' => 1,
        'separator' => '&nbsp;',
      ),
      'timestamp' => array(
        'separator' => '',
      ),
      'type' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'name' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'status' => array(
        'sortable' => 0,
        'separator' => '',
      ),
      'edit_node' => array(
        'separator' => '',
      ),
    ),
    'default' => '-1',
    'execution_type' => '1',
    'display_type' => '0',
    'hide_select_all' => 0,
<<<<<<< HEAD
    'display_result' => 1,
    'merge_single_action' => 0,
    'operations' => array(
      'node_assign_owner_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'views_bulk_operations_delete_node_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'views_bulk_operations_script_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'node_make_sticky_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'node_make_unsticky_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'views_bulk_operations_fields_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'views_bulk_operations_taxonomy_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'node_promote_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'node_publish_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'node_unpromote_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'node_unpublish_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
    ),
  ));
  $handler = $view->new_display('page', 'Page', 'page');
=======
    'skip_confirmation' => 0,
    'display_result' => 1,
    'merge_single_action' => 0,
    'selected_operations' => array(
      'node_assign_owner_action' => 'node_assign_owner_action',
      'views_bulk_operations_delete_node_action' => 'views_bulk_operations_delete_node_action',
      'views_bulk_operations_script_action' => 'views_bulk_operations_script_action',
      'node_make_sticky_action' => 'node_make_sticky_action',
      'node_make_unsticky_action' => 'node_make_unsticky_action',
      'views_bulk_operations_fields_action' => 'views_bulk_operations_fields_action',
      'views_bulk_operations_taxonomy_action' => 'views_bulk_operations_taxonomy_action',
      'node_promote_action' => 'node_promote_action',
      'node_publish_action' => 'node_publish_action',
      'node_unpromote_action' => 'node_unpromote_action',
      'node_unpublish_action' => 'node_unpublish_action',
    ),
  ));
  $handler = $view->new_display('page', t('Page'), 'page');
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $handler->override_option('path', 'admin/content/node2');
  $handler->override_option('menu', array(
    'type' => 'none',
    'title' => '',
    'description' => '',
    'weight' => 0,
    'name' => 'navigation',
  ));
  $handler->override_option('tab_options', array(
    'type' => 'none',
    'title' => '',
    'description' => '',
    'weight' => 0,
<<<<<<< HEAD
    'name' => 'navigation',
=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  ));
  $views[$view->name] = $view;

  // Admin users.
  $view = new view;
  $view->name = 'admin_users';
<<<<<<< HEAD
  $view->description = 'Emulates the Drupal user administration page.';
  $view->tag = '';
  $view->base_table = 'users';
  $view->core = 0;
  $view->api_version = '2';
  $view->disabled = TRUE;
  $handler = $view->new_display('default', 'Default', 'default');
  $handler->override_option('fields', array(
    'name' => array(
      'label' => 'Username',
=======
  $view->description = t('Emulates the Drupal user administration page.');
  $view->tag = '';
  $view->view_php = '';
  $view->base_table = 'users';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', t('Default'), 'default');
  $handler->override_option('fields', array(
    'name' => array(
      'label' => t('Username'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'link_to_user' => 1,
      'overwrite_anonymous' => 0,
      'anonymous_text' => '',
      'exclude' => 0,
      'id' => 'name',
      'table' => 'users',
      'field' => 'name',
      'relationship' => 'none',
    ),
    'status' => array(
<<<<<<< HEAD
      'label' => 'Active',
=======
      'label' => t('Active'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'type' => 'yes-no',
      'not' => 0,
      'exclude' => 0,
      'id' => 'status',
      'table' => 'users',
      'field' => 'status',
      'relationship' => 'none',
    ),
    'rid' => array(
<<<<<<< HEAD
      'label' => 'Roles',
=======
      'label' => t('Roles'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'type' => 'ul',
      'separator' => ', ',
      'exclude' => 0,
      'id' => 'rid',
      'table' => 'users_roles',
      'field' => 'rid',
      'relationship' => 'none',
    ),
    'created' => array(
<<<<<<< HEAD
      'label' => 'Member for',
=======
      'label' => t('Member for'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'date_format' => 'raw time span',
      'custom_date_format' => '',
      'exclude' => 0,
      'id' => 'created',
      'table' => 'users',
      'field' => 'created',
      'relationship' => 'none',
    ),
    'access' => array(
<<<<<<< HEAD
      'label' => 'Last access',
=======
      'label' => t('Last access'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'date_format' => 'time ago',
      'custom_date_format' => '',
      'exclude' => 0,
      'id' => 'access',
      'table' => 'users',
      'field' => 'access',
      'relationship' => 'none',
    ),
    'edit_node' => array(
<<<<<<< HEAD
      'label' => 'Operations',
=======
      'label' => t('Operations'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'text' => '',
      'exclude' => 0,
      'id' => 'edit_node',
      'table' => 'users',
      'field' => 'edit_node',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('filters', array(
    'uid' => array(
      'operator' => 'not in',
      'value' => array(
<<<<<<< HEAD
        0 => 0,
=======
        '0' => 0,
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
      ),
      'group' => '0',
      'exposed' => FALSE,
      'expose' => array(
        'operator' => FALSE,
        'label' => '',
      ),
      'id' => 'uid',
      'table' => 'users',
      'field' => 'uid',
      'relationship' => 'none',
    ),
    'rid' => array(
      'operator' => 'or',
      'value' => array(),
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'rid_op',
        'identifier' => 'rid',
<<<<<<< HEAD
        'label' => 'Role',
=======
        'label' => t('Role'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
        'optional' => 1,
        'single' => 1,
        'remember' => 0,
        'reduce' => 0,
      ),
      'id' => 'rid',
      'table' => 'users_roles',
      'field' => 'rid',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
      'reduce_duplicates' => 0,
    ),
    'status' => array(
      'operator' => '=',
      'value' => 'All',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'operator' => '',
        'identifier' => 'status',
<<<<<<< HEAD
        'label' => 'Active',
=======
        'label' => t('Active'),
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
        'optional' => 1,
        'remember' => 0,
      ),
      'id' => 'status',
      'table' => 'users',
      'field' => 'status',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('access', array(
    'type' => 'perm',
    'perm' => 'administer users',
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
  $handler->override_option('items_per_page', 20);
  $handler->override_option('use_pager', '1');
  $handler->override_option('style_plugin', 'bulk');
  $handler->override_option('style_options', array(
    'grouping' => '',
    'override' => 1,
    'sticky' => 0,
    'order' => 'desc',
    'columns' => array(
      'name' => 'name',
      'status' => 'status',
      'rid' => 'rid',
      'created' => 'created',
      'access' => 'access',
      'edit_node' => 'edit_node',
    ),
    'info' => array(
      'name' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'status' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'rid' => array(
        'separator' => '',
      ),
      'created' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'access' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'edit_node' => array(
        'separator' => '',
      ),
    ),
    'default' => 'created',
    'execution_type' => '1',
    'display_type' => '0',
    'hide_select_all' => 0,
<<<<<<< HEAD
    'display_result' => 1,
    'merge_single_action' => 1,
    'operations' => array(
      'user_user_operations_block' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'views_bulk_operations_delete_user_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'views_bulk_operations_script_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'views_bulk_operations_user_roles_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'system_send_email_action' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
      'user_user_operations_unblock' => array(
        'selected' => TRUE,
        'label' => NULL,
        'settings' => NULL,
        'skip_confirmation' => 0,
      ),
    ),
  ));
  $handler = $view->new_display('page', 'Page', 'page_1');
=======
    'skip_confirmation' => 0,
    'display_result' => 1,
    'merge_single_action' => 1,
    'selected_operations' => array(
      'user_user_operations_block' => 'user_user_operations_block',
      'views_bulk_operations_delete_user_action' => 'views_bulk_operations_delete_user_action',
      'views_bulk_operations_script_action' => 'views_bulk_operations_script_action',
      'views_bulk_operations_user_roles_action' => 'views_bulk_operations_user_roles_action',
      'system_send_email_action' => 'system_send_email_action',
      'user_user_operations_unblock' => 'user_user_operations_unblock',
      'user_block_ip_action' => 0,
      'user_block_user_action' => 0,
      'system_message_action' => 0,
      'views_bulk_operations_action' => 0,
      'views_bulk_operations_profile_action' => 0,
      'views_bulk_operations_argument_selector_action' => 0,
      'system_goto_action' => 0,
    ),
  ));
  $handler = $view->new_display('page', t('Page'), 'page_1');
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  $handler->override_option('path', 'admin/user/user2');
  $handler->override_option('menu', array(
    'type' => 'none',
    'title' => '',
    'description' => '',
    'weight' => 0,
    'name' => 'navigation',
  ));
  $handler->override_option('tab_options', array(
    'type' => 'none',
    'title' => '',
    'description' => '',
    'weight' => 0,
<<<<<<< HEAD
    'name' => 'navigation',
=======
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  ));
  $views[$view->name] = $view;

  return $views;
}
<<<<<<< HEAD
=======

>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
