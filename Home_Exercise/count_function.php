<?php 
$student=[
    ["a"=>"anwer","age"=>20],
    ["b"=>"kamrul","age"=>30],
    ["c"=>"Rayan","age"=>40],
];
echo count($student);
echo "<hr>";
$student=[
    ["a"=>"anwer","age"=>20],
    ["b"=>"kamrul","age"=>30],
    ["c"=>"Rayan","age"=>40],
];
echo count($student,1);
echo "<br>";
echo count($student,true);
echo "<br>";
echo count($student,COUNT_RECURSIVE);
echo "<hr>";
$person=array("Name"=>"Khayrul Alam Rayan","Age"=>28,"Address"=>"Dhaka","Phone"=>"0192078521");
echo "<pre>";
print_r(array_keys($person));
echo "<br>";
print_r(array_values($person));
echo "<hr>";
$person=array("Name"=>"Khayrul Alam Rayan","Age"=>28,"Address"=>"Dhaka","Phone"=>"0192078521");
print_r(array_reverse($person));
echo "<br>";
print_r(array_flip($person));
echo "<hr>";
$fruits=array("Mango","Apple","Orange","Banana","Jackfurit","Guava");
echo"<pre>";
 shuffle($fruits);
 print_r($fruits);
 $randomly_pick=array_rand($fruits,6);
echo $fruits[$randomly_pick[0]];
echo $fruits[$randomly_pick[1]];
echo $fruits[$randomly_pick[2]];
echo $fruits[$randomly_pick[3]];
echo $fruits[$randomly_pick[4]];
echo $fruits[$randomly_pick[5]];
echo "<hr>";
$fruits =array("a"=>"Apple","b"=>"Orange","c"=>"Cooconut");
echo in_array("Mango",$fruits)?"Yes, orange is Abilable": "Not avilable";
echo "<br>";
echo array_key_exists("d",$fruits)?"key is avilable":"Not Avilable";
$Name="Khayrul Alam Rayan";
$Age="25";
$country="Bangladesh";
$district="Comilla";
echo "<pre>";
$result=compact("Name","Age","country","district");
print_r($result);
echo "<hr>";
$Name="Khayrul Alam Rayan";
$Age="25";
$country="Bangladesh";
$district="Comilla";
echo "<pre>";
$new_array=array("Name","Age","country","district");
$result=compact("Name","Age","country");
print_r($result);
echo "<hr>";
$name="kamrul Hasan";
$Age =20;
$Student_ID=123652;
$Department="Management";
$new_array=array("name","Age","Department");
$result=compact($new_array,"Student_ID");
print_r($result);
echo "<pre>";
$numbers=array(2,4,6,2,4,6,10,5,5,5,6,6,9,45,25,);
print_r (array_unique($numbers));
echo "<br>";
$numbers=[10,1,2,20,30,50];
sort($numbers);
print_r($numbers);
echo "<br>";
$string =array("Mango","Jackfruit","Apple","Orange","Banana");
echo "<pre>";
sort($string);
print_r($string);
$letters=["abc","dbc","efg","aaa","jkl","bce"];
sort($letters);
$store=",";
echo join($store,$lett)










?>