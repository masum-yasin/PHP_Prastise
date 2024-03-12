<?php 
if(isset($_POST['submit'])){
    $mynum = $_POST['mynum'];
    $output =$mynum;
    for($i=1; $i<$mynum ;$i++){
        $output = $output *$i;
    }
    echo "{$mynum} factorial Number is: {$output}";
}

?>
<form action="" method="post">
<input type="text" name="mynum" placeholder="Enter your Number">
<input type="submit" name="submit" value="CHECK">
</form>