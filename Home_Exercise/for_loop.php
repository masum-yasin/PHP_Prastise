<?php 
for($i=1;$i<20; $i+=2){
    echo $i."<br>";}
    echo "<br>";
    for($i=1;$i<25;$i+=2){
        echo $i."<br>";
    }
    echo"<br>";
   $array =array("Masum","Mizan","kamrul","kabir","Rubel","Rofiq");
   $length = count($array);
   for($i=0; $i<$length; $i++){
    print_r( $array[$i])."<br>";
   }
 
 
 echo "<br>";
 $i=0;
 do{$i++;
echo $i."<br>";}
while($i<10);
echo "<hr>";

for($i=0; $i<10; $i++ ){
    echo "*"."<br>";
}
echo "<br>";
$n=6;
for($i=$n, $factorial=1; $i>1;$i-- ){
    $factorial *=$i;
    printf("Factorial Number of %d is %d",$n,$factorial);
}
echo "<br>";
$m=5;
for($i=$m, $factorial=1;$i>1;$i--){
    $factorial *=$i;
    printf("factorial number of %d is d%",$m,$factorial);

}
?>