<?php 

$url = $_SERVER['PHP_SELF'];

if ($_GET['l'] == "240") {
	setcookie("okay", "yes" );
}
elseif (isset($_COOKIE['okay'])) {
	// ... move along.
}
else {
	die("Not Authorised");
}

if(isset($_COOKIE['res'])){
$res = $_COOKIE['res'];
}
else{
?>
<script language="javascript">
<!--
go();

function go() 
{
 var today = new Date();
 var the_date = new Date("August 31, 2025");
 var the_cookie_date = the_date.toGMTString();
 var the_cookie = "res="+ screen.width +"x"+ screen.height;
 var the_cookie = the_cookie + ";expires=" + the_cookie_date;
 document.cookie=the_cookie
 location = '<?echo "$url";?>';
}
//-->
</script>
<?php
}
?>

<?php
list($width, $height) = split('[x]', $res);

$UASTRING = $_SERVER['HTTP_USER_AGENT'];

if (preg_match("/\biPhone\b/i", $UASTRING) && $width == "320") {
	echo "<body bgcolor='#292931'>";
	echo "<p color='#FFF'>Welcome to GL Mob, Redirecting</p>";
	echo '<meta http-equiv="refresh" content="5; url=http://www.genleadership.com/mobileapp/sora/?ttl=800&user=hourcode&time=timecode&thisiswhatwillreallystopidiotsontheirpcs">';
	echo "</body>";
}

?>