<?php 
$country_district=array("Dhaka"=>"Bangladesh","Kathumndu"=>"Napal","Colombo"=>"Srilanka","Maley"=>"Mladvies");

while($value=current($country_district)){
    echo "$value <br>";
    next ($country_district);
}
echo "<hr>";

foreach($country_district as $country =>$value)
{
    echo $country.",";
}
// next($country);
?>