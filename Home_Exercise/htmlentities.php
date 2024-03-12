<?php 
$arr = 'A fox "over" the lazy dog<b>bold</b>';
echo htmlentities($arr,);
// echo "<br>";
// echo htmlentities($arr,ENT_QUOTES);
$arr = "\x8F!!!";
// echo htmlentities($arr,ENT_QUOTES,"UTF-8");
$arr = "\x8F!!!";
echo htmlentities($arr,ENT_QUOTES|ENT_IGNORE,"UTF-8");
echo "<\n>";
$entitie = 'Bangaldesh is a "Beautiful" <country>';
echo htmlentities($entitie);
?>