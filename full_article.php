<html>
<head>
<title>article</title>
<link href="css/imghover.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	include "config/config.php";

	$id=$_GET['id'];
	$sql=mysql_query("select * from article where id_article='$id'");
	$data=mysql_fetch_array($sql);
?>

<div align="right"><font size="3" style="text-shadow: 3px 3px 6px black;">(Posted on : <?php echo $data['tanggal']; ?>)</font></div><strong><div align="left"><font size="4" style="text-shadow: 3px 3px 6px black;"><a href="index.php?page=article&id=<?php echo $data['id_article']; ?>">
  <?php echo $data['judul_post']; ?></a></font></div></strong><br/> 
  <span class="zoom"><img alt="<?php echo $data['judul_post']; ?>" title="<?php echo $data['judul_post']; ?>" src="<?php echo $data['gambar']; ?>" align="left" style="width: 200px; height: 170px; border: 1px solid #ccc; box-shadow: 0 0 4px #888; margin-top: 5px; margin-right: 7px;" /></span><span style="text-align: justify;"><?php echo $data['isi_post']; ?></span>
  </body>
  </html>