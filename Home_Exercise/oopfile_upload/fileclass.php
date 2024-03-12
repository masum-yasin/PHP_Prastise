<?php 
class FileClass{
    public $image;
    public $name;
    public $size;
    public $tmpName;
    public $ext;
    public function __construct($file)
    {
        $this->image=$file;
        $this->name=$this->image['name'];
        $this->size=$this->image['size'];
        $this->tmpName=$this->image['tmp_name'];
        $array =explode(".",$this->name);
        $this->ext = end($array);
    }
    public function doUpload(){
        $path = "uploads/";
        $errors = array();
        $limit =104800; // 200kb
        if($this->size>$limit){
         $errors[] ="uploaded failed.you can upload with in 200kb";
        }
        $allowedTypes =["jpg","png","jpeg"];
        if(!in_array($this->ext,$allowedTypes)){
            $errors[]="upload failed.File must be jpg/jpeg/png";
        }
        if(empty($errors)){
            if(move_uploaded_file($this->tmpName,$path.$this->name)){
                echo "<p>file uploaded successful</p>";
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