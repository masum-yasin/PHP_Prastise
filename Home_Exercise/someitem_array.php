<?php 
//Numeric Indexed array
$nArray=array("masum","Rayan","kabir","Haydar","jabbar");
echo "<pre>";
echo var_dump($nArray);
echo "<hr>";
//Associative array
$assoArray=array("a"=>"Mango","b"=>"Orange","c"=>"Apple");
echo "<pe>";
echo var_dump($assoArray);
echo "<hr>";
//multi Dimensional Array
$multiArray=array(
    array("Volvo",5,4,5),
    array("BMW",4,6,4,),
    array("Mercedesh",10,20,30)
    
);
echo "<pre>";
echo var_dump($multiArray);

?>