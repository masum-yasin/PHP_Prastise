<?php 
class verify {
    private $pin =250;
    public function __construct($e){
        if($this->verifyEIN($e)){
            echo "PIN verified.Finish";
        }
    }
    protected function verifyEIN($e){
        if($this->pin==$e){
            return TRUE;
        }
    }
}
$Employee=new verify("250");

?>
<?php 
class soulation{
    private $password=250;
    public function __construct($find){
        if($this->checkData($find)){
            echo "Password verify and finished";
        }
    }
    public function checkdate(){
        if($this->password==$find){
            
        }
    }
    
        
    
}
?>