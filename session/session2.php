<?php 
session_start();
$_SESSION['user']='khayrul Alam Rayan';
$_SESSION['email']='Rayan@gmail.com';
print_r($_SESSION);
echo session_id();
// session_unset();

?>