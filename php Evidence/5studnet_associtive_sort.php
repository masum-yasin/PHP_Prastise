<?php 
$country = array("Bangladehs"=>"Dhaka","Pakistan"=>"Korachi","Maldiv"=>"Male","Nepal"=>"kathmundo","India"=>"Delhi" ,"Argintina"=>"Messi");
echo "<pre>";

ksort($country);
foreach($country as $item=>$capital){
    echo "$item => $capital <br>";
}


?>