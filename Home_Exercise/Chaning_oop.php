<?php

use person as GlobalPerson;

class person{
    private $name;
    private $age = "";
 public function setName(){
   return $this->name;
 }
 public function setAge($age="20"){
    $this->age=$age;
 }
 public function getinfo(){
    echo "My name is".$this->name."And my Age is".$this->age."years Old";
 }
}
$obj =new person();
$obj->setName("khayrul Alam Rayan");
$obj->setAge("25");
$obj->getinfo();
echo "<hr>";
class information{
   public $name ="";
   public $Age ="";
   public function setName($name=""){
      $this->name = $name;
      return $this;
   }
   public function setAge($Age="20"){
      $this->Age=$Age;
      return $this;
   }
   public function getInfo(){
      echo "  Hello,My name is ".$this->name." And age ".$this->Age." years old ";
   }
}
$person = new information();
$person->setName("Khayrul Alam Rayan")->setAge('25')->getInfo();
?>