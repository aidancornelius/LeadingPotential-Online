<!-- <pre> --> 
<?php


//error_reporting(E_ALL);
//ini_set("display_errors", 1);
$root = $_SERVER['DOCUMENT_ROOT'];

require("$root/l1/include/createbargraph.php");

$bargraph = createbargraph(5, 100, 130, 160, 125, 170);

// echo $bargraph;

?>
<!-- </pre> -->