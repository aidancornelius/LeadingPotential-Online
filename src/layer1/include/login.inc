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

/// Getters, Setters, Queries, Functions for Login .hdr file
/// © 2011 Beaconsfield IT - Created 28 June 2011 by Aidan Cornelius-Bell

// Getters (as a neat integrated fuction)

function getters() { // THESE ARE NEEDED BEFORE PARSELOGIN IN THE PROCESS PAGE!!!!!!!
	// Seeing as this is the 'login page' let's give the user a udid 
	$udid_session = session_id();

	// Server attributes that may be needed at some point... Let's put them in RAM.
	$udid_thetime = time();
	$udid_thedate = date();

	// Nice and easy now, let's get some info about our user.
	$udid_browser = $_SERVER['HTTP_USER_AGENT'];
	$udid_ipaddr = $_SERVER['REMOTE_ADDR'];

}

// Die Functions (just makes life easier if we define errors now)
function superdie ($message) { 
	die("<br />A Limited Error Occurred: $udid_thedate $udid_thetime - $message")
}

// Actuated Functions - Things that come to life, etc, etc...

// Database function (specifically for login)

function initdatabase () {
	require("config.php");
	mysql_connect("","","","");
	return;
}

// Login master function
// This needs to produce the login form, check with the database, do all that jazz - you know.

function initlogin () {	
	// Let's produce some HTML, just right out of the box. so...
	require("login_header.php");
	// Wasn't that simple?
	
	// Now produce a form...
	require("login_form.php");
	
	// easy, this function's done!
}

function parselogin ($username, $password, $enterprise, $udid_browser, $udid_ipaddr) {
	// Initialise the database for login verification (BASIC Auth)
	initdatabase();
	
	// Let's actually allocate some RAM to this...
	$username = $username;
	$password = $password;
	$enterprise = $enterprise;
	
	// Verification process
	
	// SOME SQL QUERY....
	
}

// Theoretically that's it for this file. :)

// EOF;;

?>