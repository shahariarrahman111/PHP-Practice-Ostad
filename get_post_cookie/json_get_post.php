<?php

//  Postman K Client Dhore Post & Get kora hoyece Rabbil sir er...Sekhane client cilo postman**



if($_SERVER["REQUEST_METHOD"] == "POST"){

    // echo "I am POST method";

    $stringData = file_get_contents("php://input");
    $PHPAssocArray = json_decode($stringData, true);

    print_r($PHPAssocArray);
}



if($_SERVER["REQUEST_METHOD"] == "GET"){
    // echo "I am GET method";

    $stringData = file_get_contents("php://input");
    $PHPAssocArray = json_decode($stringData, true);

    print_r($PHPAssocArray);
}