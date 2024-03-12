<?php 
$countries =  array("Dhaka"=>"Bangladesh", "Kathmundu"=>"Nepal","Colombo"=>"Srilanka","Maley"=>"Maldives");
echo next($countries);
echo "<br>";
echo reset($countries);
echo "<br>";
echo current($countries);
echo "<hr>";
echo current($countries);
echo "<br>";
echo next($countries);
echo "<br>";
echo reset($countries);
echo "<br>";
echo end($countries);
echo "<br>";
echo prev($countries);
echo "<br>";
echo key($countries);
echo "<br>";
echo current($countries);
echo "<br>";
echo reset($countries);
echo "<br>";
echo current($countries);
echo "<br>";
echo next($countries);
echo "<br>";
echo next($countries);
echo "<br>";
echo prev($countries);
echo "<br>";
echo  end($countries);
echo "<br>";
// print_r(each($countries));
// echo each($countries);
echo "<hr>";
$furits=array("a" =>"Apple","b"=>"Banana","m"=>"Mango","j"=>"Jackfruit");
reset($furits);
for($i=0;$i<count($furits);$i++){
echo key($furits).":".current($furits)."<br>";
next($furits);
}
//============================//
$names=array("m"=>"Masum","r"=>"Rayan","k"=>"Kamrul","h"=>"Hasan");
end($names);
for($i=count($names);$i>0;$i--)
{echo key($names).":".current($names);
    prev($names);}
    echo "<hr>";
     


















];
     reset($country);
     foreach($country as $key=>$value){
        echo key($key).":".current($country);
     }
    


?>