<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guestbook</title>
<style type="text/css">
.simple-button {
	background: #0099FF;
	box-shadow: 1px 1px 2px #333;
	border: 1px solid #ccc;
	border-radius: 4px;
	}
.simple-button:hover {
	background: white;
	box-shadow: 1px 1px 2px #333;
	border:1px solid #ccc;
	border-radius: 4px;
	}
.simple-input {
	background: white;
	box-shadow: 1px 1px 2px #333;
	border:1px solid #ccc;
	border-radius: 4px;
	}
.simple-input:hover {
	background: #FFFF99;
	box-shadow: 1px 1px 2px #333;
	border: 1px solid #ccc;
	border-radius: 4px;
	}
.simple-input:focus {
	background:#FFFF99;
	box-shadow: 1px 1px 2px #333;
	border: 1px solid #ccc;
	border-radius: 4px;
	}
</style>
<script language="javascript">
	function check(form) {
		if (form.nama.value == '') {
		alert('Kolom nama wajib di isi !');
		form.nama.focus();
		return(false);
		}
		if (form.email.value == '') {
		alert('Kolom e-mail wajib di isi !');
		form.email.focus();
		return(false);
		}
		if (form.komentar.value == '') {
		alert('Kolom komentar tidak boleh kosong !');
		form.komentar.focus();
		return(false);
		}
		return(true);
	}
</script>
<script type="text/javascript" src="nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
</head>
<body>
<form name="guestbook" action="save_guestbook.php" method="post" onSubmit="return check(this)">
<table width="98%" border="0">
  <tr>
    <td colspan="4">Ayo! Tinggalkan jejak anda dengan cara menulis komentar pada form di bawah ini! Pastikan anda mengisinya dengan bijak. </td>
  </tr>
  <tr>
    <td width="33%" align="right">Nama</td>
    <td width="1%" align="center">:</td>
    <td colspan="2"><input name="nama" type="text" class="simple-input" required="required" />
      <span style="color: red;"><strong>*</strong>(wajib di isi)</span></td>
  </tr>
  <tr>
    <td align="right">E-mail</td>
    <td align="center">:</td>
    <td colspan="2"><input name="email" type="email" class="simple-input" required="required"/>
      <span style="color: red;"><strong>*</strong>(wajib di isi)</span></td>
  </tr>
  <tr>
    <td align="right">Website</td>
    <td align="center">:</td>
    <td colspan="2"><input name="website" type="text" class="simple-input" /></td>
  </tr>
  <tr>
    <td align="right" valign="top">Komentar</td>
    <td align="center" valign="top">:</td>
    <td width="17%" valign="top"><textarea id="komentar" name="komentar" cols="35" rows="4" class="simple-input" ></textarea></td>
    <td width="40%" valign="top"><span style="color: red;"><strong>*</strong>(wajib di isi)</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><input name="submit" type="submit" class="simple-button" value="Submit" />
      <input name="cancel" type="reset" class="simple-button" value="Cancel" /></td>
  </tr>
</table>
</form>
<div style="border-top: 2px solid white; margin-top: 9px; margin-bottom: 9px;"></div>
<?php include "include/view_guestbook.php"; ?>
</body>
</html>
