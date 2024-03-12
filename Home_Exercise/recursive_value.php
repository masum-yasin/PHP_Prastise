<?php 
function factorial($n){
    if($n<=1)return 1;
    {$n* factorial($n-1);}
}
echo factorial(5);

function myNumber($number){
    if($number<=10){
        echo $number."<br>";
        return myNumber($number+1);

    }
   
}

myNumber(1);
echo "<hr>";
function myDisply($n){
    if($n<20){
        echo $n."<br>";
        return myDisply($n+1);
    }
}
myDisply(1);

?>
