<?php 
//Numeric indexed array
$fruits=array("Mango","Jackfruit","Lichi","Orange","Apple");
echo "Number of Items in fruits array".count($fruits)."<br>";
echo "<pre>";
echo($fruits);
var_dump($fruits);
$ages = array("Masum"=>20,"Imarn"=>22,"Mizarun"=>25,"Molla"=>30);
echo "<Table border=1>";
echo "<tr>
        <tr>";
foreach($ages as $agescore=>$value){
    echo"<td>".$agescore."<td>";
    echo"<td>".$value."<td>";
}
echo"</Table>";
echo "<hr>";
//Multidimensional Array//
$students =array("Masum"=>array("email"=>"masum@gmail.com","Phone"=>"01320737783"),"Rojoni"=>array("email"=>"rojoni@gmail.com","Phone"=>"01538309325"),"Iqbal"=>array("email"=>"Iqbal@gmail.com","Phone"=>"017397525"));
echo "<pre>";
print_r($students);
echo $students["Iqbal"]["Phone"];
echo "<hr>";
//associtive Arrar//
$ages = array("Masum"=>20,"Imarn"=>22,"Mizarun"=>25,"Molla"=>30);
$output="";
foreach($ages as $name=>$age){
    $output .="Name:$name Age:$age <br>";
}
echo $output;
echo "<br>"


?>