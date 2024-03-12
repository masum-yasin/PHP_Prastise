 <?php
//  class newWindow{
//     public $var ="simple a class";
// function showDisplay(){
//     echo $this->var;
// }
//  }
//  $obj=new newWindow();
//  $obj  ->showDisplay();

 
?> 
<?php 
// class newClass{
//     public $let="Bangladesh is a Beautiful Country";
//     public const a= "American";
//     public static function sayHello (){
// echo "Hello World";
//     }
// }
// newClass::sayHello();
// echo "<br>";
// echo newClass::a;
?>
<?php 
class openClass{
     static public $var ="Bangladesh is a beautiful Country";
    const a = "Pakistan";
    public function showDisplay(){
        echo self::$var;
        echo "<br>";
        echo self::a;
        echo "<br>";
    }
}
$obj=new openClass;
$obj->showDisplay();
class newClass{
    public $let ="Karim is better than Rahim";
     public $const  ="Mango,Orange, Banana";
    public function showResult(){
        echo $this->let;
        echo "<br>";
        echo $this->const;
        
    }
}
$store=new newClass;
$store->showResult();
echo "<br>";
?> 
<?php 
class person{
    private $name="";
    private $age="";
    public function setName($name=""){
        $this->name=$name;
    }
    public function setAge($age="30"){
        $this->age=$age;
    }
    public function getInfo(){
        echo "Hello, My name is" . $this->name. " and my age is". $this->age. " years ";
    }
    
}
<<<<<<< HEAD
echo "<hr>";
?>
<?php 

// class car{
//     public $model;
//     public function __construct($model){
//             $this->model=$model;
//     }
//     public function getSuperCar(){
//         echo  " This is most famous and Expensive car ". $this->model ." in the world ";
//     }
// }
// $modelCar=new car("VOLVO");
// $modelCar->getSuperCar();
// echo "<hr>";
?>
<?php 
class car{
    public function __destruct()
    {
       echo "Bangalesh Nationalparty is BNP most populer ,";
    }
    public function sayHello(){
        echo "Masum is weak student in IDB Schoolership"."<br>";
    }
    private $pattern;
    public function __construct($pattern)
    {
    $this->pattern=$pattern;
    }
    public function getLogo(){
        echo "Motul Bike cicle is most favorite all of young".$this->pattern."This is logo is world wide famous";
    }
}
$modelCar=new car("MOTOAL");
echo "<br>";
$modelCar->getLogo();
echo "<br>";
$modelCar->sayHello();
echo "<br>";
class inform{
    public $name;
   public function __construct(){
    echo "Construct is a most powerful Buildin function";
}


//    public function __destruct()
//    {
//     echo "Dhaka is a capital city in Bangladesh";
//    }
    
   
}
$person1=new inform("Masum");
//  $person1->person();

?>
=======
$person2=new person();
$person2->setName("Rayan Sarkar");
$person2->setAge(25);
$person2->getInfo();
echo "<hr>";
class human{
    private $name="";
    private $age="";
    public function setName($name=""){
        $this->name=$name;
        return $this;
    }
    public function setAge($age=""){
            $this->age=$age;
            return $this;
    }
    public function getInfo(){
        echo" This is ". $this->name ." Hossain and I born in Comilla but groun up in Dhaka and I am age ". $this->age. " years ";
    }


}
$informetion=new human();
$informetion->setName("Masum")->setAge(30)->getInfo();
echo "<br>";
class checkdata{
    public function __construct(){
        echo"Hello world PHP Techonology"."<br>";
    }
    public function sayHello(){
        echo "Bangladesh is a beautiful Country";
    }
}
$superObj= new checkdata;
$superObj->sayHello();
echo "<hr>";




class information{
    public $name;
     function __construct($val)
    {$this->name=$val;
     }
      function checkData(){
        echo " This name is ". $this->name;
     }
}
$obj1=new information("MASUM");
$obj1->checkData();
echo "<hr>";
class ourClass{
   final function doSomething(){
        echo "We are not keep our work for tomorrow";
    }
}
class myClass{
    function doSomething(){
        echo "We are not keep our work for tomorrow";
    }
    
}
$obj1=new myClass();
$obj1->doSomething();
echo "<br>";
class shap{

}
class shaps{
    private $shaps;
    public function __construct(){
        $this->shaps=array();
    }
    public function addShap( shap $shap){
        array_push($this->shaps,$shap);
    }
    function totalShpas(){
           return count($this->shaps);
    }
  }
class Rectangle extends shap{

}
class triangle extends shap{
    
}
$shapsCollection= new shaps();
$shapsCollection->addShap(new Rectangle());
$shapsCollection->addShap(new triangle());
echo $shapsCollection->totalShpas();

echo "<hr>";
class ship{

}
class ships{
private $ships;
public function __construct(){
    $this->ships=array();
}
public function addShips($ship){
    array_push($this->ships,$ship);
}
    public function totalShips(){
        return count($this->ships);
    }

}
class showresult  extends ship{

}
class normal extends ship{

}
$obj1 =new ships();
$obj1->addShips(new  showresult());
$obj1->addShips(new normal());
echo $obj1->totalShips();
echo "<hr>";
class grandFather{
    public $name="Masud Alam";
    public function getName(){
       return $this->name;
    }

}
class daddy extends grandFather{
    public function displayGrandFaName(){
       return $this->name;
    }
}
$grandFa=new grandFather;
echo $grandFa->getName();
echo "<br>";
$daddy=new daddy;
echo $daddy->displayGrandFaName();
$outside =new grandFather();
$outside->name;
echo "<hr>";
class coutnryFruits{
    public $fruit ="Mango, Apple";
    public function getName(){
        return $this->fruit;
    }}
    class districtFruits extends coutnryFruits{
        public function anotherFruits(){
            return $this->fruit;
        }
    }
    $newFruits=new coutnryFruits();
    echo $newFruits->getName();
    $districtFruit=new districtFruits();
    echo "<br>";
    echo $districtFruit->anotherFruits();
    $outsidefruits=new coutnryFruits();
    echo "<br>";
   echo $outsidefruits->fruit;

   


    



?> 
>>>>>>> e6f77c1ff7ab92564aa4a2ff85c97543b2a3d776
