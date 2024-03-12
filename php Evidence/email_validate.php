<?php 
if(isset($_POST['email'])){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "EMAIL ADDRESS VALIDATE";
    }
    else{
        echo "EMAIL ADDRESS INVALIDATE";
    }
}

?>
<form action="" method="post">
<input type="text" name="email" placeholder="Enter Your Email">
<input type="submit" name="submit" value="VALIDATE">

</form>