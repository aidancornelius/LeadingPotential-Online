<?php 

// UNIT TESTER

error_reporting(E_ALL);
ini_set("display_errors", 1);
$root = $_SERVER['DOCUMENT_ROOT'];
require("$root/l1/include/idtousername.php");

idtousername(2);



?>