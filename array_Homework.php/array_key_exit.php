<?php 
$arr = array("BMW"=>"XC&G","TOYOTA"=>"9FG5X","VOLVO"=>"K7FA9");
if(array_key_exists("VOLVO",$arr)){
    echo "key Matching";
}
else{
    echo "key does not matching";
}
echo "<br>";
if(array_key_exists("HANIF",$arr)){
    echo "Found matching";
}
else{
    echo "Does't matching key";
}
?>