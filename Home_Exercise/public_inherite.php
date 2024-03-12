<?php 
class grandFather{
    public  $name = 'Khayrul Alam Rayan';
    public $age = 50;
    public $country = 'Pakistan';
    public $district = 'Lahor';
    public function grandFatherget(){
        return " MY Name is ". $this->name."<br>"." I am ".$this->age." Years old ".'<br>'."My country Name is". $this->country."<br>"." My district is ".$this->district;
    
    }
}
class Daddy extends grandFather{
    public $name ="Mizanur Rahman";
    public $age = 25;
    public function gDaddy(){
        return " My Name is ".$this->name." I am ".$this->age." Years old"." My Country Name is".$this->country." And My District Name is ".$this->district;
    }
}

$gFather = new grandFather();
echo $gFather-> grandFatherget();
$obj2 = new Daddy();
echo "<br>";
echo $obj2->gDaddy();
echo "<br>";
$gpasFather = new grandFather();
echo $gpasFather->name;
echo "<br>";

echo $gpasFather->age;
echo "<br>";

echo $gpasFather->country;
echo "<br>";

echo $gpasFather->district;

?>