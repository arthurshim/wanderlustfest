<<<<<<< HEAD
Description
-----------
This module adds a webform content type to your Drupal site.
A webform can be a questionnaire, contact or request form. These can be used 
by visitor to make contact or to enable a more complex survey than polls
provide. Submissions from a webform are saved in a database table and 
can optionally be mailed to e-mail addresses upon submission.

Requirements
------------
Drupal 6.16 or higher

Installation
------------
1. Copy the entire webform directory the Drupal sites/all/modules directory.

2. Login as an administrator. Enable the module in the "Administer" -> "Site
   Building" -> "Modules"

3. (Optional) Edit the settings under "Administer" -> "Site configuration" ->
   "Webform"

4. Create a webform node at node/add/webform.

Upgrading from previous versions
--------------------------------
1. Copy the entire webform directory the Drupal modules directory.

2. Login as the FIRST user or change the $access_check in update.php to FALSE

3. Run update.php (at http://www.example.com/update.php)

Support
-------
Please use the issue queue for filing bugs with this module at
http://drupal.org/project/issues/webform

=======
Description:
------------
This module adds a webform nodetype to your Drupal site.
A webform can be a questionnaires, contact or request form. These can be used 
by visitor to make contact or to enable a more complex survey that the type 
polls enable. Submissions from a webform are saved in a database table and 
can optionaly also be mailed to an e-mail address upon submission.

It was developed with fundings from AF Indurstri AB (www.af.se), 
Open Source City (www.opensourcecity.org) and Karlstad University Library 
(www.bib.kau.se).
Also many thanks to the Dupal community for all bughunting.

Code Contributions
------------------
jnt
townxelliot
quicksketch

(if you feel left out please send me a message thru the contact form 
on http://drupal.org/user/6096/contact)


Translation
-----------
Spanish translation is made by Sergio Gonzalez.

Todo:
-----
For an up to date todo list look at the issue tracker at:
http://drupal.org/project/issues/webform

$Id: README.txt,v 1.8 2008/02/24 20:28:16 quicksketch Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
