<?php
$url=$_POST['dayUrl'];
$res = file_get_contents($url);
echo $res;
?>