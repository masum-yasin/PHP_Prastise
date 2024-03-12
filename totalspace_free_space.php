<?php 
$dir = "e:/";
$bytes = disk_total_space($dir);
$gb= $bytes/1024/1024/1024;

$gb = round($gb,2);
echo "Total Space :".$gb."Giyabytes";
?>