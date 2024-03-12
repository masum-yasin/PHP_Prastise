<?php 
session_start();
$_SESSION['username']="kharul Alam rayan Khan";
$_SESSION['Email']="Rayan@gmail.com";
if(isset($_SESSION['username'])|| isset($_SESSION['Email'])){
    echo " you are name ".$_SESSION['username']." and you are email ".$_SESSION['Email'];
}
else{
    echo "you are not available";
}
?> 