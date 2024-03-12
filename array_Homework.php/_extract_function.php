<?php 
echo "<pre>";
$my_arr = array("a"=>"Banana","b"=>"Apple","c"=>"Orange","d"=>"mango");
extract($my_arr);
print_r("\$a=$a, \$b=$b,\$c=$c",);

?>