<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Generative Leadership Training</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="/resources/modernizr.js"></script>
<link rel="stylesheet" href="/resources/animate.css" />
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #333;
}
a:link {
	color: #686868;
	text-decoration: none;
}
a:visited {
	color: #686868;
	text-decoration: none;
}
a:hover {
	color: #000;
}
#header {
	background-color: #090E14;
	background-image: url(/resources/bgimage.jpg);
	background-repeat: repeat-x;
	width: 100%;
	height: 80px;
	padding-top: 30px;
}
#presenter {
	width: 800px;
	height: auto;
	background: #000;
	color: #FFF;
	filter:alpha(opacity=60);
	opacity:0.6;
	padding: 15px;
	margin-left: auto;
	margin-right: auto;
}
#presenter p {
	color: #FFF;
	filter:alpha(opacity=0);
	opacity:0;	
}
#presenter a {
	text-decoration: none;
	width: 150px;
	height: 10px;
	padding: 5px;
	background: #25282A;
	color: #fff;	
}
#presenter a:visited {
	color: #fff;	
}
#presenter a:hover {
	width: 150px;
	height: 10px;
	padding: 5px;
	background: #666;
	color: #fff;	
}
#presenter:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
#container {
	width: 800px;
	height: auto;
	background: #FFF;
	color: #000;
	margin-top: 15px;
	margin-bottom: 15px;
	padding: 15px;
	margin-left: auto;
	margin-right: auto;
}
#footer {
	width: 800px;
	height: auto;
	background: #161715;
	color: #999;
	padding: 15px;
	margin-left: auto;
	margin-right: auto;
}
#footer p {
	color: #999;
}
#footer a {
	text-decoration: none;
	width: 150px;
	height: 10px;
	padding: 5px;
	background: #25292D;
	color: #999;	
}
#footer a:visited {
	color: #999;	
}
#footer a:hover {
	color: #999;
	background: #404345;
}
#footer:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
.centreme {
	text-align: center;	
}
.notification {
	display: block;
	color: #FFF;
	padding: 5px;
	text-decoration: none;
}
.module {
	color: back;
	display: block;
	margin-left: 15px;
	margin-right: 15px;	
	margin-bottom: 15px;
	padding: 5px;
	border: 2px solid #000;
}
.module:visited {
	color: back;
	display: block;
	margin-left: 15px;
	margin-right: 15px;	
	margin-bottom: 15px;
	padding: 5px;
	border: 2px solid #000;
}
.module:hover {
	text-decoration: none;
	color: #000;
	border: 2px solid #09C;
}
.module h1 {
	font-size: 13px;
	text-align: left;
	padding: 0px;
	margin: 0px;
}
.module p {
	padding: 0px;
	margin: 0px;	
}
.console {
	font-family: "Courier New", Courier, monospace;
	font-size: 11px;
	font-style: normal;
	font-weight: lighter;
	background-color: #2E3436;
	color: #fff;
	margin: auto;
	padding: 5px;
	height: 400px;
	width: 800px;
	border: thin solid #333;
	overflow: scroll;
	overflow-x: auto; 
}
.input {
	font-family: "Courier New", Courier, monospace;
	font-size: 11px;
	font-style: normal;
	font-weight: lighter;
	background-color: #2E3436;
	margin: auto;
	text-align: center;
	padding: 5px 5px 5px 5px;
	height: 50px;
	width: 800px;
	border: thin solid #333;
}
button {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #FFF;
	border: 1px solid #666;
	padding: 0px;
	background-color: #67A54B;
	width: 110px;
	height: 32px;	
}
</style>
</head>
<body>
<?php $root = $_SERVER['DOCUMENT_ROOT']; require("$root/l1/include/login_check.php"); $login = $_COOKIE['username']; loginvalid($login); require("$root/l1/include/configuration.php"); $socket = sqlconnect(); $id = $_COOKIE['id']; $sql = mysql_query("SELECT * FROM `accounts` WHERE `id`='$id'"); $sqlrow = mysql_fetch_array($sql); ?>
<div id="header"><div id="presenter"><div style="float:left;">Generative Leadership Program [v.5812]</div> <div style="float:right;"><a href="/l1/dashboard.php">Dashboard</a> <a href="/l5/discussion.php">Discussion</a> <a href="/l1/profile.php" style="<?php if ($sqlrow['messagecount'] > 0) { echo"background: #900;"; } ?>"><?php echo $_COOKIE['firstname']; ?> [<?php echo $sqlrow['messagecount'];?>]</a> <a href="/logout.php?purge=all">Logout</a></div></div></div>