<?php
	include "config/config.php";
	
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$website=$_POST['website'];
	$komentar=$_POST['komentar'];
	$waktu=date("d/m/Y | H:i A");
		
	if (!empty($nama) && !empty($email) && !empty($komentar)) {
		$insert=mysql_query("insert into guestbook values('','$nama','$email','$website','$komentar','$waktu')") or die(mysql_error());
		header('location:index.php?page=guestbook&message=success');
	} else {
		header('location:index.php?page=guestbook&message=failed');
		}
?>