
<?php 
require_once('fileclass.php');
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
    if(isset($_POST['submit'])){
        $store = $_FILES['photo'];
        $result = new FileClass($store);
        $result->doUpload();
    }
    ?>
    <form action=""method="post" enctype="multipart/form-data">
<input type="file"name="photo" placeholder="CHOOSE YOUR FILE"><br><br>
<input type="submit" name="submit" value="UPLOAD">

    </form>
</body>
</html>