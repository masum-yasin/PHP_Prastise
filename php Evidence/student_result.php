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
        $number=$_POST['mynumber'];
        $gradeValue = strtoupper($number);
        if($gradeValue=="A"){
            echo "VeryGood";
        }
        elseif($gradeValue=="B"){
            echo "Good";
        }
        elseif($gradeValue=="C"){
            echo "poor";
        }
        elseif($gradeValue=="D"){
            echo "Fail";
        }
    }
    
    ?>
    <form action="" method="post">
        <input type="text" name="mynumber" placeholder="Enter your letter">
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>