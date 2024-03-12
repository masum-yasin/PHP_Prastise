<?php 
echo "<pre>";
$arr =array("Bangladesh","paksitan","India","Nepal","Maldiv","China");
$result = array_pop($arr);
print_r($arr);
echo "<hr>";
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
echo "<hr>";
$arr =array("Bangladesh","paksitan","India","Nepal");
$store = array_unshift($arr,"Maldiv","China");
print_r($arr);
echo "<hr>";

$arr =array("Bangladesh","paksitan","India","Nepal");
$store = array_push($arr,"Malta","Italy","arab");
print_r($arr);
echo "<hr>";
$array =array("a"=>"Bangladesh","b"=>"Pakistan","c"=>"Netherland","d"=>"India");
$arr2 = array_splice($array,3);
print_r($array);
echo "<hr>";

$array =array("a"=>"Bangladesh","b"=>"Pakistan","c"=>"Netherland","d"=>"India");
$arr2 = array_splice($array,1,-2);
print_r($array);
echo "<hr>";
$array = array("Yellow","Green","Purple","Red","White",
"Balck");
// $fruit =array("apple","Mango","Orange");
$store = array_splice($array,2,3,true);
print_r($array);





?>