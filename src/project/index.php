<?php require("../header.php"); ?>
<div id="container">
<?php if($_GET['page'] == "requestdownload.php") { echo "There are no GPL components avaliable at this time. If you registered for Artemis you need to use the link provided in the email we sent you."; echo "</div>"; require("../footer.php"); die(); }?>
<h2>Apollo<sup>FWKS</sup> project public licence components.</h2>
<p>Parts of this program may be made available under either the GNU General Public Licence or a modified BSD licence. You can download the parts of this program that are made available in this fashion from this page. Note almost 100% of the programming for this project is written from scratch specifically for a PHP platform that is compiled for this project. We can't guarantee this software will work AS IS if you attempt to deploy it on your servers, you also need to note that if you do deploy this software anywhere (even for personal use) you MUST inform us where, why and how.</p>
<p>Any components that have been modified from another GPL or BSD project are made available below AS USED in this project, you can download them as a zip or bzip. These files are <strong>not</strong> the whole project, just modified programmes. Note: at this time only backend software is avaliable, but only from Beaconsfield IT.</p>
<p>Download modified components: <a href="?page=requestdownload.php&components=free&as=zip">freecomponents.zip</a> <a href="?page=requestdownload.php&components=free&as=bzip">freecomponents.tar.bz2</a></p>
<h2>Artemis</h2>
<p>If you are interested in running your own version of this software software in a non-commercial environment sign up for an account below, you will be able to download a free version of this software called Artemis. Artemis requires registration with the central project sever which is also free of charge and provides unlimited product upgrades. Instances must be verified by our team before they can be allowed to run. It is illegal to remove remote-management components from Artemis, and usage is strictly monitored.</p>
<p>Download Artemis: <a href="../register.php">Register</a> <a href="?page=requestdownload.php&components=artemis&as=zip">Download Artemis (requires login)</a></p>
<h2>Commercial Purposes</h2>
<p>At this time neither Artemis or Apollo can be used in a commercial standing other via this project. This may become a possibility in the future, make sure you have email notifications enabled in your profile to learn more when it's available!</p>
</div>
<?php require("../footer.php"); ?>
