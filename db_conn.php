<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "wdpf55";
$db = new mysqli($host,$user,$password,$database);
if($db->connect_error){
    die("something problem".$db->connect_error);
}
// $db->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $sql = "SELECT * FROM users";
    $result = $db->query($sql);?>
    <table border="1">
        <th>id</th>
        <th>name</th>
        <th>phone</th>
        <th>address</th>
    
   <?php while($row =$result->fetch_assoc()){?>
<tr>
    <td> <?php echo $row ['id']?></td>
    <td><?php echo  $row['name']?></td>
    <td><?php echo  $row['phone']?></td>
    <td><?php echo $row['address']?></td>
    </tr>
    <?php }?>
    </table>
    
    
</body>
</html>