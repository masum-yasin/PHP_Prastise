<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PHP Data Type</h3>
    <?php 
    // integer Data type
    $x = 10;
    var_dump($x) ;//to describe a variable
    echo gettype($x); // to get the type of a variable
    echo "<br>";
  //float Data Type
    $y = 3.5;
    var_dump($y);
    echo gettype($y);
    echo ("<br>");
    //Booleans Data ype
    $p = true;

$city = ["Dhaka","Faridpur","comilla","Nohakhile","Barisal","sylhet"];
var_dump($city); 
echo gettype($city);
$fruits [0] = "Mango";
$fruits [1]="jackfruit";
$fruits [2] = "Ornage";
$fruits [3] = "Lichi";
echo "<br>";
var_dump($fruits);
echo gettype($fruits);

//Object Data type
// class student {
//    public $name = "Masum";
//    public $age  =20;
//    public $id = 2536412;
//    function studentInfo(){
// $name  =$this->name;
// $age = $this ->age;
// $id = $this ->id;
// $display = "ID".$id. "Name" .$name. "Age" .$age;  
// return $display; }
// }
// $st  = new student;
// echo $st ->studentInfo();
// echo "<br>";
// var_dump($st);
// echo gettype($st);



echo "<br>";
echo "<br>";
    ?>
    <?php 
    $x = 10;
    var_dump($x);
    echo gettype($x);
    echo "<br>";
    $y = 49.60;
    var_dump($y);
    echo gettype($y);
    echo "<br>";
        ///array data type//
        $country = ["Bangladesh","Sylanka","India","Pakistan","Maldiv","Nepal"];
        var_dump($country);
        echo gettype($country);
        echo "<br>";
        $fruits[0]="Mango";
        $fruits[1]="Orange";
        $fruits[2]="Apple";
        $fruits[3]="Banana";
        $fruits[4]="Jackfruit";
        var_dump($fruits);
        echo gettype($fruits);
        echo "<br>";
        //Object Data type//
        class stu {
            public $name = "Rayan";
            public $age = "26";
            public $ID = 12548632;
            public $Session = 2015-2018;
            function studentInfo(){
                $name =$this->name;
                $age  =$this->age;
                $ID = $this->ID;
                $session = $this->Session;
                $showResult ="Name:".$name. "Age:" .$age. "ID".$ID. "session".$session;
                return $showResult; 

            }
        }
        $su =new Stu;
        echo $su-> studentInfo();
        echo "<br>";
        var_dump($su);
        echo "<br>";
        echo gettype($su);
        class pDetails{
            public $fName = "Masum,";
            public $lName = "Khan,";
            public $maName = "Majeda Begum,";
            public $faName = "Sha-Alam,";
            public $email = "masum55549@gmail.com,";
            public $ID   =1254836;
            function information(){
                $fName =$this->fName;
                $lName = $this->lName;
                $maName = $this->maName;
                $faName = $this->faName;
                $email = $this->email;
                $ID    = $this->ID;
                $showDisplay = " First Name: ".$fName. " Last Name:" .$lName.  " Mother Name: ".$maName. "  Father Name:  ".$faName. "  Email: ".$email. "  ID: ".$ID;
                return $showDisplay;
            }
        }
        $s=new pDetails;
        echo $s->information();
        echo "<br>";
        var_dump($s);
        echo "<br>";
        
    
        

    ?>
    
</body>
</html>