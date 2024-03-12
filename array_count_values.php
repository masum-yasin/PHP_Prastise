<?php 
$numbers=[5,10,10,20,30,60,60,20,30,40,50,60];
$counting=array_count_values($numbers);
echo "<pre>";
print_r($counting);

?>