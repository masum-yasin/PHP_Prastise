<?php 
// class student{
//     public $id;
//     public $name;
//     public $batch;
//     public $data;

//     public function __construct($x)
   
//     {
//         $this->data=file($x); 
//     }
//     public function result($id){
//         foreach ($this->data as $line){
//            list($stid) =explode(",",$line);
//            if($stid==$id){
//              echo $line;
//            }
           
//         }
//     }
// }
// $st = new student('result.txt');
// $st->result(5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Student result</h2>
    <?php 
    // if(isset($_POST['submit'])){
    //     $myid = $_POST['id'];
    //     $st =new student('result.txt');
    //     $st->result($myid);
    // }

    ?>
    <!-- <form action="" method=post>
        <input type="text" name="id">
        <input type="submit" name="submit" value="RESULT">
    </form> -->
 <?php 
    class student{
        public $id;
        public $name;
        public $batch;
        public $data;
        public function __construct($x){
                $this->data=file($x);
        }
        public function result($id){
            foreach($this->data as $item){
                list($stid,$name,$batch)= explode(",",$item);
                if($stid==$id){
                    echo "$stid. $name.$batch";
                }
            }
        }
        
            
        
    }
    // $obj1 = new student("result.txt");
    // $obj1->result(4);
 ?>
 <?php 
 if(isset($_POST['submit'])){
   $value = $_POST['displayResult'];
   $obj1 = new student('result.txt');
   $obj1->result($value);
 }
 ?>
    <form action="" method="post">
        <input type="text" name="displayResult" placeholder="Enter your ID">
        <input type="submit" name="submit" value="CHECK">

    </form>
</body>
</html>