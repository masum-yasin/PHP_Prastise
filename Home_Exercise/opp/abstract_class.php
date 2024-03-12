<?php 
abstract class grandFather{
    abstract protected function getName($name);
   
  
   
}
class grandpa extends grandFather{
 public function getName($name)
    {
     return " Hi Md ".$name." How are you and going everyday ";   
    }
}
// $result = new grandFather();
$result = new grandpa();
echo $result->getName(" Khayrul Alam Rayan ");

?>