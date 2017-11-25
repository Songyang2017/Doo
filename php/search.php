<?php
$url=$_POST['searchUrl'];
$res = file_get_contents($url);
echo $res;
?>