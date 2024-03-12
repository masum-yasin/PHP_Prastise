<?php 
$num = 15;
$example = Function(){
    global $num;
    $num +=100;
    echo $num;
};
$example();
echo "<br>";
echo $num;
echo "<hr>";
?>
<?php 
$message ="Hellow";
$say= function() use($message){
    $message ="Hi";
    echo $message. "<br>";
};
echo $message."<br>";
$say();

?>