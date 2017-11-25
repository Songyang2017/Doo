<?php 
	$url=$_POST['newsUrl'];
	$res=file_get_contents($url);
	echo $res;
 ?>