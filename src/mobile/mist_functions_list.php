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

// This is probably going to be the knurliest of files, hopefully it won't be all over the place.

/// Core functions, really useful stuff - don't disable it unless really necessary because it'll break more than you think

// Mist Error Thrower - This is just a unified error theme. Pass it an array and it makes some neat text.
function mist_error_thrower($error) { require_once(__ROOT__.'/mobile/include/mist_error_thrower.php'); }

// Mist Loader Done - This is an error collector, in spite of try. It's also called AFTER the includes, so it can be useful!
function mist_loader_done($errors) { if($errors >= 1) { mist_error_thrower("A fatal error occurred. A function or require failed to load."); } }

// Mist SQL Connector - This is a MySQL database connector, not the only one though.
function mist_sql_connect($mist_mysql_server, $mist_mysql_username, $mist_mysql_password, $mist_mysql_database) { require_once(__ROOT__.'/mobile/include/mist_sql_connector.php'); }

// Mist HTML Grabber - This grabs the HTML files in /HTML_TEMPLATES/*.php (and presents them as such)
function mist_html_grabber($filename) { require_once(__ROOT__.'/mobile/include/mist_html_grabber.php'); }

// Mist UD from C - This converts the user data from cookies to variables. It's neat, and, as of v.2 secure!
function mist_ud_from_c() { require_once(__ROOT__.'/mobile/include/mist_ud_from_c.php'); return($passback); }

?>