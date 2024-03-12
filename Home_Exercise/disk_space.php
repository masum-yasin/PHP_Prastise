<?php 
$ds_c= "C:/";
$store=disk_free_space($ds_c);
 echo $store/1024/1024/1024;
 echo "<br>";
 $drive ="F:";
 $result = disk_total_space($drive);
 echo $result;
 