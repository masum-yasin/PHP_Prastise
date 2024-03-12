<?php 
echo "<pre>";
$arr = array("a"=>"apple","b"=>"Banana","c"=>"Coconut","g"=>"guava");
$arr1 = array("a"=>"blue","b"=>"red","d"=>"c","m"=>"Mango" ,"c"=>"Coconut","g"=>"guava");
$arr2 = array("d"=>"orange","c"=>"red","a"=>"app","b"=>"banana","g"=>"guava");
$result = array_intersect_key($arr,$arr1,$arr2);
print_r($result);

?>