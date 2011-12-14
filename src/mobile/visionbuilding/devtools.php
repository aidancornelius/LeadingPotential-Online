<?php
/* @Core: 		Mist
   @Version:	1.01b
   @Author: 	Aidan Cornelius-Bell
   @Author:		http://aidancornelius.net/
   @Update URL:	http://beaconsfieldit.net/mistcore
   @License:	Modified BSD licence / Restricted private license
   
   @Custom:		Leading Potential
   @Custom:		Content © 2012 Leading Potential
   @Custom:		Generative Leadership Mobile Frontend (iOS)
   @Custom:		A Beaconsfield IT, Leading Potential Joint Venture
*/

// The line required in all standalones...
$root = $_SERVER['DOCUMENT_ROOT']; define('__ROOT__', $root); unset($root); require(__ROOT__ . '/mobile/mist_header.php');

// Display the header
print(mist_html_grabber("header"));

// Cookie translation and navigation (appheader)
print('<div class="grand_header_roll"><div class="grand_header_roll_userfloat"><a href="#">');
print($userData['userFirstName']);
print('</a></div></div><div class="grand_spacerheader"></div>');

// Some code...
print('<div class="grand_textdump">
This is Mist 1.01b. Created by Aidan Cornelius-Bell for Generative Leadership.
<pre style="font-size: 14px;">
@Core:		Mist
@Version:	1.01b
@Author: 	Aidan Cornelius-Bell
@Author:	http://aidancornelius.net/
@Update URL:	http://beaconsfieldit.net/mistcore
@License:	Modified BSD licence / Restricted private license

@Custom:	Leading Potential
@Custom:	Content © 2012 Leading Potential
@Custom:	Generative Leadership Mobile Frontend (iOS)
@Custom:	A Beaconsfield IT, Leading Potential Joint Venture
</pre>
</div>
<div class="grand_spacer"></div>
<div class="grand_developerbutton"><div class="grand_bigbutton_text"><a href="index.php">Home</a></div>');

// Display the footer
print(mist_html_grabber("footer"));

?>