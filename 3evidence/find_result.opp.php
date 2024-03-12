<?php
//class 



class student{
    private $data;
    function __construct($x){
        $this->data=$x;}
        function showResult($y){
            $rawData = file($this->data);
            foreach($rawData as $line){
                list($id,$name,$batch,$result) =explode(",",$line);
                if($id==$y){
                    echo "ID: $id , Name: $name, Result: $result  <br><br>";
                }
            }
        }
        }
        //End Of Class
        $st = new student("result.txt");//Creat object with a parameter
    
         
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Find Result</h3>
    <?php 
    //result
    if(isset($_POST["submit"])){
        $id =$_POST["st_id"];
        $st->showResult($id);
       
    }
 


    ?>
    <form action="" method="post">
        <select name="st_id">
            <option value="" disabled selected>One select</option>
        <option value="1">Masum</option>
        <option value="2">Molla</option>
        <option value="3">Ikbal</option>
        <option value="4">Rayan</option>
        <option value="5">shuvo</option>
        </select>
        <input type="submit"name="submit" value="FIND">
    </form>
</body>
</html>