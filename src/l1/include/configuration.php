<?php
 
// DATABASE CONFIGURATION DETAILS - KEEP IT SECRET, KEEP IT SAFE.

function sqlconnect($debug) {
	if(!empty($debug)) {
		return('$server = "db01-share",$username = "Custom App-10057",$password = "fri12dges",$db = "genleadership-com"');
	}
	$socket = mysql_connect(
		$server = "db01-share",
		$username = "Custom App-10057",
		$password = "fri12dges"
	) or die("Database Error: " . mysql_error());
	mysql_select_db("genleadership-com", $socket);
	//$query = mysql_query($sql, $socket);
	return($socket);
}

function sqldisconnect() {
	mysql_close($socket);
}

?>