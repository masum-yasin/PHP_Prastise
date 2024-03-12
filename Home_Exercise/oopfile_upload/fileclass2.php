<?php 
class superClass{
    public $image;
    public $name;
    public $size;
    public $tmpName;
    public $ext;
    public function __construct($file){
        $this->image=$file;
        $this->name=$this->image['name'];
        $this->size=$this->image['size'];
        $this->tmpName=$this->image['tmp_name'];
        $array =explode(". ",$this->name);
        $this->ext=end($array);
        
    }
    public function myFunction(){
        $path ="uploads/";
        $errors  =array();
        $imgLimit =104800;
        if($this->size>$imgLimit){
            $errors[]="Uploaded failed.your can upload file 200KB";
        }
        $imgExt =["jpg","png","jpeg"];
        if(!in_array($this->ext,$imgExt)){
            $errors[]="failed Uploaded.File must be jpg,png,jpeg";
        }
        if(empty($errors)){
            if(move_uploaded_file($this->tmpName,$path.$this->name)){
                echo "file uplaoded successful";
            }
        }
        else{
            foreach($errors as $err){
                echo $err."<br>";
            }
        }
    }
}
?>