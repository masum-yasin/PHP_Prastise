<?php 
$n =13;
if($n%2==0){
    echo "It's a even Number";
}
else{
    echo "It's a odd Number";
}
echo"<br>";
if($n%2==0):
    echo "It's a even Number";
    echo "<br>";
    echo "Some text";
else:
    echo "It's a odd Number";
    echo "<br>";
    echo "Some text";
endif;
echo "<br>";
switch($n%2==0):
    case 0:
        echo "It's a even Number";
        break;
        default:
        echo "It's a odd Number";
        echo "Some Text";
    endswitch;



?>