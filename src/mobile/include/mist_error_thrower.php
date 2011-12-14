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

// This just throws nice unified errors, it's not a big deal.
// and yes, it does just die no matter what - it does it cleanly though.

try {
	die("Mist Engine Error: (Fatal) ". $error . " [Extension tried to continue]");
} catch (Exception $e) {
	die("Mist Engine Error: (Fatal) " . $e->getMessage() . " [Extension died totally]");
}

?>