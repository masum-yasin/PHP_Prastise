<?php 
    if(isset($_REQUEST['submit'])){
        function primeCheck($number){
            if($number==0){
                return ("0 is not input number");
            }
            elseif($number==1){
                return ("1 is not prime Number");
            }
            elseif($number==2){
                return ("2 is a prime Number");
            }
            else{
                for($i=2; $i<$number; $i++){
                    if($number %2==0){
                        return "$number is a not prime Number";
                    }
                }
                return "$number si a prime Number";
            }
        }
        $mynum= $_REQUEST['mynum'];
       echo  primeCheck($mynum);
    }
    ?>
    <form action="" method="post">
<input type="text" name="mynum" placeholder="Enter Your Number">
<input type="submit" name="submit" value="CHECK">

    </form>   
