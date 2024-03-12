<?php 
echo "<pre>";
$arr = array(
    array(
        "id"=>12541,
        "first_name"=>"khayrul Alam",
        "last_name"=>"Rayan",
    ),
    array(
        "id"=>23654,
        "first_name"=>"Kamrul hasan",
        "last_name"=>"Alam",
    ),
    array(
        "id"=>23584,
        "first_name"=>"Mizan Ifran",
        "last_name"=>"Rana",
    ),
    array(
        "id"=>12365,
        "first_name"=>"Nadia",
        "last_name"=>"Sultana",
    )
    );
    print_r(array_column($arr,"first_name","last_name"));
    echo "<br>";
    print_r(array_column($arr,"last_name"));
    echo "<br>";

    print_r(array_column($arr,"id"));
    print_r(array_column($arr,"first_name","id"));
    

?>