<h1>print out of 1 to 5 recursive</h1>
<?php 
function numberDisply($number){
    if($number<=5){
        echo $number."<br>";
        return numberDisply($number+1);
    }
   
}
//calling function
numberDisply(1);
function factorial($n){
    if($n<=1) return 1;
    {return $n* factorial($n-1);

    }
}
factorial(5);
?>