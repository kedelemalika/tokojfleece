<?php 
	include "config/config.php";
	$sql=mysql_query("select * from member order by no_id desc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
Di bawah ini adalah daftar semua nama yang sudah resmi menjadi member dari website J-Fleece ini<br/><br/>
<div style="margin-bottom: 5px; margin-left: 3px;">
[+] <a href="index.php?page=register"><strong>Add New Member</strong></a>
</div>
<table width="100%" align="center" cellpadding="3" bgcolor="blue">
<tr bgcolor="##0099FF" align="center" style="font-weight: bold;">
<td>No.</td>
<td>Nama</td>
<td>E-mail</td>
<td>Register on</td>
</tr>
<?php
	$nomer= 1 ;
	while ($data=mysql_fetch_array($sql)) {
?>
<tr bgcolor="#FFFF99">
<td align="center"><?php echo $nomer; ?></td>
<td><?php echo $data['nama']; ?></td><td><a href="mailto:<?php echo $data['email']; ?>"><?php echo $data['email']; ?></a></td><td align="center"><?php echo $data['register_on']; ?></td>
</tr>
<?php
	$nomer++;
	}
?>
</table>
</body>
</html>