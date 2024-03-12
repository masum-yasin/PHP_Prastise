<?php


class Base {
	
	
	 function printdata() {
		echo " Base class final printdata function";
	}
	
	
	function nonfinal() {
		echo "\n This is nonfinal function of base class";
	}
}

class Derived extends Base {
	function printdata(){
        echo "derived class final prindata function<br>";
    }
    
        
    

	function nonfinal() {
		echo "\n Derived class non final function";
	}
	
	
}

$obj = new Derived;
$obj->printdata();
$obj->nonfinal();
?>
