<html>
<head>
<title>article</title>
<link href="css/imghover.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	include "config/config.php";
	include "include/pagination.php";
	/*pagination*/
	$query = mysql_query("SELECT * FROM article ORDER BY id_article desc LIMIT $mulaiawal,$batasawal");
	while ($data = mysql_fetch_array($query)) {
	
	/*Syntax readmore*/
	/*$article=mysql_query("select * from article order by id_article desc");
		while ($data=mysql_fetch_array($query)) {*/
			$post=substr($data['isi_post'],0,135);
?>
<div align="right"><font size="3" style='text-shadow: 3px 3px 6px black;'>(Posted on : <?php echo $data['tanggal']; ?>)</font></div>
<strong><font size="4" style="margin-left: 5px; text-shadow: 3px 3px 6px black;" >
<a href="index.php?page=article&id=<?php echo $data['id_article']; ?>">
	<?php echo $data['judul_post']; ?></a>
</font></strong></strong><br />
	<span class="zoom"><img alt="<?php echo $data['judul_post']; ?>" title="<?php echo $data['judul_post']; ?>" src="<?php echo $data['gambar']; ?>" align="left" hspace="5px" vspace="5px" style="width: 125px; height: 95px; border: 1px solid #ccc; box-shadow: 0 0 4px #888; margin-top: 5px;" /></span><span style="text-align: justify;"><?php echo $post; echo "..."; ?></span> 
<div align="right"><a href="index.php?page=article&id=<?php echo $data['id_article']; ?>"><b>Read more »</b></a></div>
<br/>
<hr color="white"/>
<?php
		}
?>
<?php
//navigasi
	$cekquery = mysql_query("SELECT * FROM article");
	$jumlahdata = mysql_num_rows($cekquery);
	if ($jumlahdata > $batasawal) {
		echo '<center><ul class="pagination pagination-sm">';
		$a = explode(".", $jumlahdata / $batasawal);
		$b = $a[0];
		$c = $b + 1;
		for ($i = 1; $i <= $c; $i++) {
			echo '<li class="active"><a style="text-decoration:none;';
			if ($_GET['page'] == $i) {
				echo 'color:red';
			}
			echo '" href="?page=' . $i . '">' . $i . '</a></li> ';
		}
		echo '</ul></center>';
	}
?>
</body>
</html>