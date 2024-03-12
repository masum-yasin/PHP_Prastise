<?php 
echo "<pre>";
$arr = array("Volvo","Toyota","BMW");
sort($arr);
foreach($arr as $x=>$y){
    echo "cars [".$x." ]"."=".$y;
    echo "<br>";
}
$arr = array(8,10,15,20,30,40,50);
sort($arr);
foreach($arr as $key=>$val)
{
    echo "Number[".$key."]"."="."$val";
    echo "<br>";
}
echo "<hr>";
$arr = array("a"=>"Mango","b"=>"Apple","c"=>"Banana","d"=>"Jackfruit");
rsort($arr);
$length = count($arr);
for($x=0; $x<$length; $x++){
    echo $arr[$x];
    echo "<br>";
}
echo "<hr>";
$fruits = array("Volvo","BMW","Toyota","Hanif");
sort($fruits);
$clength= count($fruits);
for($i = 0 ; $i<$clength; $i++){
    echo $fruits[$i];
    echo "<br>";
}


?>