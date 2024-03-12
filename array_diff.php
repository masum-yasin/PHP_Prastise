<?php 
$array1=array("OH","CA","HI","CT","CUMILLA","Noakhali");
$array2 =array("OH","CA","HI","NY","IA","Rangpur","Dhaka");
$array3=array("OH","CA","MO","FU","Faridpur","CUMILLA");
$array_diff=array_diff($array1,$array2,$array3);
echo "<pre>";
print_r($array_diff);

?>