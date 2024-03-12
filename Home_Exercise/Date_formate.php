<?php 
$year = 2013;
if($year%4==0 && $year%100==0 && $year%400==00){
    echo"{$year}It's is a leap year";
}
elseif($year%4==0 && $year%100==0){
    echo "{$year} It's not a leap year";
}
elseif($year%4==0){
    echo "{$year} It's a leap year";
}
else{
    echo "{$year}It's not a leap year";
}
echo "<hr>";
$year = 2011;
if($year%4==0 && ($year%100!==0|| $year%400==0)){
    echo "{$year} It's a leap year";
}
else{
    echo"{$year}It's a not leap year";
}
echo "<hr>";
$year = 2015;
if($year%4==0 && ($year%100 !==0 ||$year%400==0)){
    echo "{$year}It's leap year";
}
else{
    echo "{$year}It's a not leap year";
}

?>