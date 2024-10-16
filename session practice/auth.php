<?php

session_start([
    'cookie_lifetime' => 3,  // 5 minutes after automated logout user
    
] );
// session_destroy(); 

 $_error = false;
 
 $_SESSION['loggedin'] = true    ;

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        if ('admin'==$_POST['username'] && '1234'==$_POST['password']) 
        {
            $_SESSION['loggedin'] = true;
        }else{
            $_error = true;
           $_SESSION['loggedin'] = false; 
        }        
    }

    if(isset($_POST['logout'])){
        $_SESSION['loggedin'] = false ;
        session_destroy();
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
        body{
            margin-top: 50px;
        }
    </style>

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>
                    Simple Auth Example
                </h2>
            </div>
        </div> 
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php
                    if($_error == true){
                        echo " <blockquote>Username and Password not correct.</blockquote>";
                    }

                    if(true == $_SESSION['loggedin']) {
                        echo "Hello Admin, Welcome !";
                    }else{
                        echo "Hello Stranger, Login Below";
                    }
                ?>
            </div>
        </div>

        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php 
                if(false == $_SESSION['loggedin']):
                ?> 
                <form method="POST">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <button class="btn-primary" type="submit" name="button">Login</button>
                </form>
                 <?php 
                 else:
                 ?>   
                <form action="auth.php" method="POST">
                    <input type="hidden" name="logout" value="1"> 
                    <button class="btn-primary" type="submit" name="button">Log Out</button>
                </form>    
                 <?php 
                 endif;
                 ?>  
            </div>
        </div>
    </div>    
    
</body>
</html>