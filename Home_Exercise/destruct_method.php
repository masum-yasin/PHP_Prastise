<?php 
class  person{
    public function __destruct()
     {
      echo " <br>Pakistan is a part Of Bangladesh";  
    }
    public function __construct()
    {
    echo "Nadia Lookafter of Salma<br>";    
    }
    public function sayHello(){
        echo "Hello, PHP Server Language Spriting";
    }
    
}
$obj1 = new person();
$obj1->sayHello();
echo "<br>";
class personInformation{
 private $name;
 private $age;
 private $email;
 public function __construct($name,$age,$email)
 {
    $this->name=$name;
  $this->age=$age;
    $this->email=$email;
 }
 function myFunction(){
    return " My name is: ".$this->name." <br> ". " He is ".$this->age." years old "." <br> "." He is Email: ".$this->email."<br>";
   
 }
 public function __destruct()
 {
  echo  " My name is ".$this->name." <br> "." He is ".$this->age." years Old "."<br>"." His Email is : ".$this->email;
 }
}
 $peron =new personInformation("Khayrul Alam Rayan",25,"Rayan@gmail.com");

 echo $peron->myFunction();

?>