<?php 
$country_district=array("Dhaka"=>"Bangladesh","Kathumndu"=>"Napal","Colombo"=>"Srilanka","Maley"=>"Mladvies");
next($country_district);
echo key($country_district);
echo current($country_district);
echo "<hr>";
reset($country_district);
echo key($country_district);
echo current($country_district);
end($country_district);
echo "<hr>";
echo key($country_district);
echo current($country_district);
echo "<hr>";
echo key($country_district);
echo current($country_district);


?>