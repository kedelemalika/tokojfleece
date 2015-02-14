<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Register Now!</title>
<link rel="stylesheet" href="css/style2.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript">
	function check(form) {
		if (form.nama.value == "") {
		alert("Kolom nama tidak boleh kosong !");
		form.nama.focus();
		return(false);
		}
		if (form.jns_kelamin.value == "") {
		alert("Anda harus memilih jenis kelamin !");
		form.jns_kelamin.focus();
		return(false);
		}
		if (form.agama.value == "") {
		alert("Agama tidak boleh di kosongi !");
		form.agama.focus();
		retun(false);
		}
		if (form.email.value == "") {
		alert("Kolom e-mail tidak boleh kosong !");
		form.email.focus();
		return(false);
		}
		if (form.username.value == "") {
		alert("Anda harus mengisikan username !");
		form.username.focus();
		return(false);
		}
		if (form.password.value == "") {
		alert("Kolom password tidak boleh kosong !");
		form.password.focus();
		return(false);
		}
		return(true);
	}
</script>
</head>
<body>
<form name="register" action="do_register.php" method="post" onSubmit="return check(this)">
<table width="100%" border="0">
  <tr>
    <td colspan="3" valign="top">Silahkan isi data lengkap anda sesuai dengan form di bawah ini, kemudian klik &quot;Register&quot; untuk mendaftar sebagai anggota! </td>
  </tr>
  <tr>
    <td width="35%" align="right">Nama </td>
    <td width="1%" align="center">:</td>
    <td width="64%"><input name="nama" type="text" class="search-input" required="required" /> <span style="color: red;"><strong>*</strong>(wajib di isi)</span></td>
  </tr>
  <tr>
    <td align="right">Jenis Kelamin </td>
    <td align="center">:</td>
    <td>
	<select name="jns_kelamin" class="search-input" style="width: 144px;" required="required">
		<option value="" selected="selected"></option>
		<option value="Laki - Laki">Laki - Laki</option>
		<option value="Perempuan">Perempuan</option>
	</select> <span style="color: red;"><strong>*</strong>(wajib di isi)</span></td>
  </tr>
  <tr>
    <td align="right">Tempat, Tanggal Lahir </td>
    <td align="center">:</td>
    <td><input name="ttl" type="text" class="search-input" /></td>
  </tr>
  <tr>
    <td align="right">Agama</td>
    <td align="center">:</td>
    <td>
	<select name="agama" class="search-input" style="width: 144px;" required="required">
	<option value="" selected="selected"></option>
		<option value="Islam">Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Hindhu">Hindhu</option>
		<option value="Budha">Budha</option>
	</select> <span style="color: red;"><strong>*</strong>(wajib di isi)</span>
	</td>
  </tr>
  <tr>
    <td align="right">Alamat</td>
    <td align="center">:</td>
    <td><input name='alamat' type="text" class="search-input" /></td>
  </tr>
  <tr>
    <td align="right">E-mail</td>
    <td align="center">:</td>
    <td><input name='email' type="email" class="search-input" required="required" /> <span style="color: red;"><strong>*</strong>(wajib di isi)</span></td>
  </tr>
  <tr>
    <td align="right">Hobi</td>
    <td align="center">:</td>
    <td><input name='hobi' type="text" class="search-input" /></td>
  </tr>
  <tr>
    <td align="right">Pekerjaan</td>
    <td align="center">:</td>
    <td>
	<select name="pekerjaan" class="search-input" style="width: 144px;">
	  <option value="" selected="selected"></option>
	  <option value="Wiraswasta">Wiraswasta</option>
	  <option value="Pegawai Negeri">Pegawai Negeri</option>
	  <option value="Karyawan">Karyawan</option>
	  <option value="Pengusaha">Pengusaha</option>
	</select>	</td>
  </tr>
  <tr>
    <td align="right">Website</td>
    <td align="center">:</td>
    <td><input name='website' type="text" class="search-input" /></td>
  </tr>
  <tr>
    <td align="right">Username</td>
    <td align="center">:</td>
    <td><input name='username' type="text" class="search-input" required="required" /> <span style="color: red;"><strong>*</strong>(wajib di isi)</span></td>
  </tr>
  <tr>
    <td align="right">Password</td>
    <td align="center">:</td>
    <td><input name='password' type="password" class="search-input" required="required" /> 
    <span style="color: red;"><strong>*</strong>(wajib di isi)</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name='register' type="submit" class="search-button" value='Register' /> 
    <input name="cancel" type="reset" class="search-button" value='Cancel' /></td>
  </tr>
  <tr>
    <td colspan="3">Sudah  mendaftar? Klik <a href="?page=member"><strong>di sini</strong></a> untuk melihat daftar  member yang ada!</td>
    </tr>
</table>
</form>
</body>
</html>
