<?php require_once("member.class.php");
$member=new Member("Masum","Dhaka","http://www.w3schools.com")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Member Area</h1>
    <h2><?php echo $member->getUsername().","?> name</h2>
    <h2><?php echo $member->getLocation().","?> location</h2>
</body>
</html>