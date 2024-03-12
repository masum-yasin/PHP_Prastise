<?php 
$array = array("Dhaka","khulna","Maymansing","Faridapur","Barisal","Comilla",);
echo implode("|",$array);
echo "<br>";
$result = implode(",",$array);
echo strlen($result);

?>