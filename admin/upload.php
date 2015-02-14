<?php
$namafolder="images/images_article/"; //tempat menyimpan file
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("web")  or die(mysql_error());
if (!empty($_FILES["gambar"]["tmp_name"]))
{

	$categori=$_POST['id_category'];
	$judul=$_POST['judul_post'];
	$isi=$_POST['isi_post'];
	$jenis_gambar=$_FILES['gambar']['type'];
	$judul_gambar=$_POST['judul_gambar'];
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{			
		$gambar = $namafolder . basename($_FILES['gambar']['name']);		
		if (move_uploaded_file($_FILES['gambar']['tmp_name'], $gambar)) {
			$sql=mysql_query("INSERT INTO 'web'.'article' ('id_article','id_category','judul_post','gambar','isi_post','author','tanggal') VALUES ('','$categori','$judul','$gambar','$isi','Admin',now()");
			$res=mysql_query($sql) or die (mysql_error());
			header('location:admin.php?menu=article');	   
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
	echo "Anda belum memilih gambar";
}
?>