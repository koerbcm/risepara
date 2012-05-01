<?php require_once("WA_Universal_Email/mail_PHP.php"); ?>
<?php require_once("WA_Universal_Email/MailFormatting_PHP.php"); ?>
<?php
if (($_SERVER["REQUEST_METHOD"] == "POST"))     {
  //WA Universal Email object="mail"
  //Send Loop Once Per Entry
  $RecipientEmail = "risepara@gmail.com";include("WA_Universal_Email/WAUE_contact_us_1.php");

  //Send Mail All Entries
  if ("contact_us"!="")     {
    header("Location: contact_us_submit.php");
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/DefaultPHP.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>RisE | A Paranormal Research Team - Contact Us</title>
<!-- InstanceEndEditable -->
<!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
.twoColFixLtHdr #sidebar1 { width: 230px; }
</style>
<![endif]-->
<!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColFixLtHdr #sidebar1 { padding-top: 30px; }
.twoColFixLtHdr #mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->
<!-- InstanceBeginEditable name="head" -->
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="css/normal.css" rel="stylesheet" type="text/css" />
<!-- InstanceParam name="Page_Sidebar" type="boolean" value="false" -->
</head>

<body class="twoColFixLtHdr">
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td align="center"><img src="images/RisE_Logo.gif" width="219" height="130" alt="RisE A Paranormal Research Team" /></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><table width="525" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><ul id="MenuBar1" class="MenuBarHorizontal">
      <li class="nav_border_left"><a href="index.php">Home</a>      </li>
      <li class="nav_border_right"><a href="our_team.php">Our Team</a></li>
      <li class="nav_border_right"><a href="our_approach.php">Our Approach</a>      </li>
      <li class="nav_border_right"><a href="contact_us.php">Contact Us</a></li>
    </ul></td>
  </tr>
</table>
</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="6" cellspacing="1">
      <tr>
        <td width="159" height="500" align="left" valign="top" bgcolor="#CCCCCC"></td>
        <td width="594" align="left" valign="top" bgcolor="#FFFFFF"><!-- InstanceBeginEditable name="Page_Content" -->
          <h1>Contact Us</h1>
          <form id="form1" name="form1" method="post" action="">
            <table width="590" border="0" cellspacing="2" cellpadding="3">
              <tr>
                <td colspan="3"><span id="sprytextfield1">
                  <label style="font-size:12px"><strong>Name:</strong>
                    <input name="name" type="text" id="name" size="30" />
                    </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
              <tr>
                <td colspan="3"><span id="sprytextfield2">
                  <label style="font-size:12px"><strong>Email Address:</strong>
                    <input name="email" type="text" id="email" size="30" />
                    </label>
                  <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid email format.</span></span></td>
  </tr>
              <tr>
                <td colspan="3"><label style="font-size:12px">Phone #:
                  <input type="text" name="phone" id="phone" />
                  </label></td>
                </tr>
              <tr>
                <td colspan="3"><label style="font-size:12px">Street Address:
                  <input name="street_address" type="text" id="street_address" size="75" />
                  </label></td>
                </tr>
              <tr>
                <td width="231" align="left" valign="top"><label style="font-size:12px">City:<br />
                </label>
                  <input name="city" type="text" id="city" size="30" /></td>
                <td width="182" height="50" align="left" valign="top"><span id="sprytextfield3">
                  <label style="font-size:12px"><strong>State:</strong><br />
                    <input name="state" type="text" id="state" size="20" />
                    </label>
                  <span class="textfieldRequiredMsg"><br />
                    A value is required.</span></span></td>
                <td width="161" align="left" valign="top"><label style="font-size:12px">Zip Code:<br />
                  <input name="zip" type="text" id="zip" size="8" />
                  </label></td>
                </tr>
              <tr>
                <td colspan="3"><span id="spryselect1">
                  <label  style="font-size:12px"><strong>Reason for Contact:</strong>
<select name="reason" id="reason">
  <option value="" selected="selected"></option>
  <option value="Help">Help</option>
  <option value="Experiences">Experiences</option>
  <option value="Questions/Comments">Questions/Comments</option>
  <option value="Member Request">Become a Member</option>
</select>
                    </label>
                  <span class="selectRequiredMsg">Please select an item.</span></span></td>
  </tr>
              <tr>
                <td colspan="3"><span id="sprytextarea1">
                  <label>
                    <textarea name="comments" id="comments" cols="75" rows="7"></textarea>
                    </label>
                  <span class="textareaRequiredMsg"><br />
                    A value is required.</span></span><br />
                  <br />
                  <input type="submit" name="submit" id="submit" value="Submit" />
                  <label>
                    <input type="reset" name="Reset" id="button" value="Reset" />
                  </label></td>
              </tr>
</table>
</form>
          <p>**Fields in <strong>BOLD</strong> are required**</p>
          <form name="form1" method="post" action="">
            <table width="600" border="0" cellspacing="2" cellpadding="3">
              <tr> </tr>
              <tr> </tr>
              <tr> </tr>
              <tr> </tr>
              <tr> </tr>
              </table>
          </form>
          <script type="text/javascript">
<!--
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["change"]});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {validateOn:["change"]});
//-->
          </script>
        <!-- InstanceEndEditable --></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="bottom"><div class="footer"><a href="index.php" class="links_footer">Home</a> | <a href="our_team.php" class="links_footer">Our Team</a> | <a href="our_approach.php" class="links_footer">Our Approach</a> | <a href="privacy_policy.php" class="links_footer">Privacy Policy</a> | <a href="contact_us.php" class="links_footer">Contact Us</a></div></td>
      </tr>
    </table></td>
  </tr>
</table>


<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15289693-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
<!-- InstanceEnd --></html>
