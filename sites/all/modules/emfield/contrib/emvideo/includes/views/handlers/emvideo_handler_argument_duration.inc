<?php
<<<<<<< HEAD
=======
// $Id: emvideo_handler_argument_duration.inc,v 1.1.2.1 2009/09/30 15:56:48 aaron Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * @file
 * The subclass simply adds properties,
 * for field-specific subclasses to use if they need to.
 */
class emvideo_handler_argument_duration extends content_handler_argument_numeric {
  /**
   * Override the behavior of title().
   */
  function title() {
    $duration = $this->argument;
    return emvideo_seconds_to_time($duration);
  }
}
