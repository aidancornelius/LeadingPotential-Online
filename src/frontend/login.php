<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Generative Leadership Training - Login</title>
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
#header {
	background-color: #090E14;
	background-image: url(resources/bgimage.jpg);
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
</style>
</head>
<body>
<div id="header"><div id="presenter"><div style="float:left;">Leading Potential - Generative Leadership Program</div> <div style="float:right;"><a href="index.php">Home</a> <a href="about.php">About</a> <a href="http://beaconsfieldit.us2.list-manage.com/subscribe?u=2a83f10ae5ed89247e6ada7b2&id=b7e3c30bb7">Tester Registration</a>  <a href="login.php?developer=Developer">Developer Login</a></div></div></div>
<div id="container">
  <p>Welcome Testers, Developers and Media Representitives. Using your credentials, please login below.  
  <form name="form1" method="post" action="/l1/process.php">
    <table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="right" valign="top">Product Key / Organisation:</td>
        <td align="center" valign="top"><label for="pkorg"></label>
        <input name="pkorg" type="text" id="pkorg" value="<?php $val = $_GET['developer']; echo $val; ?>" size="39"></td>
      </tr>
      <tr>
        <td align="right" valign="top">Username:</td>
        <td align="center" valign="top"><label for="username"></label>
        <input name="username" type="text" id="username" value="Username" size="39" onClick="this.value = '';" ></td>
      </tr>
      <tr>
        <td align="right" valign="top">Password:</td>
        <td align="center" valign="top"><label for="password"></label>
        <input name="password" type="password" id="password" value="Password" size="39" onClick="this.value = '';"></td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top"><input type="submit" name="login" id="login" value="Login">
        <input type="reset" name="reset" id="reset" value="Clear"></td>
      </tr>
    </table>
  </form>
</div>
<div id="footer"><div style="float:left;">&copy; 2011 <a href="http://www.leadingpotential.com.au">Leading Potential</a>. A <a href="http://www.beaconsfieldit.net">Beaconsfield IT</a> project.</div></div>
</body>
</html>