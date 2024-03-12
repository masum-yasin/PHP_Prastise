<?php 
session_start();

$_SESSION['username']="Mausm hossain ";
// unset($_SESSION['username']);
if(isset($_SESSION['username'])){
    echo " Yes, I am ". $_SESSION ['username'] ." from session1 ";

}
else{
    echo "No,I am available in your session";
}

?>