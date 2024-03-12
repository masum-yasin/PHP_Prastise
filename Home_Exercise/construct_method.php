<?php 
class oop{
    public function __construct()

    {
      echo "Bangladesh is a Beautiful Country";  
    }
    public function sayHello(){
        echo "Hello, Welcome to PHP Server Language";
    }
}
$obj =new oop();
echo "<br>";
$obj->sayHello();
echo "<hr>";
class Car{
    private $modle;
public function __construct($modify)
{
  echo  $this->modle=$modify; 
}
public function getCar(){
    return "The car Name is".$this->modle;
}
}
$car1 = new Car("Mercedes");
echo "<br>";
echo $car1->getCar()

?>