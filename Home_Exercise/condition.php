<?php 
$n =13;
if($n%2==0){
    echo("It's a even Number $n");
}
else{
    echo("It's a odd Number $n");
    echo "<br>";
}
if($n<10 || $n>=10){
    echo("It's a greater than 13");
}
else{
    echo("It's a smallest than 13");
}
echo "<br>";
$m =12;
$n =13;
if($m==$n){
    echo("you are equal m and n");
    echo "<br>";
}
if($m!=$n){
    echo("you are incorrect");
}
else{
    echo("you are correct");
    echo "<br>";
}
?>
<?php 
echo ("<br>");
$alam = 200;
$rahim = 200;
if($alam==$rahim){
    echo("alam and rahim amount of money equal");
}
elseif($alam<$rahim){
    echo ("Rahim has more money than alam");
}
elseif($alam>=$rahim){
    echo("Alam has more and equal Money of rahim");
}
elseif($alam!=$rahim){
    echo("Alam has less Money or not equal than rahim");
}
else{
    echo("Alam has more money than rahim");
}
$food ="Apple";
$male = "Banana";
if($food==$male){
    echo("It's contains vitamin D");
}
elseif ($food>=$male){
    echo ("we know it's not contains vitamin D");
}

else{
    echo ("Does not vitamin");
}


?>