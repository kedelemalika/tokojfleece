<?php
	session_start();
	if(isset($_SESSION['username'])) {
	header('location:admin.php'); }
	require_once("../config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Administrator - J-Fleece</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<link rel="shortcut icon" href="../images/bookworm.ico" />
</head>
<body background="../images/back_admin.jpg">
<form action="do_login.php" method="post" name="login">
<table width="260" border="0" align="center" cellpadding="3" style="border: 2px solid #ccc; border-radius: 7px; background: #0099FF; background: -moz-linear-gradient(top,#0099FF,transparent,#0099FF); box-shadow: 3px 3px 6px #666; margin-top: 150px;">
  <tr>
    <td colspan="3" align="center"><strong>Login Administrator </strong></td>
  </tr>
  <tr>
    <td width="190" align="right">Username</td>
    <td width="3" align="center">:</td>
    <td width="293"><input name="username" type="text" class="input" required="required" /></td>
  </tr>
  <tr>
    <td align="right">Password</td>
    <td align="center">:</td>
    <td><input name="password" type="password" class="input" required="required" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td><input name="login" type="submit" class="button" value="Login" /> 
    <input name="cancel" type="reset" class="button" value="Cancel" /></td>
  </tr>
</table>
</form>
<div style="margin-top: 10px; margin-left: 1px; text-align: center;">
<font size="2"><a href="../index.php">J-Fleece</a> © 2013 - All Rights Reserved</font></div>
</body>
</html>