<?php 
	$url=$_GET['newsUrl'];
	$res=file_get_contents($url);
	echo $res;
 ?>