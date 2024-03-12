<?php 
class Fruit{
public $name;//protected,private
public $color;
function set_name($x){
$this->name=$x;
}
public function get_name(){
    return $this->name;
}
}
//End of class
//object of class
$fr1=new Fruit;
$fr1->color ="Red";
$fr1 ->set_name("Mango");
echo $fr1->get_name();
echo"<br>";
var_dump($fr1);
echo "<br>";
if($fr1 instanceof Fruit){
    echo "yes";
}else {
    echo "NO";
}
echo "<hr>";
