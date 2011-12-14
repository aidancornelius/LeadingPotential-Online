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

// This includes everything we need / will need for any possible function - it's NOT a memory overload, 
// well it is, but the frontend is AJAX so the server just has to deal.

// If we absolutely need to debug everything (note this turns on Notice:)
ini_set("display_errors", 0);

// The only define in this file, that I really want, at least.
$root = $_SERVER['DOCUMENT_ROOT']; define('__ROOT__', $root); unset($root); 

// Load configuration
require(__ROOT__ . '/mobile/mist_config.php');

// Load Globals
require(__ROOT__ . '/mobile/mist_global_definitions.php');

// Load functions
require(__ROOT__ . '/mobile/mist_functions_list.php');

// Load security
require(__ROOT__ . '/mobile/mist_mobile_security.php');

	mist_loader_done($errors);
	
	$userData = mist_ud_from_c();


?>