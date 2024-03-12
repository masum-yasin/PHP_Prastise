<?php 
if(isset($_POST['submit'])){
    $mynum = $_POST['number'];
    if($mynum %2==0){
        echo "It's a even Number";
    }
    else{
        echo "It's a odd Number";
    }
}

?>

<form action="" method="post">
<input type="number" name="number" placeholder="Enter Your Number">
<input type="submit" name=submit value="CHECK">

</form>
