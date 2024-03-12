<?php 
$line = "This is one line\n this is another line";
echo $line;
echo "<br>";
$stabbedline = "Name \t\t\t Address \t\t\t\t phone\t";
echo $stabbedline;
echo "<br>";
$carrageReturn = "This is one line \r this is another line";
echo $carrageReturn;
echo "<br>";
echo "The price is \$200";
echo "This sstring will \$print exactly as it\'s \n declared.";
?>
<?php 
$cities["Dhaka"] =250;
$cities["Sylhet"]=150;
$cities["Barisal"]=450;
echo ("<pre>");
print_r($cities);
echo "We live in Dhaka and population is there {$cities["Dhaka"]}";
?>