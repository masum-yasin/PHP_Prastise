<?php

class myclass {
    // constructor
    function __construct()
    {
        return(true);
    }

    // method 1
    function myfunc1()
    {
        return(true);
    }

    // method 2
    function myfunc2()
    {
        return(true);
    }
}
$allmethods=get_class_methods("myclass");
print_r($allmethods);
echo "<hr>";
$obj =new myclass;
$methods = get_class_methods($obj);
print_r($methods);