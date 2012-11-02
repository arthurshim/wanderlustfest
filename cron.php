<?php
<<<<<<< HEAD
=======
// $Id: cron.php,v 1.36 2006/08/09 07:42:55 dries Exp $

>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * @file
 * Handles incoming requests to fire off regularly-scheduled tasks (cron jobs).
 */

include_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
drupal_cron_run();
