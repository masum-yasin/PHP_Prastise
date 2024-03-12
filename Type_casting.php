<h4>Type casting in PHP</h4>

<?php 
$number=(double) 150; 
var_dump($number);
echo "<br>";
$number = 150;

var_dump($number);
echo "<br>";
$txt = "Today is Monday";
$txt = (integer)$txt;
var_dump($txt);
echo "<br>";
$x = 75.50;
$y = (integer)$x;
var_dump($y);
echo "<br>";
$score = 256;
$score2 =(array)$score;
echo "<pre>";
var_dump($score2);

echo "<br>";
print_r($score2);



?>