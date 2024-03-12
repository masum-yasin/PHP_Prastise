<?php 
session_start();
$_SESSION['username']="khayrul Alam Rayan";

// echo "<pre>";
// print_r($_SESSION);
if(isset($_SESSION ['username'])){
    echo " Yes you are ". $_SESSION ['username'] ." from session ";
}
