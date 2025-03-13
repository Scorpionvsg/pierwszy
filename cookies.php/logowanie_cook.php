<?php include_once "css_cook.html";
session_start();?>
<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<link rel="stylesheet" href="styles.css">   DOŁĄCZNIE CSS-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona logowania</title>
</head>
<body>
    <?php include "menu_cook.php";?>
    <h1>Autoryzacja</h1>
    
    <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            if(isset($_POST["wyloguj"])){
                session_unset();
                session_destroy();
            }
            if(isset($_POST["zaloguj"])){
                if($_POST['login']==='admin' && $_POST['haslo']==='admin'){
                    $_SESSION['login']=$_POST['login'];
                    $_SESSION["login_status"]= true;
                    echo "Udane logowanie!";
                }else{
                    echo '<p>Login lub kasło są niepoprawne</p>';
                }
            }
        }
    ?>
    <form method="post">
    
        <?php
        if(isset($_SESSION["login_status"]) && $_SESSION["login_status"]){
            echo "Jesteś zalogowany jako ".$_SESSION['login'];?><br>
            <input type=submit id="wyloguj" name="wyloguj" value="wyloguj">

        <?php }else{?>
            <label for="login">Login:<input autofocus type="text" id="nam" name="login" placeholder="login" require></label><br><br>
            <label for="haslo">Hasło:<input type="password" id="pass" name="haslo" placeholder="hasło" require></label><br>
            <input type="submit" name="zaloguj" value="zaloguj"><br>
        <?php }
        ?>
    </form>
    <?php include "stopka_cook.php";?>
</body>
</html>