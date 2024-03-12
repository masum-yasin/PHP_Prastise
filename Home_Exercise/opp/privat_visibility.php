<?php 
// class country{
//   public $country ="Bangaldesh,Paksitan,maldiv,Nepal,India";
//   function getcountry(){
//     return $this->country;
//   } 
//   private $capital ="kulkata,Kathmundo,paris,turkey," ;
//   function addcapital(){
//     return $this->capital;
//   }
// }
// class anotherCountry extends country{
//     function getcountry(){
//         return $this->country;
//       } 
//       function addcapital(){
//         return $this->capital;
//       }
// }
// $newCountry=new country();
// echo $newCountry->getcountry();
// echo "<br>";
// echo $newCountry->addcapital();
// $anotherCountry=new anotherCountry();
// echo "<br>";
// echo $anotherCountry->getcountry();

//   protected $country= "Bangladesh";
//   public $address= "Maymansing";
//   public function getName(){
//     return " MY First Name is".$this->FirstName." And My second Name ".$this->secondName;
//   } 

use grandFather as GlobalGrandFather;

  class grandFather {
  private $FirstName = "Khayrul Alam";
  private $address  ="Khulna";
  protected $secondName = "Rayan";
  public function getName(){
    return "My name is".$this->FirstName.'<br>';
  }

}
class personInfo extends grandFather{
  public $name = "Mizanur Rahman";
  public $age =25;
 public function superperson(){
    return"My name is".$this->name."And Second name".$this->secondName;
  }
}
$obj1 = new grandFather();
echo $obj1->getName();
$obj2 = new personInfo();
echo $obj2->superperson();
$outsidecallName = new personInfo();
echo $outsidecallName->name;


?>