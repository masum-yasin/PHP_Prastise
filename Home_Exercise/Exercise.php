<?php 
$str = "Bangladesh";
echo "I love my country " .$str. "!";
echo "<br>";
$str ="HI";  
$str1 = &$str;
$str1  ="GO There";
$str = "do this work";
$str2 = $str;
$str2 = "Earn of money";
echo $str;
echo "<br>";
echo $str2;
?>
<?php 
$var ="Bangladesh is beautiful";
store($var);
function store(&$greetin){
    $greetin="Hanif go there";
}

function foo(&$var)
{
    $var++;
}
 
$a=5;
foo($a);
echo  $a; // $a is 6 here
echo "<br>";
$sum =8;
store2($sum);
function store2(&$sum2){
    $sum2++;

};
echo $sum;
echo "<br>";
$int = 10;
goodbye($int);
function goodbye(&$result){
    $result++;
}
echo $int;
echo "<br>";
$sum =15;
function &text(){
    global$sum;
    return$sum;
}
$sum2 = &text();
$sum2--;
echo "$sum<br>";

echo $sum2;
echo "<br>";
$a=10;
$b=10;
function textglobal(){
    global $a,$b;
    echo $a+$b;
}
textglobal();
echo "<br>";
$x=20;
$y= 20;
function testtGlobal(){
    echo$GLOBALS['x']+$GLOBALS['y'];

}
testtGlobal();
echo "<br>";
function testGlobal(){
global $x;
$x=3+7;
}
testGlobal();
echo$x;
echo "<br>";

function myFunction(){
    global $c,$d;
    $c = 60;
    $d=60;

}
myFunction();
echo $c+$d;
?>





