<?php 
echo "<pre>";
$array =array("Bangladesh","pakistan","India","Maldiv","Nepal");
$arr   = array("Dhaka","Kurache","Kolkata","Male","Khathmundo");
print_r(array_merge($array,$arr));
echo "<hr>";
$array  =array("a"=>"Apple","b"=>"Banana","m"=>"Mango","j"=>"jackfruit","g"=>"Guava");
$ar = array("a"=>"Comilla","f"=>"Faridpur","b"=>"Bangladesh","m"=>"Maymansing");
print_r(array_merge($array,$ar));


?>