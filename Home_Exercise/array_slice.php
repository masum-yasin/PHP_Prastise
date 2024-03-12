<?php 
$arr = array("red","yellow","blue","White","purple","Black","green");
echo "<pre>";
print_r(array_slice($arr,3,3));
echo "<br>";
print_r(array_slice($arr ,4));
echo "<br>";
print_r(array_slice($arr,3,4));
echo "<br>";
print_r(array_slice($arr,2,5,true))
?>