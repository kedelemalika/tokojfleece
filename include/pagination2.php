<?php
//paging guestbook
	$batas = 4;
	if ($_GET['page']=="guest" && !empty($_GET['p'])) {
		$halam = $_GET['p'] - 1;
		$mulai = $batas * $halam;
	} else if ($_GET['page']=="guest" and $_GET['p'] == 1) {
		$mulai = 0;
	} else if ($_GET['page']=="guest" and empty($_GET['p'])) {
		$mulai = 0;
	}
?>