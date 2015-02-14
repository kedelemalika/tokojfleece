
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
	include '../config/config.php';
	
	$sql=mysql_query("select * from guestbook order by no_id desc");
?>
<div style="margin-bottom: 5px; margin-left: 3px;">
[+] <a href="add_guestbook.php"><strong>Add New Comment</strong></a>
</div>
<table width="100%" align="center" cellpadding="3" bgcolor="white">
<tr bgcolor="blue" align="center" style="font-weight: bold;">
<td>No.</td>
<td>Nama</td>
<td>E-mail</td>
<td>Waktu Komentar </td>
<td colspan="2">Pilihan</td>
</tr>
<?php
	$nomer=1;
	while ($data=mysql_fetch_array($sql)) {
?>
<tr bgcolor="#0099FF">
<td align="center"><?php echo $nomer; ?></td><td><?php echo $data['nama']; ?></td><td align="left"><?php echo $data['email']; ?></td>
<td align="center"><?php echo $data['waktu']; ?></td><td width="9%" align="center"><a href="?menu=edit_guestbook&id=<?php echo $data['no_id']; ?>">Edit</a></td><td width="8%" align="center"><a href="?menu=delete_guestbook&id=<?php echo $data['no_id']; ?>" onclick="return confirm('Yakin ingin di hapus?');">Delete</a></td>
</tr>
<?php
	$nomer++;
	}
?>
</table>
</body>
</html>
