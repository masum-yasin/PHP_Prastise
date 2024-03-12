<?php 
$colors =["Green","Orange","Yellow"];
print_r($colors);
echo "<hr>";
list($val1,$val2,$val3)=$colors;
echo $val1 . $val2 . $val3 ;
echo "<hr>";
function userprofile(){
    $user[]="Masum";
    $user[]="Masum@gamil.com";
    $user[]="01920737783";
    return $user;
}
list($Name,$email,$Phone)=userprofile();
echo "Student name:$Name and His email is $email and His phone Number is $Phone";
   

?>