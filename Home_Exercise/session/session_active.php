<?php 
session_start();
if(defined('SID')){
    echo "session is active";
}
else{
    echo "session is not active";
}
?>