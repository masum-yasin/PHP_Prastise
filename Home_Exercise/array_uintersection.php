<?php 
$array1 = array("a"=>"Apple","Orange","Mango",);
$array2 = array("b"=>"Jackfriut","Mango","apple");
$result = array_uintersect($array1,$array2,"strcasecmp");
echo "<pre>";
print_r($result);
echo "<br>";

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
 $result = array_uintersect($array1, $array2, "strcasecmp");
print_r($result);

?>