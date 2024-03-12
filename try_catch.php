<?php 

ini_set('display_errors',0);
try{


$fh=fopen('mytextfile.txt','r');
if(!$fh){
    throw new Exception("File not found");
}
}catch(Exception $err){
    echo "<pre>";
    print_r($err);
    echo $err->getMessage();
    echo "<br>";
    echo $err->getLine();
    echo "<br>";
    echo $err->getFile();
}

?>