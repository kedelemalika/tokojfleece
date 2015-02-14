<?php
//switch($_GET['menu']) {
$mn = !empty($_GET['menu']) ? $_GET['menu'] : "" ;
switch ($mn) {
	default:
		echo "<center>Hello, <b>".$_SESSION['username']."</b>! How are you today? :)</center>";
		echo "<hr color='white' />";
		include "data_member.php";
	break;
	case 'article':
	if (!file_exists('data_article.php')) {
		echo "<center><b>Ma'af, halaman yang anda minta tidak tersedia !</b></center>";
	} else {
		include 'data_article.php';
	}
	break;
	case 'category':
	if (!file_exists('data_category.php')) {
		echo "<center><b>Ma'af, halaman yang anda minta tidak tersedia !</b></center>";
	} else {
		include 'data_category.php';
	}
	break;
	case 'guestbook':
	if (!file_exists('data_guestbook.php')) {
		echo "<center><b>Ma'af, halaman yang anda minta tidak tersedia !</b></center>";
	} else {
		include 'data_guestbook.php';
	}
	break;
	case 'member':
	if (!file_exists('data_member.php')) {
		echo "<center><b>Ma'af, halaman yang anda minta tidak tersedia !</b></center>";
	} else {
		include 'data_member.php';
	}
	break;
	case 'setting':
	if (!file_exists('data_admin.php')) {
		echo "<center><b>Ma'af, halaman yang anda minta tidak tersedia !</b></center>";
	} else {
		include 'data_admin.php';
	}
	break;
	case 'add_article':
	if (!file_exists('add_article.php')) {
		echo "<center><b>Ma'af, halaman yang anda minta tidak tersedia !</b></center>";
	} else {
		include 'add_article.php';
	}
	break;
	case 'add_member':
	if (!file_exists('add_member.php')) {
		echo "<center><b>Ma'af, halaman yang anda minta tidak tersedia !</b></center>";
	} else {
		include 'add_member.php';
	}
	break;
}
?>
