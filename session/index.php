<?php
session_start();

if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <section class="">
        <?php
            echo "Welcome" . $_SESSION('username');
        ?>
    </section>
</body>
</html>