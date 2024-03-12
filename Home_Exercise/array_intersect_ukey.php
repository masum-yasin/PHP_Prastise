<?php
function myFunction($a,$b){
    if($a==$b){
        return 0;
    }
    else{
        ($a>$b)? 1:-1;
    }
}
echo "<pre>"; 
$arr = array("a"=>"apple","b"=>"Banana","g"=>"guava");
$arr1 = array("f"=>"red","d"=>"C","m"=>"Mango" ,"c"=>"Coconut");
$arr2 = array("j"=>"orange","c"=>"red","b"=>"banana");
$result = array_intersect_ukey($arr,$arr1,$arr2,"myFunction");
print_r($result);

?>