<?php 
$colors = array("Green","Yellow","Blue","Red");
print_r($colors);
echo "<hr>";
list($score1 , $score2 , $score3 , $score4)=$colors;
echo $score1 . $score2 . $score3 . $score4;
echo "<hr>";
function myFunction(){
     $user[]="Masum";
     $user[]="Hossain";
     $user[]="Masum55549@gmail.com";
     $user[]="1273758";
     $user[]="Web Development and PhP and Framwork";
     return $user;
}
list($fName,$lName,$email,$ID,$Department)=myFunction();
echo "The student first Name:{$fName}<br> and last Name:{$lName}<br>His E-mail is:{$email}<br>you are ID:{$ID}<br>You are Department:{$Department}";


?>
