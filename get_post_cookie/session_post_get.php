<?php

// Session Post ************

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $stringData = file_get_contents("php://input");
    $PHPAssocArray = json_decode($stringData, true);
    session_start();

    $_SESSION['user']=$PHPAssocArray['username'];

    echo "Session Save Success";
}


// Session Get *******************


if($_SERVER["REQUEST_METHOD"] == "GET"){

    session_start();
    echo $_SESSION['user'];
}


// Session Delete ****************

if($_SERVER["REQUEST_METHOD"] == "DELETE"){

    session_start();
    session_destroy();

    echo "Delete Success";
}