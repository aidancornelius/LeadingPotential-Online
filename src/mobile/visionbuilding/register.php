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
$root = $_SERVER['DOCUMENT_ROOT']; define('__ROOT__', $root); unset($root); // require(__ROOT__ . '/mobile/mist_header.php');

// Display the header
require(__ROOT__ . '/mobile/html_templates/header.php');

print('<div class="grand_header_roll"><div class="grand_header_roll_userfloat"><a href="#">');
print("New User");
print('</a></div></div>\n<div class="grand_spacerheader"></div>');
 
// Some code...
print('<div class="grand_textdump"><form name="form1" method="post" action="register_cookies.php">
  <p>Desired Username: 
    <label for="username"></label>
    <input type="text" name="username" id="username">
  </p>
  <p>Desired Password: 
    <label for="password"></label>
    <input type="text" name="password" id="password">
  </p>
  <p>First Name: 
    <label for="first"></label>
    <input type="text" name="first" id="first">
  </p>
  <p>Last Name: 
    <label for="last"></label>
    <input type="text" name="last" id="last">
  </p>
  <p>Date of Burf: <label for="dob"></label><input type="date" name="dob" id="dob"></p>
  <p>Last Login: <label for="ll"></label><input type="datetime" name="ll" id="ll"></p>
  <p>Disabled: This is pointless.</p>
  <p>Apps: This is auto set to 4</p>
  <p>Super: This is pointless.</p>
  <p>
    <input type="submit" name="button" id="button" value="iPhone">
  </p>
</form></div>');

// Display the footer
require(__ROOT__ . '/mobile/html_templates/footer.php');

?>