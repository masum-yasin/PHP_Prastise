<?php 

$filepath = "file.txt";
$fh=fopen($filepath,"a+");
while((!feof($fh))){
    echo fgets($fh)."<br>";
}
fwrite($fh,"\n Adding a another line");
fclose($fh);


?>