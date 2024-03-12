<?php 
$array1 = array("a"=>"Apple","Orange","Mango",);
$array2 = array("b"=>"Jackfriut","Mango","Apple");
$result = array_intersect($array1,$array2);
echo "<pre>";
print_r($result);
?>