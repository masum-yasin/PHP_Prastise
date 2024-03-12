<?php 
$arr =array("a"=>"red","green","yellow","white","Black");
$arr2 = array("b"=>"red","green","purple");
$arr3 = array("c"=>"green","red","yellow","white");
$result = array_diff($arr,$arr2,$arr3);
echo "<pre>";
print_r($result);
echo "<pre>";
function myfunction($a,$b){
    if($a===$b){
        return 0;
    }
    else{
        return ($a>$b)? 1 : -1;
    }
}
$a =array("a"=>"red","green","yellow","white","Black");
$b = array("b"=>"red","green","purple");
$b = array("b"=>"green","red","yellow","white");
$result = array_udiff($a,$b,$b,"myfunction");
print_r($result);
echo "<hr>";
$arr = array("a"=>"Green","b"=>"blue","d"=>"orange","e"=>"purple","n"=>"Black","q"=>"orange" ,"z"=>"blue");
$arr2  =array("a"=>"green","b"=>"blue","g"=>"Blue","h"=>"orange","m"=>"Black");
$result =array_diff_assoc($arr,$arr2);
print_r($result);
?>