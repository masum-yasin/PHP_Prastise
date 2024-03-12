<?php 
$student = array("Rayan"=>30,"Kamrul"=>40,"Mamun"=>50,"Sadid"=>60);
$max = max($student);
$person =array_search($max,$student);
echo"<table border=1>";
echo "<tr><th>Name</th><th>score</th></tr>";
foreach($student as $name=>$score){
   echo "<tr><td>{$name}</td><td>{$score}</td></tr>";
}
echo "</table><br>";
echo"the maximum Number $max and score $person";


?>