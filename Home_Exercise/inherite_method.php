<?php 
class member{
    public $username="";
    public $loggIned=false;
    public function login(){
        $this->loggIned=true;}

        function logout(){
            $this->loggIned=false;
        }
        public function isLoggedIn(){
            return $this->loggIned;
        }
}
class administrative extends member{


    public function createForum( $forumName ) {
        echo "$this->username created a new forum: $forumName<br>";
    }
    // public function banMember( $member ) {
    //     echo "$this->username banned the member: $member->username<br>";
    // }
}
$member=new member();
 $member->username="Khayrul Alam Rayan";
$member->login();
echo $member->username."is".($member->isLoggedIn()? "loggedin":"logged Out")."<br>";
$admin=new administrative();
 $admin->username="Kamrul Hasan saikot";
$admin->login();
echo $admin->username."is".($admin->isLoggedIn()?"logged in":"loggedout");
$admin->createForum("Bangladesh is a beautiful country");
echo "<br>";
class person{
    protected $name;
    protected $age;
    protected $country;
    public function information($x){
        return $this->name=$x;
    }
    public function age($y){
       return  $this->age=$y;
    }
    public function country($z){
        return $this->country=$z;
    }

}
 class person2 extends person{
      protected $fName;
      protected $mName;
      public function fName($x){
        return $this->fName=$x; 
    }
    public function mName($y){
        return $this->mName=$y;
    }
 }
$obj1=new person();
echo $obj1->information("Mizanur Rahman");
echo "<br>";
 echo $obj1->age(30);
 echo "<br>";
echo $obj1->country("Bangladesh");
$obj2=new person2();
echo "<br>";
echo $obj2->information("Khayrul Alam Rayan");
echo "<br>";
echo $obj2->age(28); 
echo "<br>";
echo $obj2->country("Pakistan");
echo "<br>";
echo $obj2->fName("Abudl Alam");
echo "<br>";
echo $obj2->mName("Sabina Begum");
echo "<hr>";
class  loginForm{
    public $username="";
    private $loggedIN=false;
    public final function login(){
        $this->loggedIN=true;
    }
    public final function logout(){
        $this->loggedIN=false;
    }
    public final function isLoggedIN(){
        return $this->loggedIN;
    }
}
// class logInfo extends loginForm{
//     public function login(){
//         $this->isLoggedIN=true;
//     }
// }
$obj =new loginForm();
 $obj->logout();
 echo ($obj->isLoggedIN()?"Loggin":"Loggout");


?>