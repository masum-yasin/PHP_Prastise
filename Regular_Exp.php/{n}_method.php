<?php 
$string = "PHP125436";
 echo preg_match("/PHP[0-9]{7}/",$string,$result)?"Yes,there are among Decimal digit after PHP":"NO,There are three decimal digit after php";
 echo "<hr>";
 $string = "PHP125478521";
 echo preg_match("/PHP[0-9]{2,}/",$string,$result)?"yes,there are two or more number after php ":"No there are two or more digit after php";
 echo "<hr>";
 $string = "PHP1236547";
echo preg_match("/[0-9]{2,9}/",$string,$result)?"Yes, there there are numbers between two and five after PHP.":"No there are numbers between two and five after php"




?>