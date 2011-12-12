<?
// 
// Copyright (c) 2011, Beaconsfield IT
// All rights reserved.
//
// This software was manufactured for Leading Potential (hereinafter The Company), 
// any use by The Company is acceptable, even excluding the conditions of this license.
// 
// Redistribution and use in source and binary forms, with or without
// modification, are permitted provided that the following conditions are met:
//     * Redistributions of source code must retain the above copyright
//       notice, this list of conditions and the following disclaimer.
//     * Redistributions in binary form must reproduce the above copyright
//       notice, this list of conditions and the following disclaimer in the
//       documentation and/or other materials provided with the distribution.
//     * Neither the name of the Beaconsfield IT nor the
//       names of its contributors may be used to endorse or promote products
//       derived from this software without specific prior written permission.
//     * And; This software may not be redistributed and sold under 
//       any condition, even meeting the prior criteria(s).
//     * All advertising materials mentioning features or use of this software
//       must display the following acknowledgement:
//       This product includes software developed by Beaconsfield IT.
// 
// THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
// ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
// WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
// DISCLAIMED. IN NO EVENT SHALL BEACONSFIELD IT BE LIABLE FOR ANY
// DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
// (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
// LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
// ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
// (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
// SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//

/// Debug Console for Awesome! 
/// © 2011 Beaconsfield IT - Created 10 November 2011 by Aidan Cornelius-Bell
?>

<?php require("../l1/include/header.php");?>

<div style="height: 15px;"> </div>
<div class="console"><pre><?php
// inbuilt mini, but crap, security - needs to actually do this properly later.
$dispose = $_COOKIE['username'];
if(empty($dispose)) { die("> empty($dispose);\n> Rejected Login. <meta http-equiv='refresh' content='3; url=http://genleadership.com/login.php'>");}
unset($dispose);

// Honestly the whole thing will be pulled from a function and this won't be great
// in terms of how secure it is, but! only authed devs will have access so
// a little tiny bit of sloppy malprocessing in sql won't be too bad if they
// aren't derps. I'M LOOKING AT YOU DERPS! :-)

require("include/commandinterpreter.php");

if($_GET['command'] == "POST") {
	$input = $_POST['command'];
	print_r(process($input));
}
else {
	$name = $_COOKIE['firstname'];
	print("[Apollo +] Generative Leadership Program console [v.5812]\n[Apollo +] Welcome to the con $name");
} 
?></pre></div>
<div class="input">
  <form name="form1" method="post" action="console.php?command=POST">
    <label for="command"></label>
    <input name="command" type="text" id="command" size="100">
    <input type="submit" name="process" id="process" value="Submit">
  </form>
</div>
<div style="height: 15px;"> </div>

<?php require("../l1/include/footer.php");?>