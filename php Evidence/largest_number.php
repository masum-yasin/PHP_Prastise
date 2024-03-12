<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Find out largest Number</h2>
    <?php 
    if(isset($_POST['submit'])){
        $mynum1 =$_POST['num1'];
        $mynum2 =$_POST['num2'];
        $mynum3 =$_POST['num3'];
        if($mynum1>$mynum2 && $mynum1>$mynum3){
            echo "The largest Number:$mynum1";
        }
        elseif($mynum2>$mynum1 && $mynum2>$mynum3){
            echo "The largest Number:$mynum2";
        }
        else{
            echo "The largest Number:$mynum3";
        }
    }
    ?>
    <form action="" method="post">
        <input type="text" name="num1" placeholder="Enter your Number"><br><br>
        <input type="text" name="num2" placeholder="Enter your Number"><br><br>
        <input type="text"name="num3" placeholder="Enter your Number"><br><br>
        <input type="submit" name="submit" value="result">
</form>
</body>
</html>