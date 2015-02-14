<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="../css/style2.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<form name="register" action="do_register.php" method="post">
	<table width="100%" border="0">
    	<tr>
        	<td colspan="3" valign="top">Silahkan isi data lengkap sesuai dengan form dibawah.</td>
            </tr>
            <tr>
            	<td width="35%" align="right">Nama </td>
                <td width="1%" align="center">:</td>
                <td width="64%"><input name="nama" type="text" class="search-input" required="required"/> <span style="color:red;"><strong>*</strong>(wajib di isi)</span></td>
                </tr>
                <tr>
                	<td align="right">Jenis Kelamin </td>
                    <td align="center">:</td>
                    <td><select name="jns_kelamin" required class="search-input" style="width:144px;">
                    <option value="" selected="selected"></option>
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select><span style="color:red;"><strong>*</strong>(wajib di isi)</span></td>
                    </tr>
                    <tr>
                    <td align="right">Tempat, Tanggal Lahir </td>
                    <td align="center">:</td>
                    <td><input name="ttl" type="text" class="search-input" /></td>
                    </tr>
                    <tr>
                    <td align="right">Agama</td>
                    <td align="center">:</td>
                    <td><select name="agama" class="search-input" style="width: 144px;" required="required">
                    <option value="" selected="selected"></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindhu">Hindhu</option>
                    <option value="Budha">Budha</option>
                    </select><span style="color:red;"><strong>*</strong>(wajib di isi)</span>
                    </td>
                    </tr>
                    <tr>
                    <td align="right">Alamat</td>
                    <td align="center">:</td>
                    <td><input name="alamat" type="text" class="search-input" /></td>
                    </tr>
                    <tr>
                    <td align="right">E-mail</td>
                    <td align="center">:</td>
                    <td><input name="email" type="email" class="search-input" required="required" /><span style="color:red;"><strong>*</strong>(wajib di isi)</span></td>
                    </tr>
                    <tr>
                    <td align="right">Hobi</td>
                    <td align="center">:</td>
                    <td><input name="hobi" type="text" class="search-input" /></td>
                    </tr>
                    <tr>
                    <td align="right">Pekerjaan</td>
                    <td align="center">:</td>
                    <td><select name="pekerjaan" class="search-input" style="width:144px;">
                    <option value="" selected="selected"></option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Pegawai Negeri">Pegawai Negeri</option>
                    <option value="Karyawan">Karyawan</option>
                    </select>
                    </td>
                    </tr>
                    <tr>
                    <td align="right">Website</td>
                    <td align="center">:</td>
                    <td><input name="website" type="text" class="search-input" /></td>
                    </tr>
                    <tr>
                    <td align="right">Password</td>
                    <td align="center">:</td>
                    <td><input name="password" type="password" class="search-input" required="required" />
                    <span style="color:red;"><strong>*</strong>(wajib di isi)</span></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><input name="add_member" type="submit" class="search-button" value="Add" />
                    <input name="cancel" type="reset" class="search-button" value="Cancel" /></td>
                    </tr>
                    </table>
                    </form>
</body>
</html>