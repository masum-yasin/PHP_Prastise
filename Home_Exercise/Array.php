<?php 
echo "<pre>";
$array = array("a","b","c","d","e","f");
print_r($array);
echo "<hr>";
$array = array("2"=>"Mango","3"=>"Orange","4"=>"Apple");
print_r($array);
echo "<hr>";
$array =array("a"=>"Apple","b"=>"Ornage","c"=>"Jackfruit");
print_r($array);
echo "<hr>";
$array = array("Apple","Ornage","A"=>"Toyota","B"=>"BMW");
print_r($array);
echo "<hr>";
$array = array("Apple","Jackfruit","A"=>"Bangladehs","B"=>"Pakistan");
echo $array[1];
echo "<br>";
echo $array["B"];
echo "<hr>";
$arr = array("Apple","Orange","Jackfruit","Bangladesh","450","Paksitan","850");
foreach($arr as $key){
    echo $key."<br>";}
    echo "<hr>";
    echo "<pre>";
    $arr = array("Apple","Orange","Jackfruit","Bangladesh"=>"450","Paksitan"=>"850");
    foreach($arr as $key=> $value){
        echo $key.":".$value."<br>";
}
echo "<hr>";
$arr =array("A"=>"Bangladesh","B"=>"Canada","C"=>"Pakistan");
foreach($arr as $key=>$value){
    echo "$key=$value"."<br>";
    
}
echo "<hr>";
    $array = array("name"=>"Rayan thalukdhar","age"=>"25","address"=>"Canada","Phone"=>"01920737782");
    while(list($key,$value) = each($array)){
        echo " $key : $value " . "<b>";
    }
    echo "<hr>";
    $student = ["name"=>"Masum", "age"=>"20","Email"=>"masum55549@gmail.com","ID"=>"1273758","Session"=>"2022_2023"];
   
    // while(list($index,$value) = each($student)){
    //     echo "$index:$value"."<br>";
    // }
    extract($student);
    echo " Name:$name  Age:$age  Email:$Email  ID:$ID  session:$Session  ";
    echo "<hr>";
    $array = array("Karim alamgir",60, "Arbia,nazran");
    extract($array,EXTR_PREFIX_ALL,"a");{
        echo "Name:a$_0 Age:$a_1 Address:$a_2";
    }
    echo "<hr>";
    $n = array("Masum","Karim","kamrul",123,"hasan");
    echo count($n);
    echo "<hr>";
    for($i=0;$i<count($n);$i++){
    echo $n[$i]."<br>";}
        echo "<hr>";
        $fruits = array("Apple","Banana","Orange","Jackfruit","Mango");
        $someFruits = array_slice($fruits,2,3,true);
        print_r( $someFruits);
        echo "<hr>";
        $randomData =array("a"=>45,"b"=>20,"c"=>60,"d"=>80,"e"=>70,"f"=>90,45=>110,12=>20,"g"=>120);
        $result  =array_slice($randomData,1,null,true);
        print_r($result);
        echo "<hr>";
        $fruits = array("Apple","Banana","Orange","Jackfruit","Mango","Guava","PineApple");
        $newfruits=array("tamaring","pineapple");
        $someFruits= array_splice($fruits,-4,3,$newfruits);
        print_r($fruits);
        print_r($someFruits);
        echo "<hr>";
        $fruits = array("Apple","Banana","Orange","Jackfruit","Mango","Guava","PineApple");
        $newfruits1 =array_slice($fruits,2,3);
        $newfruits2 = array_slice($fruits,1,5);
        $somefruits =array_merge($newfruits1,$newfruits2);
        print_r($newfruits1);
        print_r($newfruits2);
        print_r($somefruits);
        echo "<hr>";
        $random = array("a"=>20,"b"=>30,"c"=>40,"d"=>50,60=>50,"e"=>70,"f"=>30,70=>110);
        $r1 = array_slice($random,4,8,true);
        $r2 = array_slice($random,2,6,true);
        $r3 =array("g"=>210,"k"=>250);
        $randomData =$r1+$r2+$r3;
        
        print_r($randomData);
        print_r($r1);
        echo "<hr>";
        $n =array(10,20,30,50,60,70,80,100,120,360,120,458);
        $fruits = array("a"=>"Mango","b"=>"Apple","c"=>"Orange","d"=>"Banana","e"=>"Jackfruit","f"=>"Guava");
       ksort($fruits);
       print_r($fruits);
        sort($n, SORT_STRING);
        print_r($n);
        for($i=0;$i<count($n);$i++){
            echo $n[$i]."<br>";
        }
        foreach($n as $numbers){
            echo $numbers."<br>";
        }
        echo "<hr>";
        $random =array("Mango","mango","apple","Apple","Banana","banana","Orange","orange");
        sort($random, SORT_STRING|SORT_FLAG_CASE);
        print_r($random);
        echo "<hr>";
        echo "<pre>";
        $student=[
            ["Al Mahmud Hasan",10],
            ["Khayrul Alam Rayan",20],
            ["Kamrul Hasan",25],
        ];
       
            foreach($student as list($name,$age)){
             
                echo " Name :$name Age:$age "."<br>";
            }

       
         $country=array("a"=>"Bangladesh","b"=>"Canada","c"=>"Pakistan");
     reset($country);
     for($i=0;$i<count($country);$i++){
        echo key($country).":".current($country);
        next($country);
        echo "<br>";
     }
     end($country);
     for($i=count($country);$i>0;$i--){
        echo key($country).":".current($country);
        prev($country);
     }
     $person=[
        ["Name"=>"khayrul Alam Rayan","age"=>20],
        ["Name"=>"Al Mahmud hasan","age"=>30],
        ["Name"=>"Anwer khan","age"=>40],
     ];
     foreach($person as $key=>$value){
        echo "Name:".$value["Name"]."Age:".$value["age"]."<br>";
     }
     


        
    

?>