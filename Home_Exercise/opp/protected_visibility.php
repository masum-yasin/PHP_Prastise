<?php 
// class person{
// protected $name="Khayrul Alam Rayan";
//     protected $age=25;
//     protected $country="Bangladesh";
//      function personInfo(){
//         return $this->name;}
//         function personInfo2(){
//             return $this->age;
//         }
//         function personInfo3(){
//             return $this->country;
//         }
//     }
//     class superPerson extends person{
//         function personInfo(){
//             return $this->name;}
//             function personInfo2(){
//                 return $this->age;
//             }
//             function personInfo3(){
//                 return $this->country;
//             }
//             protected $district="Maymansing";

//             function addInfo(){
//                return $this->district;
//             }
//         }
// $newPerson= new person();
// echo $newPerson->personInfo();
// echo "<br>";
// echo $newPerson->personInfo2();
// echo "<br>";
// echo $newPerson->personInfo3();
// $superPerson=new superPerson();
// echo "<br>";
// echo $superPerson->personInfo();
// echo "<br>";

// echo $superPerson->personInfo2();
// echo "<br>";

// echo $superPerson->personInfo3();
// echo "<br>";

// echo $superPerson->addInfo();
// $outputofpersonvaluecall=new person();
// $$outputofpersonvaluecallname->name;
echo "<hr>";
class grandFather{
protected $name = "Khayrul Alam Rayan";
protected $age = 26 ;
protected $country = "Bangladesh";
 function grandpa(){
    return " My name is ".$this->name."I am ".$this->age."years old"." My Country Name is".$this->country;
}
}
class Daddy extends grandFather{
    public $name = "Nadia Sultana";
    public $age = 30;
     function superFather(){
        return " My name is ".$this->name." I am ".$this->age." MY Country Name si ".$this->country;
    }
}
$obj1 = new grandFather();
echo $obj1->grandpa();
echo "<hr>";
$obj2 = new Daddy();
echo $obj2->superFather();
echo "<hr>";
$classoutcallgrandpasName = new Daddy();
echo $classoutcallgrandpasName->name;




?>