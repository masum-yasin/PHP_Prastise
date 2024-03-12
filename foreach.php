<?php 
$links=array("www.prothomalo.com","www.daraz.com.bd","www.w3schools.com");
foreach($links as $link){
    echo $link."<br>";
}
echo "<hr>";
foreach($links as $link){
    echo "<a href=https://".$link.">".$link."</a><br>";
}
echo "<hr>";
$prices = array("Dhaka"=>200,"khulna"=>250,"Cumilla"=>260);
echo "<pre>";
print_r($prices);
echo "<ul>";
foreach($prices as $key =>$value){
echo "<li>".$key.":".$value."</li>";
}
echo "</ul>";
echo "<br>";


echo "<table border=1>";
echo "
<th>header1</th>
<th>header2</th>
";

foreach($prices as $key =>$value){
echo "<li>".$key.":".$value."</li>";
echo "<tr>";
echo "<td>$key</td>";
echo "<td>$value</td>";
"</tr>";
}
echo "</table>";
?>