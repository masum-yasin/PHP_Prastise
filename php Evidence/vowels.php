<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['letter'])){
        $letter = $_POST['letter'];
        $vowels= ["a","A","e","E","i","I","o","O","u","U"];
        if(in_array($letter, $vowels)){
            echo "$letter is a vowel";
        } else{
            echo "$letter is a consonant";
        }
       
    }
    ?>
    <form action="" method="post">
        <input type="text" name="letter" placeholder="Enter your vowels">
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>