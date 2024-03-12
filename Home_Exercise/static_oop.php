<?php 
class opp{
    public static $value;
    static function inti($num){
        self::$value=$num;
        return new static;
    }
     static function add($num){
        self::$value+=$num;
        return new static;
    }
       public static function sub($num){
        self::$value-=$num;
        return new static;
       }
       public static function out(){
        return self:: $value;
       }
}
echo opp::inti(20)->add(20)->sub(5)->out();
echo "<br>";
echo opp::sub(10)->out();

// class opp {
//     public static $val;
    
//     public static function init($val){
//        self::$val = $val;
//        return new static;
//     }
    
//     public static function add($val){
//        self::$val += $val;
//        return new static;
//     }
    
//     public static function sub($val){
//        self::$val -= $val;
//        return new static;
//     }
    
//     public static function out(){
//        return static::$val;
//     }
//  }
 
//  echo opp::init(10)->add(15)->sub(5)->out(); // Output: 20
echo "<hr>";
class A{
    public static $name = "khayrul Alam Rayan";

}
class B extends A {
  public static $name = "Anil"; 
     public static function show(){
        echo parent::$name;
        echo "<br>";
        echo self::$name;
     }
}
B::show();

A::$name;
 
?>