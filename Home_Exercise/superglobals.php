<?php 
echo "<pre>";
// print_r($_SERVER);
echo $_SERVER["HTTP_HOST"];
echo "<br>";
echo $_SERVER["HTTP_USER_AGENT"];
echo "<br>";
echo $_SERVER["SERVER_ADDR"];
echo "<br>";
echo $_SERVER["HTTP_ACCEPT"];
echo "<br>";
echo $_SERVER["SERVER_PORT"];
echo "<br>";
echo $_SERVER["SERVER_ADMIN"];
echo "<b>";
echo $_SERVER["DOCUMENT_ROOT"];
echo "<b>";
echo $_SERVER["REQUEST_TIME"];
?>


















<a href="superglobals.php? fName= Masum &District=Comilla& lName=Hossin& ID=12373758"> </a>
<form action=""method="get">
    <input type="text"name="fName">
    <input type="text"name="lName">
    <input type="text"name="ID">
    <input type="text"name="District">
    <input type="submit"name="submit" value="submit">
</form>
<?php 
print_r($_GET);
print_r($_POST);
?>
