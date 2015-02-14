<?php
	include "config/config.php";
	
	$nama=$_POST['nama'];
	$jns_kelamin=$_POST['jns_kelamin'];
	$ttl=$_POST['ttl'];
	$agama=$_POST['agama'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$hobi=$_POST['hobi'];
	$pekerjaan=$_POST['pekerjaan'];
	$website=$_POST['website'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$register_on=date('d/m/Y');
	
	if ((!empty($nama)) && !empty($jns_kelamin) && !empty($agama) && !empty($email) && !empty($username) && !empty($password)) {
		$insert=mysql_query("insert into member values('','$nama','$jns_kelamin','$ttl','$agama','$alamat','$email','$hobi','$pekerjaan','$website','$username','$password','$register_on')");
		header("location:index.php?page=register&message=success");
	} else {
		header("location:index.php?page=register&message=failed");
	}
?>