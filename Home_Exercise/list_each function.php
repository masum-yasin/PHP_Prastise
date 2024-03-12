<?php 
$student =array("Name"=>"Al Mahmud Hasan","age"=>25,"address"=>"Bangaldesh,Dhaka");
while (list($key, $value) = each($student)){
    echo " $key : $value "."<br>";
}

?>