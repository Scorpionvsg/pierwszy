<?php include_once "css.html";
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
</head>
<body>

    <?php include "menu.php";?>
    <h1>Strona główna</h1>
    <?php
    if(isset($_SESSION["login_status"]) && $_SESSION["login_status"]){
        echo "Witaj ". $_SESSION['login'] ;
    }else{
        echo "Witaj gościu!";
    }  
     include "stopka.php";?>
</body>
</html>