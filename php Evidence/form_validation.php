<?php 
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if($email=="" || $pass==""){
        echo "Email and password must be Entered";
    }
    else{
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "EMAIL ADDRESS VALIDATE <br>";
        }
        else{
            echo "EMAIL ADDRESS INVALIDATE <br>";
        }
       if(strlen($pass)<=8 && strlen($pass)>=4){
        echo "Password Valid <br>";
       } 
       else{
        echo "use password 4 to 8 character";
       }
    }

    }

?>
<form action="" method="post">
<input type="text" name="email"placeholder="Enter Your Email"><br>
<input type="password" name="password"placeholder="Enter your password"><br>
<input type="submit" name="submit" value="VAlIDATE">

</form>