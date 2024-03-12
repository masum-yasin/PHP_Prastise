<?php 
$x = 70;
echo is_Integer($x);
echo "<br>";
$x = 70.50;
echo is_numeric($x);
$x =75.5;
echo "<br>";
if(is_numeric($x)){
    echo "yes, This is a numeric Value";
}
echo "<br>";
$y = false;
echo is_bool($y);


?>