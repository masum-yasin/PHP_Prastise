<?php 
echo "<pre>";
$fruits=array("Apple"=>215, "Mango"=>50,"Orange"=>30,"Jackfruit"=>50);
print_r($fruits);
echo "<br>";
$picked=array_rand($fruits);
echo "<br>";
echo "<pre>";
print_r($picked);

?>