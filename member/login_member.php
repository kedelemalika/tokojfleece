<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login as a Member</title>
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
	background: #fff;
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
	background: #FFFF99;
	box-shadow: 1px 1px 2px #333;
	border: 1px solid #ccc;
	border-radius: 4px;
	}
</style>
<script language="javascript">
	function check(form) {
		if (form.username.value == '') {
		alert('Kolom username harus di isi !');
		form.username.focus();
		return(false);
		}
		if (form.password.value == '') {
		alert('Kolom password harus di isi !');
		form.password.focus();
		return(false);
		}
		return(true);
	}
</script>
</head>
<body>
<?php
	if (!empty($_GET['message'])) {
		if ($_GET['message'] == 'failed') {
			echo "<center><b>Login gagal! Silahkan ulangi lagi.</b></center>";
		}
	}
?>
<form method="post" action="index.php?page=do" onSubmit="return check(this)">
  <table width="100%" border="0">
    <tr>
      <td colspan="5" align="left">Silahkan login menggunakan username dan password anda sebagai member dari website <em><strong>J-Fleece</strong></em> ini!</td>
    </tr>
    <tr>
      <td width="37%" align="right">Username</td>
      <td width="1%" align="center">:</td>
      <td width="62%"><input name='member' type='text' class="simple-input" required="required" /></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td align="center">:</td>
      <td><input name='pass_member' type='password' class="simple-input" required="required" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name='login' type='submit' class="simple-button" value='Login' /> 
      <input name='cancel' type='reset' class="simple-button" value='Cancel' /></td>
    </tr>
    <tr>
      <td colspan="3" align="left">Belum punya akun? Daftar jadi member sekarang juga, klik <a href="?page=register"><strong>di sini!</strong></a> </td>
    </tr>
  </table>
</form>
</body>
</html>