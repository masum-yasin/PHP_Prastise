<?php
$fName ="yasin";
$lName ="Ahamed";
$middleName="Shovo";
printf('His Name is %3$s ,%1$s , %2$s',$fName,$lName,$middleName);
echo "<br>";

printf('The binary equivalent %2$d is %1$d',12,2400);
echo "<br>";
$x = 25.251436;
printf("The float Number is %.2f",$x);
echo "<br>";
$y=45.36254;
printf('The float Number is%.3f',$y);
echo "<br>";
$m=251.236;
$n = 56.254;
printf("The float and integer Number %08.2f",$m);
echo "<br>";
printf("The float and Integer Number %010.2f",$n);
echo "<br>";
$fName ="Masum";
$lName = "Hossain";
$output = sprintf('His Name is %s,%s',$fName,$lName);
echo $output;

?>