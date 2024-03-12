<?php 
$dir = "c:/";
$bytes = disk_free_space($dir);
echo $bytes/1024/1024/1024;

?>