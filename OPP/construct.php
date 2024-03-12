<?php 
class car{
    function __construct($name){
        echo " $name Car object is initiated";
        echo "<br>";
    }

    public function __destruct(){
        echo "Say bye bye";
    }
    
        
    
    function sayHello(){
        echo "Welcome to car class";
    }
}

$obj1=new car("Volvo");
// $obj1->sayHello()

?>