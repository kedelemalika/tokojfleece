<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
.search-button {
	background: blue;
	box-shadow: 1px 1px 2px #333;
	border: 1px solid #ccc;
	border-radius: 4px;
	}
.search-button:hover {
	background: white;
	box-shadow: 1px 1px 2px #333;
	border:1px solid #ccc;
	border-radius: 4px;
	}
.search-input {
	background: #fff;
	box-shadow: 1px 1px 2px #333;
	border:1px solid #ccc;
	border-radius: 4px;
	}
.search-input:hover {
	background: #FFFF99;
	box-shadow: 1px 1px 2px #333;
	border: 1px solid #ccc;
	border-radius: 4px;
	}
.search-input:focus {
	background: #FFFF99;
	box-shadow: 1px 1px 2px #333;
	border: 1px solid #ccc;
	border-radius: 4px;
	}
</style>
<script type="text/javascript" src="../nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
</head>
<body>
<div style="margin-left: 30px; margin-bottom: 5px;">
<form action="../upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <table width="621" height="163" border="0">
 <tr>
 <td width="101">Judul Article </td> 
 <td width="510"> <input class="search-input" type="text" name="judul_post" />
   <font size="-1" color="#FF0000">*wajib di isi </font></td>
 </tr>
 <tr>
   <td>Categori</td>
   <td><select name="id_category" class="search-input" required="required">
      <option value="">.: Pilih Kategori :.</option>
      <option value="category_1">Jaket</option>
      <option value="category_2">Kaos</option>
      <option value="category_3">Kemeja</option>
    </select> 
      <span style="color: red;">*<font size="-1">(pilih salah satu kategori untuk artikel yang anda buat)</font></span></td>

 </tr>
 <tr>
   <td>Isi Post </td>
   <td><textarea name="isi_post" cols="40" rows="4" class="search-input"></textarea></td>
 </tr>
 <tr>
   <td>File Gambar</td>
   <td><input class="search-input" name="gambar" type="file" id="nama_file" size="30" /><font size="-1" color="#FF0000">*(jpg,gif,png)</font></td>
 </tr>
 <tr>
   <td colspan="2">
   <p>&nbsp;</p>
   </td>
   </tr>
</table>
    
    <p>
    <input type="submit" class="search-button" name="btnSimpan" id="btnSimpan" value="Simpan" />
	    <input type="reset" class="search-button" name="btnReset" id="btnReset" value="Batal" />

  </p>
</form>
</div>
</body>
</html>