<?php 
$string = "abcdefghigkl    manopqrstuvwxyz12365412789";
preg_match_all("/[\d]/",$string,$matching);
echo "<pre>";
print_r($matching) ;
echo "<hr>";
$arr =("abcdefghigklmanopqrstuvwxyz12365412789");
preg_match_all("/\D/",$arr,$result);
print_r($result);
echo "<hr>";
$string = "abcdefghigklmanopqrstuvwxyz12365412789";
preg_match("/\s/",$string,$matching);
print_r($matching);
echo "<hr>";

$arr =("abcdefghigklmanopqrstuvwxyz12365412789");
preg_match_all("/\S/",$arr,$result);
print_r($result);
echo "<hr>";
$arr = "a-bcde*fg@hi+jkl(mnop)$\qrst%uvwxyz0192456789";
preg_match_all("/\w/",$arr,$result);
print_r($result);
echo "<hr>";
$arr = "a-bcde*fg@hi+jkl(mnop)$\qrst%uvwxyz0192456789";
preg_match_all("/\W/",$arr,$result);
print_r($result);
echo "<hr>";
$string = "xxxxzzzzxxxzzzzxxxzzzxxxzzz"; 
preg_match_all("(z+)",$string,$matching);
print_r($matching);
echo "<hr>";

$string = "xxxxzzzzxxxzzzzxxxzzzxxxzzz"; 
echo  preg_match("(q+?)",$string ,$result)?"q is found" : "q is not found";

echo "<br>";
echo preg_match("(x?)",$string,$result)?"x is found":"x si not found";





?>