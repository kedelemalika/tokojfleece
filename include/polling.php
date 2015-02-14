<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style type="text/css">
.tombol-button {
	background: #0099FF;
	box-shadow: 1px 1px 2px #333;
	border: 1px solid #ccc;
	border-radius: 4px;
	}
.tombol-button:hover {
	background: white;
	box-shadow: 1px 1px 2px #333;
	border:1px solid #ccc;
	border-radius: 4px;
	}
#body {
margin-left:20px; }
</style>
<title>polling</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
 
<body>
<form action="proses-polling.php" method="post">
<table width="164" border="0" cellpadding="5" cellspacing="0">
<tr>
<td width="14" height="84" align="justify"></td>
<td width="130" align="justify"><input type="radio" name="polling" value="bagus">
Sangat Bagus <br>
<input type="radio" name="polling" value="sedang">
Sedang<br>
<input type="radio" name="polling" value="jelek">
Jelek</td>
</tr>
<tr>
<td colspan="2" align="center"><hr align="center" width="180">
<input name="tombol" type="submit" class="tombol-button" value="Submit">
<hr align="center" width="180">
<input name="Batal" type="reset" class="tombol-button" value="Batal"></td>
</tr>
</table>
<hr align="center" width="180">
<?php
include 'config/config.php';
 
$cek=mysql_query("select * from polling");
$cek_hasil=mysql_fetch_array($cek);
if($cek_hasil['jelek']=="") // karena pada saat pembuatan tabel polling, tiap field datanya masih kosong , maka kita isi tiap field dengan nilai 0.
{
mysql_query("insert into polling(jelek,sedang,bagus) values('0','0','0')"); // mengisi field dengan nilai 0
}
else
{
$query=mysql_query("select * from polling");
$data=mysql_fetch_array($query);
$total=$data['jelek']+$data['sedang']+$data['bagus'];
if($total=='0') //karena jumlah total = 0 , berarti masing2 field berisi data = '0'
{
$jelek='0';
$sedang='0';
$bagus='0';
}
else
{
$jelek=($data['jelek']/$total)*100;
$sedang=($data['sedang']/$total)*100;
$bagus=($data['bagus']/$total)*100;
}
}
?>
<table width="190" border="0" cellspacing="0" cellpadding="3">
<tr>
<td colspan="2"><center><b>Hasil Penilaian saat ini:</b></center></td>
</tr>
<tr>
<td width="92" align="center">Sangat Bagus </td>
<td width="86">: <?php printf("%.2lf\n",$bagus);?> %</td>
</tr>
<tr>
<td align="center">Sedang</td>
<td>: <?php printf("%.2lf\n",$sedang);?> %</td>
</tr>
<tr>
<td align="center">Jelek</td>
<td>: <?php printf("%.2lf\n",$jelek);?> %</td>
</tr>
</table>
<br>
</form>
</body>
</html>
