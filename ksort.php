<?php 
echo "<pre>";
$fruits=array("Apple"=>215, "Mango"=>50,"Orange"=>30,"Jackfruit"=>50,"Amul"=>50);
print_r($fruits);
echo "<br>";
ksort($fruits);
print_r($fruits);
?>