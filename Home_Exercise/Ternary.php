<?php 
$n =10;
$result =($n%3==0)? "You are select":(($n%2==0)? "You are not bad":"You are bad");
echo $result;
echo "<br>";
$f =($n%2==3)? "A":(($n==10)?"B":"C");
echo $f;

?>