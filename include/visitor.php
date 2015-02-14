<?php
$file='visitor.txt';

	if(file_exists($file)){
    	$file_open=fopen($file,'r');
    	$cek=trim(fgets($file_open,255));
    	$cek++;
    }
	else {
    	$cek=1;
    }
	
$file_open=fopen($file,'w');
fwrite($file_open, $cek);
fclose($file_open);

echo '<center>';
echo 'Total Hits : '.$cek;
echo '<center>';
?>