<?php
$pswd = "supersecret";
$pswd2 = "supersecre2";
if (strcmp($pswd, $pswd2) != 0) {
echo "Passwords do not match!";
} else {
echo "Passwords match!";
}
?>