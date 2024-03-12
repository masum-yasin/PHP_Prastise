<?php $cookieName= "user";
$cookieValue = "Mezanur Rahman";
setcookie($cookieName,$cookieValue,time()+(86400*10));
if(!isset($_COOKIE[$cookieName])){
    echo "your cookie $cookieName is not set";
}
else{
    echo "your cookie $cookieName value set:$_COOKIE[$cookieName]<br>";
    
}
echo "<br>";
setcookie($cookieName, "",time()-2000);
    if(!isset($_COOKIE[$cookieName])){
        echo "your cookie $cookieName delect";
    }
































// $cookieName = "user";
// $cookieValue = "Khayrul Alam Rayan";
// setcookie($cookieName,$cookieValue,time()+(86400*30)); //1 day = 86400second//
// if(!isset($_COOKIE[$cookieName])){
//     echo "your cookie $cookieName is not set ";
// }
// else{
//     echo "your cookie $cookieName is set value:$_COOKIE[$cookieName] <br>";
//     // echo "your cookie $cookieName value set: $_COOKIE[$cookieName]";
// }
// echo "<br>";
// // $cookieName = "user";
// setcookie($cookieName,"", time()-2000);
// if(!isset($_COOKIE[$cookieName])){
//     echo "your cookie $cookieName delect";
// }
?>