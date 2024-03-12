<?php 
require_once("fileclass3.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
if(isset($_POST["submit"])){
    $image = $_FILES['photo'];
    $obj = new oopClass($image);
    $obj->displayResult();
}
    
    ?>
    <form action="" method="post" enctype="maltipart/form-data">
        <input type="file" name="photo" placeholder="Choose your 
        File"><br><br>
        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>