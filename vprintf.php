<?php 
$students =[];
$students[]=array("Masum","masum@gmail.com","017320737729");
$students[]=array("sadid","sadid@gmail.com","017320737729");
$students[]=array("Miaznur","mizanur@gmail.com","017320737729");
$students[]=array("Ikbal","Ikbal@gmail.com","017320737729");
echo "<pre>";
print_r($students);
foreach($students as $student){
    // echo "<hr>";
    foreach($student as $stu){
        echo $stu."<br>";
    }

}
echo "<hr>";
foreach($students as $student){
    echo "<hr>";
    vprintf("Naem:%s Email:%s Phone:%s",$student);
}
?>