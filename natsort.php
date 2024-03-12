<?php 
$phptos=["photo1.jpg","photo2.jpg","photo10.jpg","photo22.jpg","photo23.jpg","photo100.jpg"];
sort($phptos);
echo "<pre>";
print_r($phptos);
echo "<br>";
natsort($phptos);
print_r($phptos);
?>