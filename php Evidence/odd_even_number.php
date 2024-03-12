<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        $mynum = $_POST['number'];
        if($mynum % 2==0){
            echo "It's a even number";
        }
        else{
            echo "It's a odd Number";
        }
    }
    ?>
    <form action="" method="post">
<input type="text" name="number" placeholder="Enter your Name"><br>
<input type="submit" name="submit" value="CHECK">
 </form>
</body>
</html>