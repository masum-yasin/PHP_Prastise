<?php
$x = ["Masum","Mamun","Rayan"];
echo is_array($x);
echo "<br>";
$y = 45.10;
echo is_float($y);
echo "<br>";
$z = 60.40;
echo is_double($z);
echo "<br>";
$a = 40;
if(is_numeric($a)){
    echo "yes, this is a numeric value";
}
echo "<br>";
$string = "450";
echo is_string($string);
?>