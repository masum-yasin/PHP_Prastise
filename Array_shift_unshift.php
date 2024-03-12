<?php 
$cars = array("Volvo","BMW","Toyota",);
$morecars = array_unshift($cars,"Marcedes","audi");
echo "<pre>";
echo $cars;
echo "<hr>";
$cars = array("Volvo","BMW","Toyota",);
$morecars = array_shift($cars,"Marcedes","audi");
echo "<pre>";
echo $cars;

?>