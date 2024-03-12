<?php 
$address =array(
    ["name"=>"Rafiq","Phone"=>"019207436","email"=>"rafiq@gmail.com"],
    ["name"=>"karim","Phone"=>"019207425","email"=>"karim@gmail.com"],
    ["name"=>"jabbar","Phone"=>"0192074251","email"=>"jabbar@gmail.com"],
    ["name"=>"abdul","Phone"=>"0192074225","email"=>"agbdul@gmail.com"],
    ["name"=>"salam","Phone"=>"0192074221","email"=>"salam@gmail.com"],
);
$names =array_column($address, "name");
echo "<pre>";
print_r($names);
$phones =array_column($address, "Phone");
echo"<pre>";
print_r($phones);
$emails=array_column($address,"email");
echo "<pre>";
print_r($emails);

?>