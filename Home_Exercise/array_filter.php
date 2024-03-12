<?php 
function odd($var){
    return $var % 2==1;
}
function even($var){
    return $var % 2==0;
}
$array=range(1,20);
echo "<pre>";
echo " odd ";
print_r(array_filter($array, "odd"));
echo "<hr>";
echo "even";
print_r(array_filter($array,"even"));
echo "<hr>";
function text_odd($var){
    return($var & 1);
}
$array =array(1,2,3,4,5,7,11,13,15,16,17,19,21);
echo "odd";
print_r(array_filter($array,"odd"));
echo"<hr>";
$ar1=array("a"=>1,"b">3,"c"=>4,"d"=>5,"e"=>7,"f"=>12);
$ar2=array(10,11,15,14,17,20,21,23,24,25,27,40,41,43);
echo "odd";
print_r(array_filter($ar1,"odd"));
echo "even";
print_r(array_filter($ar2,"even"));
echo "<hr>";
$centry= ["0"=>"foo","1"=>false,"2"=>-1,"3"=>null,"4"=>"","5"=>"0"];
print_r(array_filter($centry));
echo "<hr>";
function arrayByKey($M){
    return($M=="o"|| $M=="m");
}
function arrayByBoth($B){
    return($B=="b"||$B="o");
}
$array=array("a"=>"apple","b"=>"Banana","o"=>"Orange","m"=>"Mango");
echo "<pre>";
echo "filterBykey";
print_r(array_filter($array,"arrayByKey",ARRAY_FILTER_USE_KEY));
echo "<br>";
echo "filteringByboth";
print_r(array_filter($array,"arrayByBoth",ARRAY_FILTER_USE_BOTH))

?>