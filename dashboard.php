<?php 

session_start();

if (!isset($_SESSION['user'] )|| $_SESSION['user'] == '' ) {
    header('Location:login.php');
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
   <?php
     if(isset($_SESSION['user'])){
        echo " welcome  ".$_SESSION["user"]." ";
    }
   ?>

   
</body>
</html>