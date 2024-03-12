<?php
$pswd = "secretpswd";
echo "<hr>";
if (strlen($pswd)<10)
echo "Password is too short!";
else
echo "Password is valid!";
?>