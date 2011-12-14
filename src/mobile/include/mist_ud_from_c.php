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
	$userFirstName	= $_COOKIE['userFirstName'];
	$userLastName	= $_COOKIE['userLastName'];
	$userIdentity	= $_COOKIE['userIdentity'];
	$userBirthDate	= $_COOKIE['userBirthDate'];
	$userLastLogin	= $_COOKIE['userLastLogin'];
	$userDisabled	= $_COOKIE['userDisabled'];
	$userAppsOwned	= $_COOKIE['userAppsOwned'];
	$userSupervisor	= $_COOKIE['userSupervisor'];
	
	if(empty($userFirstName) || empty($userLastName) || empty($userIdentity) || empty($userLastLogin) || empty($userAppsOwned) || empty($userSupervisor)) {
		header("Location: http://genleadership.com/mobile/visionbuilding/register.php");
		throw new Exception('[Login] User verification failed. Could not instantiate user in table. Doesnt exist?');
	}
	elseif($userDisabled == "1") {
		throw new Exception('[Login] User verification failed. User is disabled. Exists, disabled.');
	}
	else {
		$passback = array(	"userFirstName" => $userFirstName,
						 	"userLastName" => $userLastName, 
						 	"userIdentity" => $userIdentity, 
						 	"userBirthDate" => $userBirthDate, 
						 	"userLastLogin" => $userLastLogin, 
						 	"userAppsOwned" => $userAppsOwned, 
						 	"userSupervisor" => $userSupervisor	);
	}
	
} catch (Exception $e) {
	mist_error_thrower($e->getMessage());
}

?>