<?php 
class visitor {
    private static $visitorNumber=0;
    public function __construct(){
        self::$visitorNumber++;
    }
    function getVisitor(){
       echo   self::$visitorNumber;
    }
}
new visitor;
new visitor;
new visitor;
// $visitorNew=new visitor
visitor::getVisitor();
?>