<?php 
ini_set('date.timezone','Asia/Dhaka');
$file = "upload/PHP.txt";
$atime= fileatime($file);
$ctime= fileatime($file);
$mtime= fileatime($file);
echo "Assces time:".date("h:i:s",$atime)."<br>";// file access time 
 echo "Changed time".date("h:i:s",$ctime)."<br>";//mode changed time/create time
 echo "Modified time".date("h:i:s",$mtime)."<br>";//file modified time
?>