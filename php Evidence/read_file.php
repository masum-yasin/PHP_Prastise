<?php 
class student{
      private $dataValue;
      public function __construct($file){
        $storedata=file($file);
        $this->dataValue=$storedata;
      }
      
        
      
}
?>
<?php 
if(isset($_POST['submit'])){
    $names =$_POST['stuID'];
}
?>




<form action="" method="post">
<select name="stuID">
<option value="1">Rayan</option>
<option value="2">Mamun</option>
<option value="3">Ikbal</option>
<option value="4">Sadid</option>
<option value="5">Mizan</option>

</select>
<input type="submit" name="submit" value="CHECK">

</form>