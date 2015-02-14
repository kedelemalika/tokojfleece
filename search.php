<?php
	include "config/config.php";
	
	$cari=$_POST['query'];
	$sql=mysql_query("select * from article where judul_post like '%$cari%' order by id_article desc");
	echo "<center><u>Hasil pencarian artikel dengan keyword <b>$cari</b> :</u></center>";
	
	if (mysql_num_rows($sql) == 0) {
	echo "Mohon ma'af! Data yang anda cari tidak ada dalam server database kami !";
	}
	else {
		while ($data=mysql_fetch_array($sql)) {
		$post=substr($data['isi_post'],0,205);
?>
<link href="css/imghover.css" rel="stylesheet" type="text/css" />


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
	}
?>