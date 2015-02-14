<?php
	session_start();
	include "config/config.php";
	
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	$sql=mysql_query("select * from member where username='$username' and password='$password'");
	$data=mysql_fetch_array($sql);
	$rows=mysql_num_rows($sql);
	
	if ($rows = 1) {
		$_SESSION['username']=$data['username'];
		$_SESSION['password']=$data['password'];
		header("location:index.php?page=member");
	} else {
		header("location:index.php?page=login_member&message=failed");
	}
?>