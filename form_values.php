<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
//     // print_r($_GET);
// echo $_REQUEST['mynum']

// get method = default ;
// post method = 
// request = both 
  if(isset($_REQUEST['submit'])){   //Button ..a click kora hole ae ta show krbe.
   
    function primeTest($number){
        if($number==0){
            return "0 is not input Number";
        }
        elseif($number==1){
            return " 1 is not prime Number";
        }
        elseif ($number==2){
            return "2 is a Prime Number";
        }
        for($i=2;$i<$number;$i++){
            if($number%2==0){
                return "$number is not a prime Number"; //[vag sesh thakle 0 thakle oi ta prime Number noy]
            }
        }
        return "$number is a prime Number"; //[ar vag ses  1 thakle oi ta prime Number]
    }
    $pNumber = $_REQUEST['mynum'];
    echo primeTest($pNumber);

  }
   
    ?>
    <h1>Prime Number Testing</h1>

    <form action="" method="post">
<input type="text"name="mynum" placeholder="Enter your Number">
<input type="submit" value="SUBMIT" name="submit">
    </form>
</body>
</html>