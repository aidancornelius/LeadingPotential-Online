<?php require("header.php"); ?>
<div id="container">
  <p>Welcome Testers, Developers and Media Representitives. Using your credentials, please login below.  
  <form name="form1" method="post" action="/l1/process.php">
    <table width="520" border="0" align="center" cellpadding="0" cellspacing="0">
     <!--- <div style="display:none;"> <tr> --->
        <!--- <td align="right" valign="top">Product Key / Organisation:</td> --->
        <!--- <td align="center" valign="top"><label for="pkorg"></label> --->
        <input name="pkorg" type="hidden" id="pkorg" value="<?php $val = $_GET['developer']; echo $val; ?>" size="60"><!---</td>--->
      <!--- </tr></div> --->
      <tr>
        <td align="right" valign="top">Username:</td>
        <td align="center" valign="top"><label for="username"></label>
        <input name="username" type="text" id="username" value="Username" size="60" onClick="this.value = '';" ></td>
      </tr>
      <tr>
        <td align="right" valign="top">Password:</td>
        <td align="center" valign="top"><label for="password"></label>
        <input name="password" type="password" id="password" value="Password" size="60" onClick="this.value = '';"></td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top"><input type="submit" name="login" id="login" value="Login">
        <input type="reset" name="reset" id="reset" value="Clear"></td>
      </tr>
    </table>
  </form>
</div>
<?php require("footer.php"); ?>