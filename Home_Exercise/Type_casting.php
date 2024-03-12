<?php 
$number = 45.33;
$float = (double)$number;
echo $float;
echo "<br>";
$string ="Today is Temparature is High";
$store =(Integer)$string;
echo $store;
echo "<br>";
$num =250;
$num2 =(string)$num;
echo $num;
echo "<br>";
$score = 36.63;
$scoreboard = (int)$score;
var_dump($scoreboard);
echo "<br";
$score = 25.25;
$result = (float)$score;
var_dump($result);
echo "<br>";
echo "<pre>";
$score = 15478;
$scoreboard = (array)$score;
var_dump($scoreboard);
echo "<br>";
$string =["Masum","Rayan","Karim","Habil","Karim"];
$string2 = (array)$string;
var_dump($string2);
echo "<br>";
$model = "Toyota";
$obj = (object)$model;
echo $obj->scalar;


?>