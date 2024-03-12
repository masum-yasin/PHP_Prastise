<?php 
class EmployeeClass{
    private $name;
    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
}
$emp1= new EmployeeClass;
$emp1->setName("Khayrul Alam Rayan");
echo "<pre>";
var_dump($emp1);
echo "<hr>";
 $emp2= clone $emp1;
$emp2->setName("Kamrul Hasan Mizan");
var_dump($emp2);
echo "<hr>";
class person{
 protected $name;
    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
}
$obj1 = new person();
  $obj1->setName("Khayrul Alam Rayan");
// echo  $obj1->getName();
echo $obj1->getName();





   

?>