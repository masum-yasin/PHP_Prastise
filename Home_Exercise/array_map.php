<?php 

function mapArray($n){
    return($n * $n * $n );
}
$array =[1,2,3,4,5,6];
$arrayResult =array_map("mapArray", $array);
echo "<pre>";
print_r($arrayResult);
echo join($arrayResult)."<br>";
echo "<hr>";
function showResult($n,$m){
    return("The number $n is called of Country Name $m ");}
    $array1= array(1,3,4,5,6,7,8);
    $array2 = array("Bangladehs","Inadia","Pakistan","Maldiv","Nepal","Butan","USA");
    $result =array_map("showResult",$array1,$array2);
    print_r($result);
    echo "<hr>";
function show_result($x,$y){
        return("The number is $x is callled name of country $y");
}
$a  =array(1,2,3,4,5,6,7);
$b =array ("Bangladesh","Indai","Paksitan","Maldiv","Netherland","Nepal","USA");
$c=( array_map("show_result",$a,$b));
print_r($c);


?>
