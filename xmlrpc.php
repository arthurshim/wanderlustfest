<?php
<<<<<<< HEAD
=======
// $Id: xmlrpc.php,v 1.15 2005/12/10 19:26:47 dries Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * @file
 * PHP page for handling incoming XML-RPC requests from clients.
 */

include_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
include_once './includes/xmlrpc.inc';
include_once './includes/xmlrpcs.inc';

xmlrpc_server(module_invoke_all('xmlrpc'));
