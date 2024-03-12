<?php 
$my_array = array(8,10,12,20,30,30,20);
echo count($my_array);
echo "<br>";
$my_array = array("a"=>"red","b"=>"blue","c"=>"green","Yellow");
// echo count($my_array,true);
print_r(count($my_array));
echo "<br>";
$my = array(
    array("apple","Banana","Orange"),
    array("Black","Yellow","Banana",),
);
echo count($my,true);

?>