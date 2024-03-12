<?php 
$arr = "Hello World";
echo strip_tags("$arr <br>Banaldesh population Country</b>");
echo "<br>";
echo strip_tags("Hello Tasima <b><i>My loving person only you!</i></b>","<br>");
echo "<br>";
$arr  ="BangaldeshisiaBeautifulCountry";
echo "<pre>";
print_r(str_split($arr));
echo "<br>";
print_r(str_split($arr,4));
echo "<br>";
echo (strpos("I love in Bangladesh , Bangladesh is a beautiful Counry Barisal","Bangladesh"));
echo "<br>";
// $m = "xyz";
// $n = "y";
// $p = strpos($m,$n);
// if($p===false){
//     echo "The string $n was not found int the string $m";
// }
// else{
//     echo ("The string $n was found in the string $m");
// }
echo "<hr>";
$string = "abc";
$string2 = "w";
$pos = strpos($string,$string2);
if($pos!==false){
    echo ("The string $string2 matching of $string");
}
else{
    echo ("The string $string2 not matching of $string");
}
echo "<hr>";
echo (substr("Hello Bangladesh",8,-2));
?>