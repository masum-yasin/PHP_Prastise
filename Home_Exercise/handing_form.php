<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
echo "<pre>";
$pro = $_FILES["profile"];
echo "<br>";
echo $name =$pro["name"];
echo "<br>";

echo $type = $pro["type"];
echo "<br>";

echo $tmp_type =$pro["tmp_name"];
echo "<br>";
 $size =$pro['size'];
 echo floor($size/1000)."KB";
 if(empty(!$name)){
    $loc="upload/";
  if ( move_uploaded_file($tmp_type,$loc.$name)){
        echo "file Uploaded successful";
        $path = $loc.$name;
        <img src="$path" alt="">;
    }
    else{
        echo "failed";
    }
}
    
    
 
 else{
    echo "not file found";
 }


?>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="profile"><br>
        <input type="submit" name="submit" value="upload"><br>
    </form>
</body>
</html>