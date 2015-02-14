<?php
	session_start();
	require_once ('../config/config.php');
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql=mysql_query("select * from admin where username='$username' ");
	$rows=mysql_num_rows($sql);
	$hasil=mysql_fetch_array($sql);
	if ($rows == 0){
	echo "user belum terdaftar";
	echo "<a href=\"login.php\"> back</a>";
	}else {
		if ($password <> $hasil['password']) {
		echo "password salah";
		echo "<a href=\"login.php\"> back</a>";
	}else{
	$_SESSION['username']= "$username";
	header('location:admin.php');
	}
}

	
	
		
?>
	
	