<?php 
$numbers=array(25,20,2,3,10,70,80,250);
echo "<pre>";
print_r($numbers);
echo "<br>";
asort($numbers);
print_r($numbers);
echo "<hr>";
$fruits=array("Apple"=>215, "Mango"=>50,"Orange"=>30,"Jackfruit"=>50);
print_r($fruits);
echo "<br>";
asort($fruits);
print_r($fruits);
echo "<hr>";
$array1 =[2,4,6,10,15,20,25,30];
$array2 = [1,0,4,5,10,9,0,4,8];
array_multisort($array1,$array2);
print_r($array1);
echo "<br>";
print_r($array2);

?>