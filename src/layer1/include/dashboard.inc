<?php
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

/// Getters, Setters, Queries, Functions for Dashboard .hdr file
/// © 2011 Beaconsfield IT - Created 29 June 2011 by Aidan Cornelius-Bell

// Includes, etc.

// Die Functions (just makes life easier if we define errors now)
function superdie ($message) { 
	die("<br />A Limited Error Occurred: $udid_thedate $udid_thetime - $message");
}

// Database function (specifically for dashboard)

function initdatabase () {
	/* require("config.php");
	mysql_connect("","","","");
	return; */
}


function initdashboard () {
	echo <<<EOD
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
	color: #0000CC;
}
a:link {
	color: #0000CC;
}
a:visited {
	color: #0000CC;
}
a:hover {
	color: #0000CC;	
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
<h1>Welcome to your Dashboard, Michael</h1>
<p>Hello Michael, you have the following modules left unfinished:</p>
<a class="module" style="background: #069;">Module 2.1 - Learning to be awesome I<br />Completeness: 5.0% - Click to continue</a>
<a class="module" style="background: #900;">Module 2.2 - Learning to be awesome II<br />Completeness: Locked</a></a>
<a class="module" style="background: #900;">Module 2.3 - Learning to be awesome III<br />Completeness: Locked</a></a>
<a class="module" style="background: #900;">Module 2.4 - Learning to be awesome IV<br />Completeness: Locked</a></a>
<a class="module" style="background: #900;">Module 2.5 - Learning to be awesome V<br />Completeness: Locked</a></a>
<p>You have completed the following modules sucessfully:</p>
<a class="module" style="background: #0C3;">Module 2.0 - Learning to be awesome III<br />Completeness: View Result</a></a>
<a class="module" style="background: #0C3;">Module 1.0 - Learning to be cool I<br />Completeness: View Result</a></a>
<a class="module" style="background: #0C3;">Module 1.1 - Learning to be cool II<br />Completeness: View Result</a></a>
</div></div></div>
</body>
</html>
	
EOD;
}

?>