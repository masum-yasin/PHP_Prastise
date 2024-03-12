<?php 
function showResult($f,$g){
    if($f===$g){
        return 0;
    }
    else{
        return($f>$g)? 1:-1;
    }
}
echo "<pre>";
$a1=array("a"=>"red","b"=>"green","f"=>"blue" ,"b"=>"white","h"=>"black");
$a2=array("a"=>"red","b"=>"green","d"=>"blue");
$a3=array("e"=>"yellow","a"=>"red","d"=>"blue");
$result = array_diff_ukey($a1,$a2,$a3,"showResult");
print_r($result);
?>