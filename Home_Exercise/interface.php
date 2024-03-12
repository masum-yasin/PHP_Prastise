<?php 
interface parsistable{
public function save();
public function load();
public function delete();
}
class Member implements parsistable{
private $username;
private $location;
private $homepage;
public function __construct($username,$location,$homepage){
$this->username=$username;
$this->location=$location;
$this->homepage=$homepage;
}
public function getusername(){
    return $this->username;
}
public function getlocation(){
    return $this->location;
}
public function gethomepage(){
    return $this->homepage;
}
 function save(){
    echo "saving member to database"."<br>";
 }   
 public function load(){
    echo "loading member from database"."<br>";
 }
public function delete(){
    echo "delecting member from database"."<br>";
}
}
class topic implements parsistable{
    public $subject;
    public $ID;
    public $Department;
    public function __construct($subject,$ID,$Department){
                $this->subject=$subject;
                $this->ID=$ID;
                $this->Department=$Department;
    }
    public function getsubject(){
        return $this->subject;
    }
    public function getID(){
        return $this->ID;
    }
    public function getDepartment(){
        return $this->Department;
    }
    
    public function save(){
        echo "saving member to database"; 

    }
    public function load(){
        echo "loading member form database";
    }
    public function delete()
    {
        echo "delectin member from database";
    }
    
        
}
  $member=new Member("Khayrul Alam Rayan","Dhaka","www.https://w3schools.com");
echo $member->getusername()." lives in ".$member->getlocation()." His website ".$member->gethomepage();
echo "<br>";
$member->save();
$member->load();
$member->delete();
 $topic=new topic("Humen Resource Management",12737580,"Management");
echo $topic->getsubject();
echo "<br>";
echo $topic->getID();
echo "<br>";

echo $topic->getDepartment();














































?>