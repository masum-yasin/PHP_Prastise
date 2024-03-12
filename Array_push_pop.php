<?php 
$cars = array("Volvo","BMW","Toyota",);
$morecars = array_push($cars,"Marcedes","audi");
echo "<pre>";
echo $cars;
echo "<hr>";
$cars = array("Volvo","BMW","Toyota",);
$morecars = array_pop($cars,"Marcedes","audi");
echo "<pre>";
echo $cars;

?>