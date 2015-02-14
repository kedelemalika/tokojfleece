
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php 
	include "../config/config.php";
	$sql=mysql_query("select * from member order by no_id desc");
?>
<div style="margin-bottom: 5px; margin-left: 3px;">
[+] <a href="?menu=add_member"><strong>Add New Member</strong></a>
</div>
<table width="100%" align="center" cellpadding="3" bgcolor="white">
<tr bgcolor="blue" align="center" style="font-weight: bold;">
<td>No.</td>
<td>Nama</td>
<td>E-mail</td>
<td>Register on</td>
<td colspan="2">Pilihan</td>
</tr>
<?php
	$nomer=1;
	while ($data=mysql_fetch_array($sql)) {
?>
<tr bgcolor="#0099FF">
<td align="center"><?php echo $nomer; ?></td>
<td><?php echo $data['nama']; ?></td><td><a href="mailto:<?php echo $data['email']; ?>"><?php echo $data['email']; ?></a></td><td align="center"><?php echo $data['register_on']; ?></td>
<td width="14%" align="center"><a href="menu=edit_member&id=<?php echo $data['no_id']; ?>">Edit</a></td>
<td width="13%" align="center"><a href="menu=delete_member&id=<?php echo $data['no_id']; ?>" onclick="return confirm('Yakin ingin di hapus?');">Delete</a></td>
</tr>
<?php
	$nomer++;
	}
?>
</table>
</body>
</html>

