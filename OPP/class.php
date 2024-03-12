<?php 
class SimpleClass {
    public $a ="Masum";
    public const AGE = 20;
    public static $address = "Mirpur";

    public function displayVar (){
        echo $this->a."<br>";
        
    }
    public static function sayHello(){
        echo '('.self::AGE.')'.",Welcome";
    }
}
$obj1 =new simpleClass;
$obj1 ->displayVar();
$obj1->a="Molla";
$obj1->displayVar();
echo SimpleClass::AGE; 
echo "<br>"; 
echo SimpleClass::$address;      //scope resolution operator//kono const property ...k access kora ae ta static...k er khettre..o ae method use kora jye.
echo "<hr>";
class checkData{
    public $var = "Bangladesh cricket team is most powerful Cricket Team any other country";
    public function sayHello(){
        echo $this->var;
    }
}
$obj=new checkData;
$obj->sayHello();
?>