<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prime Number testing</h1>
   <?php 
    if(isset($_REQUEST["submit"])){
      
        function displayShow($number){
            if($number==0){
                return("0 is not input Number");
            }
            elseif($number==1){
                return ("1 is not prime Number");
            }
            elseif($number==2){
                return ("2 is a prime Number");
            }
            else{
                for($i=2;$i<$number; $i++){
                    if($number%2==0){
                        return "$number is not prime Number";
                    }
                }
                return "$number is a prime Number";
            }
        }
        $pNumber=$_REQUEST["myNumber"];
        echo displayShow($pNumber);
     }
   ?>
    <form action="" method="get">
        <input type="text" name="myNumber" placeholder="Enter your Number">
        <input type="submit" value="SUBMIT" name="submit">
    </form>
</body>
</html>