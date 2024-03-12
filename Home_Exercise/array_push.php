<?php
echo "<pre>"; 
$array = array("Apple","Banana","Orange","Jackfruit","Mango");
array_push($array,"Guava","Lemon Orange","Coconut");
print_r($array);
echo "<hr>";
$arr = array("color"=>array("favorite"=>"red","purple"),5);
$arr2 = array("color"=>array("favorite"=>"green","yellow"),20);
print_r(array_merge_recursive($arr,$arr2));

?>