<?php
<<<<<<< HEAD
// $Id: date-vcalendar.tpl.php,v 1.1.2.5 2010/11/20 13:25:54 karens Exp $
=======
// $Id: date-vcalendar.tpl.php,v 1.1.2.4 2009/01/10 22:43:01 karens Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * $calname
 *   The name of the calendar.
 * $events
 *   @see date-vevent.tpl.php.
 *   @see date-valarm.tpl.php.
 */
?>
<<<<<<< HEAD
BEGIN:VCALENDAR
VERSION:2.0
METHOD:PUBLISH
X-WR-CALNAME: <?php print $calname ?>
PRODID:-//Drupal iCal API//EN
<?php foreach($events as $event): ?>
<?php print theme('date_vevent', $event); ?>
<?php endforeach; ?>
END:VCALENDAR
=======
BEGIN:VCALENDAR
VERSION:2.0
METHOD:PUBLISH
X-WR-CALNAME: <?php print $calname ?> 
PRODID:-//Drupal iCal API//EN
<?php foreach($events as $event): ?>
<?php print theme('date_vevent', $event); ?>
<?php endforeach; ?>
END:VCALENDAR
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
