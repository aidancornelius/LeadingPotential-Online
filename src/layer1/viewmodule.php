<?php
echo <<<EOF

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>LP Online : Dashboard</title>

<link href='http://fonts.googleapis.com/css?family=Raleway:100&v1' rel='stylesheet' type='text/css'>

<style type="text/css">
h1 {
	font-family: 'Raleway', arial, serif;
	font-weight: 100;
	font-size: 18px;
	text-align: center;
}
p {
	font-size: 12px;	
}
a {
	color: #FFF;
	text-decoration: none;
}
a:link {
	color: #FFF;
	text-decoration: none;
}
a:visited {
	color: #FFF;
	text-decoration: none;
}
a:hover {
	color: #FFF;
	text-decoration: none;
}
#dashboard_container {
	font-family: Helvetica, Arial, sans-serif;
	font-size: 12px;
	margin: 65px auto;
	padding: 0 0;
	width: 950px;
	border: 2px solid #333;
	text-align: left;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
#dashboard_padding {
	margin: 0px 5px;	
}
input {
	background-color: #FFF;
	border: 1px solid #333;	
	-moz-border-radius: 3px;
	border-radius: 3px;
	font-size: 12px;
}
.centreme {
	text-align: center;	
}
.module {
	display: block;
	color: #FFF;
	margin-left: 15px;
	margin-right: 15px;	
	margin-bottom: 15px;
	padding: 5px;
	border: 2px solid;
}
.module:visited {
	display: block;
	color: #FFF;
	margin-left: 15px;
	margin-right: 15px;	
	margin-bottom: 15px;
	padding: 5px;
	border: 2px solid;
}
.module:hover {
	border: 2px solid #000;
	color: #FFF;
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
</style>
</head>
<body>

<div id="dashboard_container"><div id="dashboard_padding">
<h1>Welcome to your Results Panel, Michael</h1>
<h1>Welcome to your Module Panel, Michael</h1>
<a href="dashboard.php" class="module" style="background: #0C3;">Module 1.1 - Learning to be cool II<br />Completeness: You completed this module on DD/MM/YYYY. #Graph? #Detail?</a></a>
</div></div></div>
</body>
</html>
EOF;

?>