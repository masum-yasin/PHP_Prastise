<?php 
class FileClass {
    private $data;
    function __construct($x){
        $this->data=$x;
    }
    function readData(){
    $rawData=file($this->data);
    // print_r($rawData);
    foreach($rawData as $item){
        list($name,$email,$phone)=explode("|",$item);
        echo "Name: $name - Email: $email - Phone: $phone <br>";
    }
    }
}
$mydata =new FileClass("user.txt");
$mydata->readData();
echo "<hr>";
// class flowData{
//     private $number;
//     public function __construct($y){
//         $this->number=$y;
//     }
//     function flowData(){
//         $rawData=file($this->number);
//         foreach($rawData as $item){
//             list($name,$email,$phone)= explode("|",$item);
//             echo"Name :$name  - Email:$email - Phone: $phone";
//         }
        
//     }
    
// }
// $obj =new flowData("user.txt");
// $obj->flowData();
?>