<?php 
session_start();
if(isset($_SESSION['username'])){
    echo "you are name".$_SESSION['username']."form session";
}
?>