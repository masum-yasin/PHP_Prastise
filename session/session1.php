<?php 
session_start();
$_SESSION['user']="Masum";
$_SESSION['email']="masum@gmail.com";

print_r($_SESSION);
echo session_id();
?>