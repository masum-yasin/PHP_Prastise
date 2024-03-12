<?php 
$numbers=array(25,20,2,3,10,70,80,250);
echo "<pre>";
print_r($numbers);
echo "<br>";
rsort($numbers);
print_r($numbers);
echo "<hr>";
$fruits=array("Apple"=>215, "Mango"=>50,"Orange"=>30,"Jackfruit"=>50);
print_r($fruits);
echo "<br>";
rsort($fruits);
print_r($fruits);

?>