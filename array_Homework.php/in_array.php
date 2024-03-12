<?php 
$arr =array("apple","orange","mango","jackfruits","guava",25);
if(in_array("mango",$arr)){
    echo "Match found";
}
else{
    "Don't Match Found";

}
echo"<br>";
if(in_array("Coconut",$arr)){
    echo "Match found";
}
else{
    echo "Don't Match Found";
}
echo"<br>";
if(in_array(25,$arr)){
    echo "Match Found";
}
else{
    echo "Dont Match Found";
}
echo"<br>";

if(in_array("23",$arr)){
    echo "Match Found";
}
else{
    echo "Dont Match Found";
}

?>