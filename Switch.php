
<form action="" method="POST">
        <input type="" name="guess" placeholder="Guess a Number">
        <input type="submit" name="submit" value="ONE CLICK" >
 </form>
<?php 

if(isset($_POST["guess"])){
    switch($guess){
        case $guess>=10:
        echo ("you are Excellent");
        break;
        case $guess>=15:
        echo ("You are Good");
        break;
        case $guess>=30:
        echo ("you are not bad");
        break;
        

    }

}

?>