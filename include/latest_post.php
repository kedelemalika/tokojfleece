<?php
	include "config/config.php";
	
	$query=mysql_query("select * from article order by id_article desc");
		while ($data=mysql_fetch_array($query)) {
?>

&bull; <a href="index.php?page=article&id=<?php echo $data['id_article']; ?>"><?php echo $data['judul_post']; ?></a>
<br /><font size="-2" style="margin-left: 10px; color: black;">(Posted on : <?php echo $data['tanggal']; ?>)</font><br /><br/>

<?php
		}
?>