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

// Register cookies is very seriously beta only stuff. Don't. DON'T use it later.

$username = $_POST['username'];
$password = $_POST['password'];
$first = $_POST['first'];
$last = $_POST['last'];
$dob = $_POST['dob'];
$ll = $_POST['ll'];
$disabled = "0";
$apps = "all";
$super = "Chuck Tester";

if(empty($username)) {
$username = $_GET['username'];
$password = $_GET['password'];
$first = $_GET['first'];
$last = $_GET['last'];
$dob = $_GET['dob'];
$ll = $_GET['ll'];
$disabled = "0";
$apps = "all";
$super = "Chuck Tester";
}

setcookie("userFirstName", $first, time()+999999999, "/mobile/", "genleadership.com");
setcookie("userLastName", $last, time()+999999999, "/mobile/", "genleadership.com");
setcookie("userIdentity", "24", time()+999999999, "/mobile/", "genleadership.com");
setcookie("userBirthDate", $dob, time()+999999999, "/mobile/", "genleadership.com");
setcookie("userLastLogin", $ll, time()+999999999, "/mobile/", "genleadership.com");
setcookie("userDisabled", $disabled, time()+999999999, "/mobile/", "genleadership.com");
setcookie("userAppsOwned", $apps, time()+999999999, "/mobile/", "genleadership.com");
setcookie("userSupervisor", $super, time()+999999999, "/mobile/", "genleadership.com");

if(empty($_COOKIE['userFirstName'])) {
header("Location: http://genleadership.com/mobile/visionbuilding/register_cookies.php?username=$username&password=$password&first=$first&last=$last&dob=$dob&ll=$ll&disabled=$disabled&apps=$apps&super=$super");
}
else{
header("Location: http://genleadership.com/mobile/visionbuilding/index.php");
} 

?>