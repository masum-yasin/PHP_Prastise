<?php 
$x = "Bangladesh";
$y =&$x;
$y = "Pakistan";
echo $y;
echo "<br>";
echo $x;
echo "<br>";
$string  ="HELLO";
$string2 = &$string;
$string2 = "Maldiv";

echo $string2;
echo $string;
echo "<br>";
$val = "Bangladesh";
$val1 =&$val;
$val1 = "London";
echo $val1;

echo $val;
?>