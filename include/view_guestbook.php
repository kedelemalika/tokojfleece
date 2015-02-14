<?php 
	include "config/config.php";
	include "pagination2.php";
	$nomer=1;
	$data=mysql_query("SELECT * FROM guestbook ORDER BY no_id desc LIMIT $mulai,$batas");
	while ($view=mysql_fetch_array($data)) {
?>

<table width="100%" cellpadding="5" style="background: #FFFF99; border: 1px solid #ccc; border-radius: 7px; box-shadow: -1px -1px 2px #666; margin-top: 7px;">
  <tr>
    <td colspan="2" bgcolor="#0066FF" style='border-left: 1px solid #ccc; border-top: 1px solid #ccc; border-right: 1px solid #ccc; border-radius: 7px 7px 0 0;'><b><?php echo $view['nama']; ?> (<a href="mailto:<?php echo $view['email']; ?>"><?php echo $view['email']; ?></a>)</b></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" style='border-left: 1px solid #ccc; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc; border-radius: 0 0 7px 7px;'>Posted on : <?php echo $view['waktu']; ?></td>
  </tr>
  <tr>
    <td colspan="2"><input style="background: transparent; border: none; width: 98%;" name="komentar" readonly><?php echo $view['komentar']; ?></textarea></td>
  </tr>
  <tr>
    <td width="90%"><i>My website : <?php echo $view['website']; ?></i></td>
    <td width="10%" align="right"><span style="background: #0099FF; border: 1px solid #ccc; border-radius: 11px; box-shadow: 1px 1px 2px #666; padding-left: 5px; padding-right: 5px;"><b><?php echo $nomer; ?></b></span></td>
  </tr>
</table>

<?php
	$nomer++;
	}
?>
<?php
	$cekquery = mysql_query("SELECT * FROM guestbook");
	$jumlahdata = mysql_num_rows($cekquery);
	if($jumlahdata > $batas) {
		echo '<center><ul class="pagination pagination-sm">';
		$a = explode(".", $jumlahdata / $batas);
		$b = $a[0];
		$c = $b + 1;
		for($i = 1; $i <= $c; $i++) {
			echo '<li class="active"><a style="text-decoration:none;"';
			if($p == $i) {
				echo 'color:red';
			}
			echo '" href="?page=guestbook&p=' . $i . '">' . $i . '</a></li> ';
		}
		echo '</ul></center>';
	}
		
		?>
