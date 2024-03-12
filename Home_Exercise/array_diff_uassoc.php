<?php
function myfunction($a,$b){
    if($a===$b){
        return 0;
    }
    else{
        return($b>$a)? 1:-1;
    }
}
echo "<pre>"; 
$a1=array("a"=>"red","b"=>"green","f"=>"blue" ,"b"=>"white","h"=>"black");
$a2=array("a"=>"red","b"=>"green","d"=>"blue");
$a3=array("e"=>"yellow","a"=>"red","d"=>"blue");
$result =(array_diff_uassoc($a1,$a2,$a3,"myfunction"));
print_r($result);




?>