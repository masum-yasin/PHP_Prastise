
<form action="" method="POST">
        <input type="" name="guess" placeholder="Guess a Number">
        <input type="submit" name="submit" value="ONE CLICK" >
 </form>
<?php 

if(isset($_POST["guess"])){
    if($_POST["guess"]>=8){
        echo ("you are Excellent");
    }
    else if($_POST["guess"]>=5){
        echo ("you are Good");
    }
    else{
        echo ("you are bad");
    }
}

?>