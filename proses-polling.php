<?php
ob_start();
include 'config/config.php';
$polling=$_REQUEST['polling'];
$query=mysql_query("select * from polling");
$data=mysql_fetch_array($query);
if($polling=='jelek')
{
$nilai=$data[jelek]+1;
mysql_query("update polling set jelek='$nilai'");
header('Location:index.php');
}
else if($polling=='sedang')
{
$nilai=$data[sedang]+1;
mysql_query("update polling set sedang='$nilai'");
header("Location:index.php");
}
else
{
$nilai=$data[bagus]+1;
mysql_query("update polling set bagus='$nilai'");
header("Location:index.php");
}
ob_end_flush();
?>
