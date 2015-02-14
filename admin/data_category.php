
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php 
	include "../config/config.php";
	
	$sql=mysql_query("select * from category order by id_category desc");
?>
<div style="margin-bottom: 5px; margin-left: 3px;">
[+] <a href="add_category.php"><strong>Add New Category</strong></a>
</div>
<table width="100%" align="center" cellpadding="3" bgcolor="white">
<tr align="center" style="font-weight: bold;" bgcolor="blue">
<td width="10%">No.</td>
<td width="36%">Category Name</td>
<td width="26%">Created on</td>
<td colspan="2">Pilihan</td>
</tr>
<?php
	$nomer=1;
	while ($data=mysql_fetch_array($sql)) {
?>
<tr bgcolor="#0099FF">
<td align="center"><?php echo $nomer; ?></td>
<td align="left"><?php echo $data['category_name']; ?></td>
<td align="center"><?php echo $data['tanggal']; ?></td><td width="14%" align="center"><a href="?menu=edit_category&id=<?php echo $data['id_category']; ?>">Edit</a></td><td width="14%" align="center"><a href="?menu=delete_category&id=<?php echo $data['id_category']; ?>" onclick="return confirm('Yakin ingin di hapus?');">Delete</a></td>
</tr>
<?php
	$nomer++;
	}
?>
</table>
</body>
</html>
