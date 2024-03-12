<?php 
$condition1 =false;
$condition2=true;
$condition3 =true;
$condition4 =true ;
if($condition1 && $condition2 && $condition3){
    echo "yes,you are fine";
}
elseif($condition1 && $condition2){
    echo "you are better";
}
elseif($condition3 && $condition4){
    echo "you are ok";
}
else{
    echo "you are falsy person";
}
echo "<br>";
$n =13;
if(10==$n){
    echo "yes.Ten";
}
elseif(12==$n){
    echo("No,12");
}
else{
    echo("Another number");
}

echo "<br>";
$result = ($n%2==0)? "You are passed":"you are failed";
echo $result;
// echo "<hr>";
// $n=20;
// if($n%2==0){
//     echo "It's a even number";
// }
// else{
//     echo "It's a odd number";
// }
echo "<br>";
$f=17;
$result = (14%2==0)? "It's a even Number":"It's a even Number";
echo $result;
echo "<hr>";
$number = 23;
$f =$number%2;
switch($f){
    case 0:
      echo  "{$f}It's a even  Number";
      break;
      default:
      echo "{$f}It's a odd Number";
}
echo "<hr>";
$color ="blue";
switch($color){
    // case "red":
    //     echo "red is our favorite color";
    //     break;
    //     case "green":
    //         echo "green is our favorite color";
    case "red":
    case "green":
    echo ucwords($color). " is our favorite color";
            break;
            case "yellow":
                case "blue":
                    echo ucwords  ($color) ." It's our favorite color ";
                    break;
            
                default:
                echo "This is color";
}
echo "<hr>";
$n=-3;
$r = $n%2;
switch($r){
    case 0:
        switch($n){
            case $n>0:
                echo "$n is a positive even Number";
                break;
                case $n<0:
                    echo "$n is a negative even Number";
        }
       break;
       default:
       switch($n){
        case $n>0:
            echo "$n is a positive odd number";
            break;
            case $n<0:
                echo "$n is a Negative odd Number";
       }
       

}
echo "<hr>";
$n=-5;
$t =$n%2;
switch(true){
    case($t==0 && $n>0):
        echo "$n is a positive even Number";
        break;
        case($t==1 && $n>0):
            echo "$n is a positive odd Number";
            break;
        case ($t==0 && $n<0):
            echo "$n is a negative even number";
            break;
            case($t==1 && $n<0):
                echo "$n is a negative odd Number";
                break;
           
            
    
}
 ?>