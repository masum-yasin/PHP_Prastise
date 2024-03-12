<?php 
session_start();
$_SESSION['username']="khayrul Alam Rayan";

$_SESSION['Email']="Rayan@gmail.com";
session_unset();
if(isset($_SESSION['username'])||isset($_SESSION['Email'])){
    echo " Yes, I am ". $_SESSION ['Email']." From Session1 ";
}

else{
    echo "No, I am not avail from session1";
}
?>