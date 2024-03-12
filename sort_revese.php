<?php 
$numbers=[2,40,10,200,300,400,80,90,100,600,800,420];
sort($numbers);         //main array ke change kore 
echo "<pre>";
print_r($numbers);



$result=array_reverse($numbers); // variable ke alada variable ...a niye reverse krte hoy.
echo "<hr>";
print_r($result);
$district=["Comilla","Dhaka","Maymansing","Faridpur","shylet","Barisal"];
sort($district);
echo "<pre>";
print_r($district);
$country=array("a"=>"India","b"=>"Afagansitan","c"=>"Bangladesh");
sort($country);
echo "<pre>";
print_r($country);
?>