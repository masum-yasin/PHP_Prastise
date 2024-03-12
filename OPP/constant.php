<?php 
class MathClass{
    public $number=50;
    const NUM1 = 100;
    const NUM2=200;
}
$obj=new MathClass;
echo $obj->number;
echo "<br>";
echo MathClass::NUM1;
echo "<br>";
echo MathClass::NUM2;

?>