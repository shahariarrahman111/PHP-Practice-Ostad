<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $stringData = file_get_contents("php://input");
    $PHPAssocArray = json_decode($stringData, true);
    
    setcookie('username',$PHPAssocArray['username'],[
        'expires'=>time()+3600,
        'path'=> '/',
        'domain'=>'localhost',
        'secure'=>true,
        'httponly'=>true,
        'samesite'=>'Lax'

    ]);

    

    echo "Save Cookie Success";
}

if($_SERVER["REQUEST_METHOD"] == "GET"){

    echo $_COOKIE['username'];
}

if($_SERVER["REQUEST_METHOD"] == "DELETE"){

    // $stringData = file_get_contents("php://input");
    // $PHPAssocArray = json_decode($stringData, true);
    
    setcookie('username',"",[
        'expires'=>time()-3600,
        'path'=> '/',
        'domain'=>'localhost'

    ]);

    echo "Cookie Delete Success";

}