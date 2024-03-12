<?php 
$arr = array("Mango","Apple","Pipe Apple","jackfruit","Orange");
print_r(array_slice($arr,2,2));
echo "<br>";
print_r(array_slice($arr,1,3));
echo "<br>";
print_r(array_slice($arr,0,3,true));
$arr2 = array("a"=>"VOLVO","b"=>"BMW","c"=>"TOYOTA");
print_r(array_slice($arr,2,2,true));

?>