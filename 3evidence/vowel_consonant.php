<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Vowel and consonant Check</h2>
<?php 
    if(isset($_POST['submit'])){
      $letter= $_POST['letter']; 
      $lowerletter=strtolower($letter);
      $vowel =["a","e","i","o","u"];
      if(in_array($lowerletter , $vowel))
        echo "$letter is a vowel";
}
else {
    echo "$letter is a consonant";
}
    
    ?>
    <form action="" method="post">
<input type="text"name="letter" placeholder="Enter your Letter">
<input type="submit" name="submit" value="CHECK">



    </form>
</body>
</html>