<?php include_once "css.html";?>
<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona logowania</title>
</head>
<body>
    <?php include "menu.php";?>
    <h1>Autoryzacja</h1>
    <label for="login">Login:<input type="text" id="nam" name="login"></label><br><br>
    <label for="haslo">Hasło:<input type="password" id="pass" name="haslo"></label>
    <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            if(isset($_POST["wyloguj"])){
                session_unset();
                session_destroy();
            }
            if(isset($_POST["zaloguj"])){
                if($_POST['login']==='admin' && $_POST['pass']==='admin'){

                }else{
                    echo '<p>Login lub kasło są niepopre=awne</p>';
                }
            }
        }
    ?>
    <form method="post">
        <?php
        if(isset($_SESSION["login_status"]) && $_SESSION["login_ststus"]){

        }else{

        }
        ?>
    </form>
    <?php include "stopka.php";?>
</body>
</html>