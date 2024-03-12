<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name=guess placeholder="Guess a number">
    <input type="submit" name=submit value="CLICK">
    </form>
    <?php 
    if(isset($_POST["guess"])){
        $secretNumber = 453;
    if($_POST['guess']==$secretNumber){
        echo ("Congratualtions!");

    }
    else{
       echo ("sorry");
    }

    }
    
    ?>
    <form action="" method="POST">
        <input type="" name="showresult" placeholder="Guess a Number">
        <input type="submit" name="submit" value="ONE CLICK" >
 </form>
    <?php 
    if(isset($_POST["geuss"])){
        $number = 50;
        if($_POST["showresult"] <=$number && $_POST["showresult"] < $number ){
            echo ("You are congratulations");
        }
        else{
            echo ("you are Bad luck");
        }
        
    }
    
    ?>


</body>
</html>