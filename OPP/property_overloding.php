<?php 
class Employee {
    public $name;
    public function __set($name, $value)
    {
        // echo "nonexistent property: \$$name";
        $this->$name=$value;
    }
}
$emp =new Employee;
$emp->name="Masum";
$emp->age=20;
$emp->address="Dhanmondi";
var_dump($emp);
?>