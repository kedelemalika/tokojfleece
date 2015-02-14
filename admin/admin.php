<?php
	session_start();
	if (!isset($_SESSION['username'])) {
	header('location:login.php'); }
	else { $username = $_SESSION['username'];}
	require_once("../config/config.php");
	
	$query = mysql_query("SELECT * FROM admin WHERE username = '$username'");
	$hasil = mysql_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="../images/bookworm.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator Tools - J-Fleece</title>
<style type="text/css">
a:link {
	color: black;
	text-decoration: none;
}
a:hover {
	color: black;
	text-decoration: underline;
	font-weight: bold;
}
a:focus {
	color: black;
	text-decoration: underline;
	font-weight: bold;
}
a:active {
	color: black;
	text-decoration: none;
}
a:visited {
	color: black;
	text-decoration: none;
}
</style>
</head>
<body background="../images/back_admin.jpg">
<table width="1047" border="0" align="center" style="border: 1px solid #ccc; border-radius: 7px; background: tranparent; background: -moz-linear-gradient(top,#0099FF,transparent,#0099FF); box-shadow: -2px -2px 6px #666; margin-top: 13px;">
  <tr>
    <td height="100" colspan="2" align="center" valign="middle">
	  <table width="100%" height="100" border="0" cellpadding="7" style="border: 1px solid #ccc; background: blue; border-radius: 7px; box-shadow:3px 3px 6px #666; margin-bottom: 3px;">
      <tr>
        <td align="center" valign="middle">
		<font color="white" size="7px" style="font-weight: bold; text-shadow: 3px 3px 6px #00CCFF; margin-left: 5px;">
		// ADMINISTRATOR TOOLS //
		</font>
		</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="21%" valign="top">
	<table width="100%" border="0" cellpadding="5" bgcolor="#0099FF" style="border: 1px solid #ccc; border-radius: 7px; box-shadow: 3px 3px 6px #666; margin-bottom: 7px;">
      <tr>
        <td align="center" bgcolor="blue" style="border-radius: 7px 7px 0 0; border-bottom: 2px solid #bbb;"><strong><font color="#FFFFFF">MAIN MENU</font></strong></td>
      </tr>
      <tr>
        <td align="center">
		&bull; <a href="index.php">Home</a> &bull;<br />
		&bull; <a href="?menu=article">Article</a> &bull;<br />
		&bull; <a href="?menu=category">Category</a> &bull;<br />
		&bull; <a href="?menu=member">Member</a> &bull;<br />
		&bull; <a href="?menu=guestbook">Guestbook</a> &bull;<br />
		</td>
      </tr>
    </table>
	<table width="100%" border="0" cellpadding="5" bgcolor="#0099FF" style="border: 1px solid #ccc; border-radius: 7px; box-shadow: 3px 3px 6px #666;">
      <tr bgcolor="blue">
        <td align="center" bgcolor="blue" style="border-radius: 7px 7px 0 0; border-bottom: 2px solid #bbb;"><strong><font color="#FFFFFF">PANEL OPTIONS</font></strong></td>
      </tr>
      <tr>
        <td align="center">
		&bull; <a href="../index.php" target="_blank">View Site</a> &bull;<br />
		&bull; <a href="?menu=setting">Setting</a> &bull;<br />
		&bull; <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');">Logout [x]</a> &bull;
		</td>
      </tr>
    </table></td>
    <td width="79%" valign="top"><table width="100%" border="0" cellpadding="5" style="background: #0099FF; border: 1px solid #ccc; border-radius: 7px; box-shadow: 3px 3px 6px #666;">
      <tr>
        <td><?php include 'switch_menu.php'; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2">
	<table width="100%" border="0" cellpadding="7" style="background: blue; border: 1px solid #ccc; border-radius: 7px; box-shadow: 3px 3px 6px #666; margin-top: 4px;">
      <tr>
        <td align="center">
		<a href="index.php">Administrator Tools</a> &copy; 2013 | Created by <a href="?page=about_author">Ruslan Abdul Ghani</a><a href="../index.php?page=about_author"></a> | Powered by <a href="" target="_blank">Grafansa Al-fatana</a> | All Rights Reserved		</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>