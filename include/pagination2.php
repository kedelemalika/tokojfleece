<?php
//paging guestbook
	$batas = 4;
	$page = isset($_GET['page']) ? $_GET['page'] : "";
	$p = isset($_GET['p']) ? $_GET['p'] : 0;
	if ($page=="guestbook" && $p!==0) {
		$halam = $p - 1;
		$mulai = $batas * $halam;
	} else if ($page=="guestbook" and $p == 1) {
		$mulai = 0;
	} else {
		$mulai = 0;
	}
?>
