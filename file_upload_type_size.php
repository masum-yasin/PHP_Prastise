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
        $name = $_FILES["photo"]["name"];
        $temp = $_FILES["photo"]["tmp_name"];
        $size =$_FILES["photo"]["size"];
        
        $allowed_size ="50";
        $path ="upload/";
        $error  =array();
        $nameArray =explode(",",$name);
        $ext =strtolower(end($nameArray));
        $allowed_types =array("jpg","png","bmp","jpeg");
        if(!in_array($ext,$allowed_types)){
            $error[]="jpg,png,bmp,jpeg";
        }
        if($size>$allowed_size){
            $error[]="Only 512 kb size si allowed";
        }
        if(empty($error)){
            move_uploaded_file($temp,$path.$name);
            echo "$name($size bytes) file uploaded";
        }
        else{
            echo "<ul>";
            foreach($error as $err){
                echo "<li>$err</li>";
            }
           echo  "</ul>";
        }
    
        
        

    }
    ?>
<form action="" method="post" enctype="multipart/form-data">
<label for="">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="">Email:</label><br>
    <input type="text" name="email"><br>
    <input type="file" name="photo"><br>
    <input type="submit"name="submit" value="Upload">
    

</form>
</body>
</html>