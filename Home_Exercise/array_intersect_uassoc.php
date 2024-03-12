<?php 
$arr = array("a"=>"Apple","b"=>"Banana","c"=>"Mango","jackfruit","d"=>"orange");
$arr2 = array("a"=>"Apple","b"=>"Banana","c"=>"coconut","d"=>"orange");
$arr3 = array("c"=>"coconut","guava","d"=>"orange","a"=>"Apple");
echo "<pre>";
$result =array_intersect_uassoc($arr,$arr2,$arr3,"strcasecmp");
print_r($result);

?>