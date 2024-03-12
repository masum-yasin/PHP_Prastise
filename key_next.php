<?php 
$country_district=array("Dhaka"=>"Bangladesh","Kathumndu"=>"Napal","Colombo"=>"Srilanka","Maley"=>"Mladvies");
echo key($country_district );
next($country_district);
echo "<br>";
echo "<hr>";
echo key ($country_district);
while($key=key($country_district)){nex
    echo "$key <br>";
    next ($country_district);
}
echo "<hr>";

foreach($country_district as $country =>$value)
{echo $country.",";}
// next($country);
?>