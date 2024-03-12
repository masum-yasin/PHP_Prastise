<?php

abstract class person{
    protected $Fruits;
    protected abstract function getFruitName($Fruits);
}
class addPerson extends Person{
    public function getFruitName($Fruits){
        return "Bangladesh fruits Name".$Fruits."!";
        
    }
}
$obj=new addPerson();
echo $obj->getFruitName("Mango,Orange,Apple,Jackfruit,Banana");
echo "<hr>";
abstract class bioData{
    abstract function getName($name);
    abstract function getAge($age);
    abstract function getCountry($country);
  abstract function getDistrict($district);
}
class addBiodata extends bioData{
  public function getName($name,$prefix=" Mr. "){
    return "His Name is".$prefix.$name."! <br>";
  }
  public function getAge($age,$day=" 25 Days "){
    return "His age years ".$day.$age."!<br>";
  }
  public function getCountry($country,$P_station=" Chandina "){
    return " His Country Name is ". $P_station. $country ." ! <br> ";
  }
  public function getDistrict($district,$location=" Middhabari ")
  {
    return "His District Name is".$location.$district."!";
  }
}
$obj1=new addBiodata();
echo $obj1->getName("khayrul Alam Rayan");
echo $obj1->getAge(25);
echo $obj1->getCountry("Bangladesh");
echo $obj1->getDistrict("Maymansing");
?>