<?php

define("__ROOT__", $_SERVER['DOCUMENT_ROOT']."/mobileapp/sora/visionbuilding");



// Functions Enabled :

foreach (glob(__ROOT__."/inc/functions_enabled/*.php") as $filename)
{
    include $filename;
    //DEBUG: print_r("\n\nIncluded: ".$filename);
}

function markdownToVariable($filename) {

	$handle = fopen($filename, "r") or die("no file!");
	$contents = fread($handle, filesize($filename));
	fclose($handle);
	
	return($contents);

}

function format($special, $html) {

	// nothing to do at this stage, formatting is "intext"
	return($html); 

}

function create($pageType, $pageID) {
	
	// pd for home {
	if($pageID = "home") { $text = markdownToVariable(__ROOT__."/inc/markdown/home.markdown");  $html = markdown($text); $return = format("home", $html); return($return); }
	// } pd for programmed pages (survey, etc) { 
	
	// } pd for everything else {
	elseif($pageID = "something.markdown") {
		$filename = $pageID.".markdown";
		$text = markdownToVariable(__ROOT__."/inc/markdown".$filename);
		$html = markdown($text);
		$return = format("norm", $html);
		return($return);
	}
	else {
		die("404: Page Not Found. <a href='/mobileapp/sora/visionbuilding/'>Home</a>.");
	}
}

function destroy() {
	// Destroy is REALLY good for AJAX, makes sure we don't get any lapsed vars.
	unset($pageType);
	unset($pageID);
}

// Functions Disabled :

 ?>