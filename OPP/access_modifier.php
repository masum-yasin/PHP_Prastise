<?php 
class parentClass {
public $name ="Masum "."<br>";
public function getName(){
    echo $this->name;
}
}
class childClass  extends parentClass{
public function getName(){
    echo $this->name="Mahdiur";
}
}
// object careat
$obj1 =new parentClass;
$obj1->getName();
$obj2=new childClass;
$obj2->getName()

?>