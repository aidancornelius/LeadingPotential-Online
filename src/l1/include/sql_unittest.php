<?php 

// UNIT TESTER

error_reporting(E_ALL);
ini_set("display_errors", 1);
$root = $_SERVER['DOCUMENT_ROOT'];
require("$root/l1/include/configuration.php");

$socket = sqlconnect();

$username = $_POST['username'];

$sql = mysql_query("SELECT * FROM `accounts` WHERE `username`='$username'");

while ($row = mysql_fetch_array($sql, MYSQL_NUM)) {
	setcookie("id", $row[0], time()+8000, "/", ".genleadership.com");
	setcookie("username", $row[1], time()+8000, "/", ".genleadership.com");
	setcookie("password", $row[2], time()+8000, "/", ".genleadership.com");
	setcookie("firstname", $row[3], time()+8000, "/", ".genleadership.com");
	setcookie("fullname", $row[4], time()+8000, "/", ".genleadership.com");
	setcookie("validity", $row[5], time()+8000, "/", ".genleadership.com");
	setcookie("lastlogin", $row[6], time()+8000, "/", ".genleadership.com");
	setcookie("disabled", $row[7], time()+8000, "/", ".genleadership.com");
	setcookie("locations", $row[8], time()+8000, "/", ".genleadership.com");
	setcookie("zones", $row[9], time()+8000, "/", ".genleadership.com");
	setcookie("attachedto", $row[10], time()+8000, "/", ".genleadership.com");
	printf("<pre>You superusered to $username; here's their details as an array.\n\n");
	print_r($_COOKIE);
	printf("</pre>");
	$root = $_SERVER['DOCUMENT_ROOT']; require("$root/l1/include/login_check.php"); $login = $_COOKIE['username']; loginvalid($login);
}

?>