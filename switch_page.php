<?php
//switch ($_GET['page']) {
$pg = !empty($_GET['page']) ? $_GET['page'] : "" ;
switch($pg){	
	default:
	include 'article.php';
	break;
	case 'article':
	if (!file_exists('full_article.php')) {
	echo "<center><b>Mahon ma'af ! Halaman yang anda minta untuk sementara tidak dapat di akses. Cobalah beberapa saat lagi !</b></center>";
	} else {
	include 'full_article.php';
		}
	break;
	case 'search':
	if (!file_exists('search.php')) {
	echo "<center><b>Mohon ma'af ! Halaman yang anda minta untuk sementara waktu tidak dapat di akses. Cobalah beberapa saat lagi !</b></center>";
	} else {
		include 'search.php';
		}
	break;
	case 'about' :
	if (!file_exists('about.php')) {
	echo "<center><b>Mohon ma'af ! Halaman yang anda minta untuk sementara waktu tidak dapat di akses. Cobalah beberapa saat lagi !</b></center>";
	} else {
		include 'about.php';
		}
	break;
	case 'delivery':
	if (!file_exists('delivery.php')) {
	echo "<center><b>Mohon ma'af ! Halaman yang anda minta untuk sementara waktu tidak dapat di akses. Cobalah beberapa saat lagi !</b></center>";
	} else {
		include 'delivery.php';
		}
	break;
	case 'stock':
	if (!file_exists('stock.php')) {
	echo "<center><b>Mohon ma'af ! Halaman yang anda minta untuk sementara waktu tidak dapat di akses. Cobalah beberapa saat lagi !</b></center>";
	} else {
		include 'stock.php';
		}
	break;
	case 'register':
	if (!file_exists('register.php')) {
	echo "<center><b>Mohon ma'af ! Halaman yang anda minta untuk sementara waktu tidak dapat di akses. Cobalah beberapa saat lagi !</b></center>";
	} else {
		include 'register.php';
		}
	break;
	case 'guestbook':
	if (!file_exists('include/guestbook.php')) {
	echo "<center><b>Mohon ma'af ! Halaman yang anda minta untuk sementara waktu tidak dapat di akses. Cobalah beberapa saat lagi !</b></center>";
	} else {
		include 'include/guestbook.php';
		}
	break;
	case 'member':
	if (!file_exists('member/member.php')) {
	echo "<center><b>Mohon ma'af ! Halaman yang anda minta untuk sementara waktu tidak dapat di akses. Cobalah beberapa saat lagi !</b></center>";
	} else {
		include 'member/member.php';
		}
	break;
	case 'login_member':
	if (!file_exists('member/login_member.php')) {
	echo "<center><b>Mohon ma'af ! Halaman yang anda minta untuk sementara waktu tidak dapat di akses. Cobalah beberapa saat lagi !</b></center>";
	} else {
		include 'member/login_member.php';
		}
	break;
	case 'do';
	if (!file_exists('member/do_login_member1.php')) {
	echo "<center><b>Mohon ma,af ! Halaman yang anda minta untuk sementara waktu tidak dapat di akses. Cobalah beberapa saat lagi !</b></center>";
	} else {
		include 'member/do_login_member1.php';
		}
	break;
}
?>
