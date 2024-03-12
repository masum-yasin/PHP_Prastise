<?php 
$x ="Hello";
$y = &$x;
$y = "World";
echo $y;
echo "<br>";
echo $x;
echo "<br>";
$s = "Bangaldesh";
$z = &$s;
$z = "Pakistan";
echo $z;
echo "<br>";
echo $s;
echo "<br>";
$string = " HELLO IDB ";
$string2 =&$string;
$string2 ="GOODBYE";
echo $string2;
echo "<br>";
echo $string;


?>