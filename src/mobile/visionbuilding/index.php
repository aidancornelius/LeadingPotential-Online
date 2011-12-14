<?php
/* @Core: 		Mist
   @Version:	1.01b
   @Author: 	Aidan Cornelius-Bell
   @Author:		http://aidancornelius.net/
   @Update URL:	http://beaconsfieldit.net/mistcore
   @License:	Modified BSD licence / Restricted private license
   
   @Custom:		Leading Potential
   @Custom:		Content © 2012 Leading Potential
   @Custom:		Generative Leadership Mobile Frontend (iOS)
   @Custom:		A Beaconsfield IT, Leading Potential Joint Venture
*/

// Vision Building App MASTER Index.

// The line required in all standalones...
$root = $_SERVER['DOCUMENT_ROOT']; define('__ROOT__', $root); unset($root); require(__ROOT__ . '/mobile/mist_header.php');

// Display the header
mist_html_grabber("header");

// Do the Username stuff from cookies
print('<div class="grand_header_roll"><div class="grand_header_roll_userfloat"><a href="#">');
print($userData['userFirstName']);
print('</a></div></div><div class="grand_spacerheader"></div>');

// Some code, or the page…
print('
  <div class="grand_bigbutton"><div class="grand_bigbutton_text"><a href="watch.php">Watch the video</a></div></div>
  <div class="grand_spacer"></div>
  <div class="grand_bigbutton"><div class="grand_bigbutton_text"><a href="read.php">Read the material</a></div></div>
  <div class="grand_spacer"></div>
  <div class="grand_bigbutton"><div class="grand_bigbutton_text"><a href="interact.php">Take the survey</a></div></div>
  <div class="grand_spacer"></div>
  <div class="grand_bigbutton"><div class="grand_bigbutton_text"><a href="forum.php">View the forum</a></div></div>
  <div class="grand_spacer"></div>
  <div class="grand_bigbutton"><div class="grand_bigbutton_text"><a href="register.php">Logout</a></div></div>
  <div class="grand_spacer"></div>
  <div class="grand_developerbutton"><div class="grand_bigbutton_text"><a href="devtools.php">Developer Options</a></div></div>
');

// Display the footer
mist_html_grabber("footer");

?>