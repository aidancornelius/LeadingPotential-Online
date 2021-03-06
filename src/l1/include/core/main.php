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

/// Main declarations, nothing more, nothing less.

/// DO NOT MESS WITH THIS FILE, DON'T ADD TO IT OR REMOVE FROM IT
/// OBJECTS HERE ARE OBJECTS EVERYWHERE, JUST BECAUSE THIS ISN'T
/// WORKING IN ONE SCRIPT DOESN'T MEAN CHANGING IT HERE WILL
/// FIX YOUR PROBLEM, AND IT'LL PROBABLY BREAK SOMETHING ELSE.

// Common stuff, basically the floor and ceiling of the application - so scripts know what where who and how without calling SERVER all the time.
$root = $_SERVER['DOCUMENT_ROOT'];
$ceiling = $_SERVER['PHP_SELF'];

class programme { static public function _____APOLLO() { 
	// Apollo specific stuff, though the whole framework IS Apollo these things are like root features that need to be ack'd.
	$_____APOLLO['program'] = "Apollo";
	$_____APOLLO['created'] = "2011";
	$_____APOLLO['styling'] = "FWKS Programme";
	$_____APOLLO['devefor'] = "Leading Potential";
	$_____APOLLO['buildkey'] = "Maybell";
	$_____APOLLO['sharekey'] = "Mayfly";
	$_____APOLLO['dbconfig'] = $root . "/l1/configuration.php";
	$_____APOLLO['apconfig'] = $root . "/l1/core/apollo.php";
	
	// Shell specific stuff, for debugging, unit testing and other neat stuff!
	$_____APOLLO['node'] = getenv('NODENAME');
	$_____APOLLO['whoami'] = exec('whoami');
}}

echo programme::_____APOLLO();

?>