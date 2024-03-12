<?php 
$arr = array("a"=>"Apple","b"=>"Banana","c"=>"Mango","jackfruit");
$arr2 = array("a"=>"Apple","b"=>"Banana","c"=>"coconut","guava");
echo "<pre>";
$result =array_intersect_assoc($arr,$arr2);
print_r($result);

?>