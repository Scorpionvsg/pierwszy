<?php include_once "css_cook.html";
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    setcookie($_POST['nazwacook'],$_POST['zaw'],time() + $_POST['czas']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ustawianie cisteczka</title>
    <style>
        body{
            text-align: center;
            margin:30px;
        }
        </style>
</head>
<body>
    <?php include "menu_cook.php";?>
    <h1>Ustaw Ciastko</h1>
    <?php
     
    if(isset($_SESSION["login_status"]) && $_SESSION["login_status"]){?>
    <form method="post">
        <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            echo "Ciastko zostało ustwione";
        }
        ?>
        <fieldset>
            <legend>Nazwa ciasteczka</legend>
            <input type="text" id="nazwaccook" name="nazwacook" readonly value="good_password_definition">
        </fieldset>
        <fieldset>
            <legend>Wygasa:(w sekundach)</legend>
            <input type="number" id="czas" name="czas" min="0">
        </fieldset>
        <fieldset>
            <legend>Ustaw</legend>
            <input type="submit" id="ust" name="ust" value="ustaw">
        </fieldset>
        <fieldset>
            <legend>Zawartość</legend>
            <textarea id="zaw" name="zaw" value="zawartość" autofocus></textarea>
        </fieldset>
    </form>
     <?php
    
    }else{
        echo "Musisz być zalogowany, aby ustawić ciastko";
    }
    if(isset($_COOKIE['nazwacook'])){?>
        <p>
            <?= $_COOKIE['zaw']?>
        </p> <?php
    }else{?>
        <p>
            No właśnie jak...
        </p>
    <?php } 
    
     include "stopka_cook.php";?>
</body>
</html>