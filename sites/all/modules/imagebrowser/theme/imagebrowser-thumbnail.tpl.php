<?php
<<<<<<< HEAD
=======
// $Id: imagebrowser-thumbnail.tpl.php,v 1.1.4.3 2009/10/24 17:04:42 starnox Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

/**
 * @file
 * This template outputs individual thumbnails in Image Browser's browser.
 *
 * Variables:
 * - $fid
 * - $path
 * - $title
 */
?>
<a href="<?php print url('imagebrowser/'. arg(1) .'/insert/'. $fid); ?>" title="<?php print $title; ?>"><?php print theme('imagecache', 'ib_thumbnail', $path, $title, $title); ?></a>