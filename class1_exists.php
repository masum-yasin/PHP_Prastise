<?php

// Creating class
class GFG {
	public $data1;
	public $data2;
	public $data3;
}

if(class_exists('GFG')) {

	// Creating an object
	$obj = new GFG();

	// Set values of $obj object
	$obj->data1 = "Geeks";
	$obj->data2 = "for";
	$obj->data3 = "Geeks";

	// Print values of $obj object
	echo "$obj->data1 \n$obj->data2 \n$obj->data3";
}
else {
	echo "Class does not exist";
}
echo "<br>";
$vars=get_class_vars("GFG");
print_r($vars);

?>
