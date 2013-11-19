<?php

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