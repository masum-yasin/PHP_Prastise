<?php 
echo $msg = "I annoy people by cpitalizing e-mail text";
echo "<br>";
echo $lower= strtolower($msg);
echo "<br>";
 $ucfirst = ucfirst($lower);
 echo $ucfirst;
 
 echo "<br>";
 $upper = strtoupper($ucfirst);
 echo $upper;
 echo "<br>";

 echo $lcfirst = lcfirst($upper);
 echo "<br>";
 $lower = strtolower($lcfirst);
 echo ucwords($lower);


?>