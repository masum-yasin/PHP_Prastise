<?php 
$current = time();
$data = getdate($current);
echo "<pre>";
print_r($data);
echo "<br>";
$current =1683106254;
echo date("d-F-Y h:i:sa",$current);
echo "<br>";
echo mktime(11,30,54,5,3,2023);
echo "<br>";

$dob = "01, 05, 1997";

$dob = mktime(00, 00, 00, 01, 05, 1997);
$current =time();
 $diff = $current - $dob;
echo $diff/60/60/24/365;
echo "<br>";
$terminationDate =new DateTime('2018-05-30');
$todaysDate = new DateTime(('today'));
$span = $terminationDate->diff($todaysDate);
print_r($span);
echo "Year:".$span->y." Month ".$span->m." Day ".$span->d." Hour ".$span->h." Minute ".$span->i ;


?>