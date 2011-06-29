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

/// Login body/footer template
/// © 2011 Beaconsfield IT - Created 29 June 2011 by Aidan Cornelius-Bell

echo <<<EOD

<div id="login_container"><div id="login_padding">
  <h1>Login to Leading Potential Online</h1>
  <p>Welcome to Leading Potential, please login using the details provided to you below. If you've lost these details <a href="?lostdetails">click here</a>.</p>
  <form action="process.php?login=login" method="post">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="right" valign="middle">Username:</td>
      <td align="center" valign="middle"><label for="username"></label>
        <input name="username" type="text" id="username" size="30" value="DOMAIN\developer" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Please enter a username':this.value;"></td>
    </tr>
    <tr>
      <td align="right" valign="middle">Password:</td>
      <td align="center" valign="middle"><label for="password"></label>
        <input name="password" type="password" id="password" size="30" value="password"onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'password':this.value;"></td>
    </tr>
    <tr>
      <td align="right" valign="middle">Organisation:</td>
      <td align="center" valign="middle"><label for="organization"></label>
        <input name="organisation" type="text" id="organisation" size="30" value="Beaconsfield IT, LLC"></td>
    </tr>
  </table>
  <p class="centreme"><input name="Login" type="submit" value="Login"> <input name="Clear" type="reset" value="Clear"></p></form>
</div></div>
</body>
</html>

EOD;

?>