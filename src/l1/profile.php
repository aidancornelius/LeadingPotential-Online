<?
// 
// Copyright (c) 2011, Beaconsfield IT
// All rights reserved.
//
// This software was manufactured for Leading Potential (hereinafter The Company), 
// any use by The Company is acceptable, even excluding the conditions of this license.
// 
// Redistribution and use in source and binary forms, with or without
// modification, are permitted provided that the following conditions are met:
//     * Redistributions of source code must retain the above copyright
//       notice, this list of conditions and the following disclaimer.
//     * Redistributions in binary form must reproduce the above copyright
//       notice, this list of conditions and the following disclaimer in the
//       documentation and/or other materials provided with the distribution.
//     * Neither the name of the Beaconsfield IT nor the
//       names of its contributors may be used to endorse or promote products
//       derived from this software without specific prior written permission.
//     * And; This software may not be redistributed and sold under 
//       any condition, even meeting the prior criteria(s).
//     * All advertising materials mentioning features or use of this software
//       must display the following acknowledgement:
//       This product includes software developed by Beaconsfield IT.
// 
// THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
// ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
// WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
// DISCLAIMED. IN NO EVENT SHALL BEACONSFIELD IT BE LIABLE FOR ANY
// DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
// (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
// LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
// ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
// (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
// SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//

/// Profile Comptroller
$root = $_SERVER['DOCUMENT_ROOT'];
require("include/idtousername.php");
require("$root/l1/include/configuration.php");
require("$root/l1/include/getgravatar.php");

$socket = sqlconnect();
$id = $_COOKIE['id'];
$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
$firstname = $_COOKIE['firstname'];
$fullname = $_COOKIE['fullname'];
$validity = $_COOKIE['validity'];
$lastlogin = $_COOKIE['lastlogin'];
$locations = $_COOKIE['locations'];
$attachedto = $_COOKIE['attachedto'];
$date = date('l \t\h\e jS \of F Y \a\t h:i:s A');
$sql = mysql_query("SELECT * FROM `accounts` WHERE `id`='$id'");
$sqlrow = mysql_fetch_array($sql);
$bio = $sqlrow['bio'];
$location = $sqlrow['userlocation'];
$emails = $sqlrow['emails'];
$notifications = $sqlrow['notifications'];
$gravatar = $sqlrow['emailgravatar'];
$messages = $sqlrow['messagecount'];
$notifications= $sqlrow['notificationcount'];

if($emails == "1") {
	$emails = "checked";
}
if($notifications == "1") {
	$notifications = "checked";
}

if ($attachedto == "0") {
	$attachedto = "none. Your account is a (SU) SuperUser";
}
else {
	$attachedto = idtousername($attachedto);
}

require("include/header.php");
echo '<div id="container">'; 
if ($_GET['mode'] == "update") {
	$bio = $_POST['bio'];
	if(empty($_POST['bio'])) {
		echo "Enter details first!";
		echo '<meta http-equiv="refresh" content="1; url=http://genleadership.com/l1/profile.php?message=3">';
		die();
	}
	$location = $_POST['location'];
	$gravatar = $_POST['emailgravatar'];
	$passwordp = $_POST['password'];
	$password2 = $_POST['password2'];
	if ($passwordp == $password2) {
		$password = $passwordp;
	}
	else {
		echo "Your password was not updated, they did not match!";
		echo '<meta http-equiv="refresh" content="1; url=http://genleadership.com/l1/profile.php?message=3">';
		die();
	}
	$notifications = $_POST['notifications'];
	if ($notifications == "on") {
		$notifications = "1";
	}
	$emails = $_POST['emails'];
	if ($emails == "on") {
		$emails = "1";
	}
	$socket = sqlconnect();
	mysql_query("UPDATE `genleadership-com`.`accounts` SET `password` = '$password', `bio` = '$bio', `emailgravatar` = '$gravatar', `userlocation` = '$location', `notifications` = '$notifications', `emails` = '$emails' WHERE `accounts`.`id` = $id;") or die(mysql_error());
	echo 'Updated Succesfully... Redirecting.  <meta http-equiv="refresh" content="1; url=http://genleadership.com/l1/profile.php?message=1">';
}
elseif ($_GET['mode'] == "edit") {
	echo '<form action="/l1/profile.php?mode=update" method="post" enctype="multipart/form-data" name="form1"> <table border="0" cellspacing="0" cellpadding="0"> <tr> <td>Bio</td> <td><label for="bio"></label> <textarea name="bio" id="bio" cols="45" rows="5">' . $bio . '</textarea></td> </tr> <tr> <td>Location</td> <td><label for="location"></label> <input name="location" type="text" id="location" size="48" value="' . $location . '"></td> </tr> <tr> <td>Change Password</td> <td><label for="password"></label> <input type="password" name="password" id="password" value="' . $password . '"> <input type="password" name="password2" id="password2" value="' . $password . '"></td> </tr> <tr> <td>Profile Picture<br />Gravatar Email Address</td> <td><label for="emailgravatar"></label> <input type="text" name="emailgravatar" id="emailgravatar" value="' . $gravatar . '"></td> </tr> <tr> <td>Notification Options</td> <td><input type="checkbox" name="notifications" id="notifications" ' . $notifications . '> <label for="notifications">Recieve Notifications</label></td> </tr> <tr> <td>Email Options</td> <td><input type="checkbox" name="emails" id="emails" ' . $emails . '> <label for="emails">Recieve Emails</label></td> </tr> </table> <p> <input type="submit" name="update2" id="update2" value="Reset All Logins"> <input type="submit" name="update" id="update" value="Update Profile"> </p> </form>';
	
}
elseif ($_GET['mode'] == "viewprofile") {
	$id = $_GET['id'];
	
	$socket = sqlconnect();
	$sql = mysql_query("SELECT * FROM `accounts` WHERE `id`='$id'");
	$sqlrow = mysql_fetch_array($sql);
	
	$firstname = $sqlrow['firstname'];
	$fullname = $sqlrow['fullname'];
	$bio = $sqlrow['bio'];
	$location = $sqlrow['userlocation'];
	$attachedto = $sqlrow['attachedto'];
	$gravatar = $sqlrow['emailgravatar'];
	
	$gravatar = get_gravatar($gravatar);
	
	if ($attachedto == "0") {
		$attachedto = "none. Superuser";
	}
	else {
		$attachedto = idtousername($attachedto);
	}
	
	echo "<h3>$firstname's profile</h3>";
	echo "<p>$fullname</p>";
	echo "<p><img src='$gravatar' /></p>";
	echo "<p>$bio.</p>";
	echo "<p>Currently in $location.</p>";
	echo "<p>Account supervisor is $attachedto.</p>";
	
}
else {
	$gravatar = get_gravatar($gravatar);
	if ($_GET['message'] == "1") {echo '<a href="#" class="module" style="background: #0C3;"><center>Profile Sucesfully Updated...</center></a>';}
	if ($_GET['message'] == "2") {echo '<a href="#" class="module" style="background: #069;"><center>Your account will expire in $val days. Recharge?</center></a>';}
	if ($_GET['message'] == "3") {echo '<a href="#" class="module" style="background: #900;"><center>Your passwords didnt match, try again.</center></a>';}
	echo "<p>Hello $firstname, welcome to your profile. Here you can manage and <a href='/l1/profile.php?mode=edit'>edit</a> your profile, view your messages, and check on the latest news and notifications.</p>";
	echo "<h3>Your Messages</h3>";
	echo "<p>You have $messages new message(s), <a href='/l1/message.php?view=messages'>view them?</a></p>";
	echo "<p>You have $notifications new notification(s), <a href='/l1/message.php?view=notifications'>view them?</a></p>";
	echo "<h3>Your Profile</h3>";
	echo "<p><img src='$gravatar' /></p>";
	echo "<p>Your bio is... $bio</p>";
	echo "<p>Your public location is set to $location.</a></p>";
	echo "<p>Your last login was from Adelaide, Australia.</p>";
	echo "<p>Your last logon was on $lastlogin.</p>";
	echo "<p>You're logged in in $locations location(s), <a href='/l1/profile.php?mode=edit'>manage?</a></p>";
	echo "<p>You have 0 forum posts.</p>";
	echo "<p>You have +442 karma from posts.</p>";
	echo "<p>0 collegues have recommended you.</p>";
	echo "<p>You have recommended 0 collegues.</p>";
	echo "<p>Your account will expire on $validity.</p>";
	echo "<p>Your account supervisor is $attachedto.</p>";
}
echo '</div>';
require("include/footer.php");
?>
