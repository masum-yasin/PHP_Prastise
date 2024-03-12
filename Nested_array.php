<?php 
echo "<pre>";
$student =[
["name"=>"Masum","Age"=>"25","ID"=>"1273758"],
["name"=>"Rayan","Age"=>"30","ID"=>"12737510"],
["name"=>"Ikbal","Age"=>"50","ID"=>"1273758"],
];

foreach($student as $singleindex){
    foreach($singleindex as $key=>$value){
        echo $key.":".$value."<br>";
    }
}
echo "<hr>";
$student =[
    ["name"=>"Masum","Age"=>"25","ID"=>"1273758"],
    ["name"=>"Rayan","Age"=>"30","ID"=>"12737510"],
    ["name"=>"Ikbal","Age"=>"50","ID"=>"1273758"],
    ];
    foreach($student as $singlearray){
        extract($singlearray);{
            echo "Name:$name Age:$Age"."<br>";
        }
    };
    echo "<hr>";
$students=[
["Md Masum Hossain",25,1273758],
["md Rayan mia",35,1273759],
["MD kamrul mia",40,127362],
["Md Mizan",20,1273582],
];
foreach($students as $info){
    extract($info,EXTR_PREFIX_ALL,"a");{
            echo "Name:$a_0,Age:$a_1,ID:$a_2"."<br>";
    }
}

echo "<hr>";
        
?>
<?php
$students =array("a"=>"Mango","Orange","Apple",10,20,10,true);
echo count($students);
echo "<br>";
$student =[
    ["name"=>"Masum","Age"=>"25","ID"=>"1273758"],
    ["name"=>"Rayan","Age"=>"30","ID"=>"12737510"],
    ["name"=>"Ikbal","Age"=>"50","ID"=>"1273758"],
    ];
    echo count($student,true);
    echo "<br>";
    echo count($student,COUNT_RECURSIVE);
    echo "<hr>";
    $array = array("Masum","hasan","Rabby","Karium","Mizan","Masum","hasan","Rabby","Karium","Mizan");
    print_r (array_count_values($array));
    echo "<hr>";
   $student= ["name"=>"Mamnun Bin Masud","age"=>4,"mobile"=>"01766882299","address"=>"Dhaka","Country"=>"Bangladesh","Mobile"=>"01920197783"];
        echo "print only array key";
        print_r(array_keys($student));
        echo "<br>";
        echo "print only array value";
        print_r(array_values($student));
        echo "<hr>";
        
$student= ["name"=>"Mamnun Bin Masud","age"=>4,"mobile"=>"01766882299"];
 
echo "Print Only Array Keys\n";
print_r(array_keys($student));
echo "\n";
echo "Print Only Array Values\n";
print_r(array_values($student));
echo "<hr>";
$Information  =[["Al- Amin",30,"Khulna","01920737783"]
];
foreach($Information as list($name,$age,$address,$Phone)){
    echo "Name:$name,Age:$age,Address:$address,Phone:$Phone <br>";
}
echo "<hr>";
$arr =[20,30,40,40,50,60,80,90,110,120,130];
echo "array of summation";
print_r(array_sum($arr));
echo "<br>";
echo "array of product";
print_r(array_product($arr));
echo"<hr>";
$arr = ["Name"=>"Masum","Age"=>50,"Name"=>"rayan","Age"=>40];
echo "Exmple of array_flip() function";
print_r(array_flip($arr));
echo "<br>";
echo "Exmple of array_flip() function";
print_r(array_reverse($arr));
echo"<hr>";
$arr = ["Mango","Banana","Apple","Jackfruit"];
echo "Exmple of array_rand() Function";
print_r(array_rand($arr,3));
echo "<br>";
echo "Exmple of shuffle() Function";
echo(shuffle($arr));
echo"<hr>";

$fruits =array("a"=>"apple","b"=>"Banana","c"=>"orange");
if(in_array("jackfruit", $fruits)){
    echo "Yes,fruits is available";
}
else{
    echo "Not available";
}
echo "<br>";

echo "<br>";
$arr =array("Name"=>"Masum","Age"=>50,"Name"=>"Rayan","Age"=>60);
if(array_key_exists("Age",$arr)){
    echo "you are correct";
}
else {
    echo "you are worng";
}




        



?>

