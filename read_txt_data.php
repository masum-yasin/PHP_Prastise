<?php 
$users=file("user.txt");
echo "<pre>";
print_r($users);
foreach($users as $user){
    list($name,$email,$phone) = explode("|",$user);
   echo "Name:".$name ."<br>";
   echo "email".$email."<br>";
   echo "phone".$phone."<br>";
   

}
?>