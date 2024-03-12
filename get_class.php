<?php 
class student{
    function __construct()
    {
      echo "My name is".get_class($this);  
    }
}
$st =new student;
echo "<br>";
echo "Newly object is created from this class".get_class($st)

?>