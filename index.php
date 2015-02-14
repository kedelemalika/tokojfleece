<?php
	require('config/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>J-Fleece - Tempatnya Beli Online Jaket Korea </title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/link.css" type="text/css" />
<link rel="shortcut icon" href="images/YJLDKR15B5QYKQQK.ico" />
<script language="javascript">
	function check(form) {
	if (form.query.value == '') {
		form.query.focus();
		return(false);
		}
		return(true);
	}
</script>
<style type="text/css">
<!--
.style1 {font-size: 36px}
-->
</style>
</head>
<body background="images/apple wallpaper (17).jpg" style="background-attachment:fixed; background-position:center;">
<table width="960px" border="0" align="center" style="border: 1px solid #ccc; border-radius: 7px; box-shadow: -3px -3px 7px #999; margin-top: 10px; background: transparent; background: -moz-linear-gradient(top,#0099FF,transparent,#0099FF); margin-top: 13px;">
  <tr>
    <td colspan="3" align="left" valign="middle">
	<table background="images/footer_background.png" width="100%" border="0" style='border: 1px solid #ccc; border-radius: 7px; box-shadow: 3px 3px 6px #666; margin-bottom: 3px;'>
      <tr>
        <td width="72%" height="100" rowspan="2"><a href="#" class="ruslan style1"><font color="#FFFFFF" face="jokerman" style="margin-left:20px;">J-Fleece </font></a><br/>
          <font style='margin-left: 20px; text-shadow: 3px 3px 6px black;'>The Trendisetter Of Hoodie And Jacket</font></td>
        <td width="28%" align="right" valign="bottom"><a href="http://www.facebook.com/ru5l4n12" target="_blank"><img src="images/furry_cushion_facebook.ico" /></a>
        <a href="https://twitter.com/ruslan_chasep" target="_blank"><img src="images/furry_cushion_twitter.ico" /></a></font><a href="https://twitter.com/ruslan_chasep">
        </a></td>
      </tr>
      <tr>
        <td colspan="2" align="right" valign="bottom"><a href="?page=login_admin"></a>
            <form id="searchbox" name="searchbox" method="post" action="index.php?page=search" onSubmit="return check(this)" style='margin-bottom: 11px; margin-right: 11px;'>
              <input name="query" type="text" class="search-input" size="25" required="required" />
              <input name="search" type="submit" class="search-button" value="Search" />
          </form></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="22%" height="139" valign="top">
	<table width="100%" border="0" cellpadding="5" style='border: 1px solid #ccc; background: #0099FF; border-radius: 7px; box-shadow: 3px 3px 6px #666; margin-bottom: 7px;'>
      <tr>
        <td height="33" align="center" style='background: #0066FF; border-bottom: 2px solid #ccc; border-radius: 7px 7px 0 0;'><strong><font color="#FFFFFF">MAIN MENU</font></strong></td>
      </tr>
      <tr>
        <td align="center">
		• <a href="index.php">Home</a> •<br/>
		• <a href="?page=about">About</a> •<br/>
		• <a href="?page=stock">Stock</a> •<br/>
		• <a href="?page=delivery">Delivery</a> •		</td>
      </tr>
    </table>
      <table width="100%" border="0" cellpadding="5" style='border: 1px solid #ccc; background: #0099FF; border-radius: 7px; box-shadow: 3px 3px 6px #666; margin-bottom: 7px;'>
        <tr>
          <td height="33" align="center" style='background: #0066FF; border-bottom: 2px solid #ccc; border-radius: 7px 7px 0 0;'><strong><font color="#FFFFFF">MENU OPTIONS</font></strong> </td>
        </tr>
        <tr>
          <td align="center">
		  &bull; <a href="admin/index.php">Administrator</a> •<br/>
		  &bull; <a href="?page=login_member">Login Fans Member </a> •<br/>
          &bull; <a href="?page=register">Register Now!</a> •<br/>
          &bull; <a href="?page=guestbook">Guestbook</a> •</td>
        </tr>
      </table>
      <table width="100%" border="0" cellpadding="5" style='border: 1px solid #ccc; background: #0099FF; border-radius: 7px; box-shadow: 3px 3px 6px #666;'>
        <tr>
          <td height="33" align="center" style='background: #0066FF; border-bottom: 2px solid #ccc; border-radius: 7px 7px 0 0;'><strong><font color="#FFFFFF">LATEST POST</font></strong></td>
        </tr>
        <tr>
          <td><?php include "include/latest_post.php"; ?></td>
        </tr>
    </table></td>
    <td width="57%" valign="top">
	<table width="100%" border="0" align="center" cellpadding="5" style='border: 1px solid #ccc; background: #0099FF; border-radius: 7px; box-shadow: 3px 3px 6px #666;'>
      <tr>
        <td valign="top"><div style='text-align: justify;'><?php include 'switch_page.php'; ?></div></td>
      </tr>
    </table></td>
    <td width="21%" valign="top">
	<table width="100%" border="0" cellpadding="5" style='border: 1px solid #ccc; background: #0099FF; border-radius: 7px; box-shadow: 3px 3px 6px #666; margin-bottom: 7px;'>
        <tr>
          <td align="center"><?php include 'slider.php'; ?>
		  </td>
        </tr>
      </table>
	<table width="100%" border="0" cellpadding="5" style='border: 1px solid #ccc; background: #0099FF; border-radius: 7px; box-shadow: 3px 3px 6px #666; margin-bottom: 7px;'>
        <tr>
          <td height="33" align="center" style='background: #0066FF; border-bottom: 2px solid #ccc; border-radius: 7px 7px 0 0;'><strong><font color="#FFFFFF"> DATE AND TIME </font></strong></td>
        </tr>
        <tr>
          <td align="left"><?php include 'include/time.php'; ?></td>
        </tr>
      </table>
      <table width="100%" border="0" cellpadding="5" style='border: 1px solid #ccc; background: #0099FF; border-radius: 7px; box-shadow: 3px 3px 6px #666; margin-bottom: 7px;'>
        <tr>
          <td height="33" align="center" style='background: #0066FF; border-bottom: 2px solid #ccc; border-radius: 7px 7px 0 0;'><strong><font color="#FFFFFF">CAST A VOTE </font></strong></td>
        </tr>
        <tr>
          <td align="center"><?php include "include/polling.php"; ?></td>
        </tr>
      </table>
      <table width="100%" border="0" cellpadding="5" style='border: 1px solid #ccc; background: #0099FF; border-radius: 7px; box-shadow: 3px 3px 6px #666;'>
        <tr>
          <td height="33" align="center" style='background: #0066FF; border-bottom: 2px solid #ccc; border-radius: 7px 7px 0 0;'><strong><font color="#FFFFFF">HIT COUNTER </font></strong></td>
        </tr>
        <tr>
          <td><?php include 'include/visitor.php'; ?></td>
        </tr></table>
</td>
  </tr>
  
  <tr>
    <td colspan="3" valign="middle">
	<table background="images/footer_background.png" width="100%" border="0" cellpadding="7" style='border: 1px solid #ccc; border-radius: 7px; box-shadow: 3px 3px 6px #666; margin-top: 4px;'>
      <tr>
        <td align="center"><a href="?page=home">J-Fleece</a> &copy; 2013 | Created by <a href="?page=about_author">Ruslan Abdul Ghani </a> | Powered by <a href="http://www.smkmuhpekalongan.sch.id" target="_blank">Grafansa Al-fatana | </a> All Rights Reserved </td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>