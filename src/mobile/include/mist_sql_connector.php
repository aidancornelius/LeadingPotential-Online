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

try {
	// Attempt to connect to the database using the definitions from mist_config.php
	$socket = mysql_connect($server = mist_mysql_server, $username = mist_mysql_username, $password = mist_mysql_password) or throw new Exception('[MySQL] Failed to connect ' . mysql_error());
	
	// Select our database on the socket (if nothing went horribly wrong)
	mysql_select_db("genleadership-com", $socket);
	
} catch (Exception $e) {
	mist_error_thrower($e->getMessage());
}

?>