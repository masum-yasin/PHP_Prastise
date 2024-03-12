<?php 
class oopClass{
        public $image;
        public$name;
        public $size; 
        public $tmpName;
        public $ext;
        public function __construct($file)
        {
           $this->image=$file; 
           $this->name=$this->image['name'];
           $this->size=$this->image['size'];
           $this->tmpName=$this->image['tmp_Name'];
           $array = explode(".",$this->name);
           $this->ext=end($array);
        }
        function displayResult(){
            $path = "uploads/";
            $erroes = array();
            $limit = 204800;
            if($this->size>$limit){
                $erroes[]="uploades failed. you can upload with in 102 KB";
             }
             $imgFile = ["jpg","png","jpeg"];
             if(!in_array($this->ext,$imgFile)){
                $erroes[]="uploaded failed. must be upload jpg,png,jpeg";
             }
             if(empty($erroes)){
                if(move_uploaded_file($this->tmpName,$path.$this->name)){
                    echo("uploaded sussessfully");
                }
             }
             else{
                foreach($erroes as $err){
                    echo $err."<br>";
                }
             }
            
        }
}
?>