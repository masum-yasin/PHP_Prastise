<?php 
session_start();
$inactive=15;
if(isset($_SESSION['timeout'])){
    $sessionT = time() - $_SESSION['timeout'];
}
if($sessionT>$inactive){
    session_destroy();
}
$_SESSION["timeout"] = time();

?>