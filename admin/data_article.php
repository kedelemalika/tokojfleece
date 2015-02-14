
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
	include '../config/config.php';
	
	$sql=mysql_query("select * from article order by id_article desc");
?>
<div style="margin-bottom: 5px; margin-left: 3px;">
[+] <a href="?menu=add_article"><strong>Add New Article</strong></a>
</div>
<table width="100%" align="center" cellpadding="3" bgcolor="white">
<tr bgcolor="blue" align="center" style="font-weight: bold;">
<td width="10%">No.</td>
<td width="30%">Judul Artikel</td>
<td width="33%">Tanggal Terbit</td>
<td colspan="2">Pilihan</td>
</tr>
<?php
	$nomer=1;
	while ($data=mysql_fetch_array($sql)) {
?>
<tr bgcolor="#0099FF">
<td align="center"><?php echo $nomer; ?></td><td><?php echo $data['judul_post']; ?></td><td align="center"><?php echo $data['tanggal']; ?></td><td width="14%" align="center"><a href="?menu=edit_article&id=<?php echo $data['id_article']; ?>">Edit</a></td>
<td width="13%" align="center"><a href="?menu=delete_article&id=<?php echo $data['id_article']; ?>" onclick="return confirm('Yakin ingin di hapus?');">Delete</a></td>
</tr>
<?php
	$nomer++;
	}
?>
</table>
</body>
</html>
