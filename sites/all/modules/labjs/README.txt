
= INTRODUCTION =

LABjs is the performance script loader. It loads all your JavaScript in parallel.
Of course, this module is only useful when JavaScript preprocess is
disabled.

Project homepage: http://drupal.org/project/labjs

= INSTALL =

- Download the LABjs library at http://labjs.com/download.php
- Extract to sites/all/libraries/labjs.
  There should be a file sites/all/libraries/labjs/LAB.min.js
- Enable this module

= CONFIGURATION =

If there is a problem, go to admin/settings/performance/labjs and enable the
option to rewrite JavaScript blocks in page content/closure. By default, this
module rewrites only the script block in header.

= COMPATIBILITY =

LABjs, like any other script loader, does not support JavaScript with
document.write() calls at the moment.

If you don't want LABjs to process your script, use this:
    drupal_add_js((defined('LABJS_EXCLUDE') ? LABJS_EXCLUDE . "\n" : "") . $myscript, 'inline');
If you want to use a JavaScript file, convert it into inline block, then use the
above code:
    document.write(unescape("%3Cscript src='/path/to/script.js' type='text/javascript'%3E%3C/script%3E"));


This module tries to maintain a maximum compatibility with all JavaScript code.
If you have any problem, please file an issue in the project homepage.
