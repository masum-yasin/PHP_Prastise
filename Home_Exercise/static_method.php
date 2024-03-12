<?php

use childClass as GlobalChildClass;
use person as GlobalPerson;

class staticText{
    static $name;
    static function person($x){
        echo "This name is $x";
    }
}
echo staticText::$name="khayrul Alam Rayan";
 staticText::person("Abdul Al Mobin");
echo "<br>";
class person{
   static $name;
   static function age($x){
    echo"His  $x Year old ";
   }
   static $phone="";
   static function fName($y){
    echo"His Father Name is $y";
   }
 static $mName="";

}
echo person::$name="My name is Mashum  Hossin";
echo "<br>";
person::age(25);
echo "<br>";
echo person::$phone="Mobile Number 0192079545";
echo "<br>";

person::fName("MD shah-Alam ");
echo "<br>";

echo person::$mName="Mazeda Begum";
echo "<hr>";
class testNumber{
    static $count=0;
    static function addcount(){
        echo "Numeric Number increase";
        echo self::$count ++."<br>";
    }
}
testNumber::addcount();
testNumber::addcount();
testNumber::addcount();
echo "<hr>";
class info{
    static $name="khayrul Alam Rayan";
    static function information(){
        echo "This is my name is";
        echo self::$name."<br>";
    }
}
info::information();
info::information();
info::information();
info::information();
echo "<hr>";
class course{
    protected static $courseName="professional PHP";
    static function getNameCourse(){
        return static::$courseName;
    }
}
class myCourse extends course{
    static $courseName="leravel is frame work php";

}
echo course::getNameCourse();
echo "<br>";
echo myCourse::getNameCourse();
echo "<br>";
echo myCourse::getNameCourse();
echo "<hr>";
class mylaibary{
    protected static $book="English for to day class 8";static function myBook(){
         echo "Basic of  ";
        echo static::$book;
    }


}
class laibary extends mylaibary{
    protected static $book="Bangla is a motherland language";
}
mylaibary::myBook();
echo "<br>";
laibary::myBook();
echo "<br>";
laibary::myBook();
echo "<hr>";
abstract class abstractClass{
   public  abstract function getName($name);
}
class childClass extends abstractClass{
    function getName($name){
    return " Hi ".$name."!";
    }
}
$obj =new GlobalChildClass();
echo $obj->getName(" khayrul Alam Rayan ");
echo "<br>"; 



?>
