<?php 
$a1=array("a"=>"red","b"=>"green","f"=>"blue" ,"b"=>"white","h"=>"black","d"=>"blue");
$a2=array("a"=>"red","b"=>"green");
$a3=array("e"=>"yellow","a"=>"red");
$result = array_diff_key($a1,$a2,$a3);
print_r($result);

?>