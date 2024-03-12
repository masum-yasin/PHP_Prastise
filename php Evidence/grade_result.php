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
        $mynumber= $_POST['number'] ;
     
        
        if($mynumber=="a"){
            echo "excellent";
        }
        elseif($mynumber=="b"){
            echo "good";
        }
        elseif($mynumber=="c"){
            echo "fair";
        }
        elseif($mynumber=="d"){
            echo "poor";
        }
        else{
            echo "failure";
        }
    
    }
    
    ?>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter your Grading system">
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>