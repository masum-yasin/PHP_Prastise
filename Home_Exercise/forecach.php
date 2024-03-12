<?php 
echo"<pre>"; 
$array =["www.prothomalo.com","www.w3schoo.com","www.daraz.com.bd"];
foreach($array as $website){
    echo $website."<br>";
    
}
echo "<hr>";
foreach($array as $website){
    echo "<a href=https:".$website.">".$website."</a><br>";
}
echo "<hr>";
$string =array("Maymansing"=>250,"Faridpur"=>420,"Dhaka"=>650,"Comilla"=>350);
echo "<ol>";
foreach($string as $district=>$value){
    echo "<li>". $district.":".$value."</li>";
}
echo"<hr>";
$country =array("Bangladesh"=>450,"Pakistan"=>650,"Canada"=>750,"Maldiv"=>800);
echo"<table border=1 width=700 text-center background-color=green;>";
foreach($country as $company=>$brand){
    echo"<tr>";
    echo "<td>".$company."</td>";
    echo "<td>".$brand."</td>";
    "</tr>";

}
echo "</table>";
echo "<hr>";
  function Factorial($x){
    if($x<=1) return 1;

   {return $x  * Factorial($x-1);}

  }
 echo Factorial(5);
 echo "<hr>";
 function myFunction($n){
    if($n<=1)return 2;
    {return $n * Factorial($n-1);}

 }
 echo Factorial(6)
?>