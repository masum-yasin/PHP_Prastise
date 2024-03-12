<?php 
echo "<pre>";
// print_r($_SERVER);
echo "<br>";
echo $_SERVER["HTTP_ACCEPT"];
echo "<br>";
echo $_SERVER["HTTP_HOST"];
echo "<br>";
echo $_SERVER["REMOTE_ADDER"];
echo "<br>";
echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo $_SERVER["SEVER_PORT"];
echo $_SERVER["HTTP_USER_AGENT"];
echo $_SERVER["HTTP_ACCEPT_ENCODING"];
?>
<br>
<a href="superglobals.php?name=Masum&address=Jatrabari&Phone=01920737783">CLICK HERE</a>

<?php 

//$_GET//
print_r($_GET);
print_r($_POST);
// echo $_GET["name"];
// echo $_GET["address"];
// echo $_GET["Phone"];
?>
<form action="" method="get">
<input type="text" name="fname">
<input type="text" name="lname">
<input type="submit" value="submit">
</form>

<a href="superglobals.php?name=Rayna address=Mirpurdistrict=Nohakhali city=Dhaka">ChICK HERE</a>


<?php 
print_r($_GET);
?>
 <form action="" method="get">
<input type="text" name="fname">
<input type="text" name="lname">
<input type="number" name="number">
<input type="submit" name="submit" value="CLICK HERE">

 </form>
    
    
