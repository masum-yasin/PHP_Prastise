<?php 
$string = "abcdefghijkqlmanliskruvwesxyz 01254789632";
$pattern  ="/xyz/i";
echo preg_match($pattern,$string,$value);
$pattern1 ="#xyz#";
echo "<br>";
echo preg_match($pattern1,$string,$value);
echo "<br>";

$pattern2 ="+jkl+";
echo preg_match($pattern2,$string,$value);
echo "<br>";
$pattern3 = "%man%";
echo preg_match($pattern3,$string,$value);
echo "<br>";
$pattern4 = "~632~";
echo preg_match($pattern4,$string,$value);
echo "<br>";
$pattern5 = "(abc)";
echo preg_match($pattern5,$string,$value);
echo "<br>";
$pattern6 = "{wow}";
echo preg_match($pattern6,$string,$value);
$pattern7 = "[254]";
echo "<br>";

echo preg_match($pattern7,$string,$value);
echo "<hr>";
$string = "abc12547xyz";
if(preg_match("/^abc/",$string)){
    echo "The string beings with abc";
}
else{
    echo "no found match";
}
echo "<hr>";
$string = "abc12547xyz";
if(preg_match("/xyz\$/",$string)){
    echo "The string beings with xyz";
}
else{
    echo "no found match";
}
echo "<hr>";
$array =("The cat has no found.cat eat fish");
 preg_match_all("/c.t/", $array,$matching);
print_r($matching);
echo "<br>";
$string ="This is a big bog bug bag String";
 preg_match_all('/b[aioue]g/',$string,$result);
print_r($result);
echo "<hr>";
$string = 'This is a Hello World script';
preg_match('/(je|Wo)rld/',$string,$matching);
print_r($matching);
echo "<hr>";

$string = "abcdefghijkqlmanliskruvwesxyz 01254789632";
preg_match_all('/[^b]/',$string,$result);
print_r($result);
echo "<hr>";
$string = "abcdefghijkqlmanliskruvwesxyz 01254789632";
preg_match_all('/[^a-z]/',$string,$result);
print_r($result);
























?>