<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript"> 
    // 1 detik = 1000 
    window.setTimeout('jam()',1000); 
    function jam() {    
        var tanggal = new Date();   
        setTimeout('jam()',1000);   
		document.getElementById('output').innerHTML = tanggal.getHours()+':'+tanggal.getMinutes()+':'+tanggal.getSeconds(); 
		}
   </script>
</head>
<body onload="jam()">
<center>
<?php echo date('l, j F Y'); ?>
</center>
<font size="5px" style="text-align: center;">
<div id="output"></div></font>
</body>
</html>
