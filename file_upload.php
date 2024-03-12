<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<pre>";
    if(isset($_POST["submit"])){
        print_r($_POST);
        $name = $_FILES["profile"]["name"];
        $temp = $_FILES["profile"]["tmp_name"];
        $size =$_FILES["profile"]["size"];
        $sizemb = $size/1024/1024;
        $sizemb=round($sizemb,2); 
        $path ="upload/";
        
    
        // move_uploaded_file($temp,$path.$name);
        // echo "$name($sizemb MB) file uploaded";
        if(is_uploaded_file($temp)){
            copy($temp ,$path.$name);
            echo "Uploaded";
        }else{
            "<p> potential script abuse attempt detected.</p>";
        }

    }
    ?>
<form action="" method="post" enctype="multipart/form-data">
<label for="">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="">Email:</label><br>
    <input type="text" name="email"><br>
    <input type="file" name="profile"><br>
    <input type="submit"name="submit" value="Upload">
    

</form>
</body>
</html>