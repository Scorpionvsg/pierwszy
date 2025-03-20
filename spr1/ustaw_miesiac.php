<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
                    if(isset($_POST["zapisz"])){
                            $_SESSION['mies']=$_POST['mies'];
                        echo "Ustawiono zmienną sesji";
                        
                    }
                }
                ?>
    <form method="post">
        <label for="mies">Podaj miesiąc twoich urodzin</label><br>
        <input type="number" name="mies" min="1" max="12"><br>
        <input type="submit" name="zapisz" value="Zapisz w sesji"><br>
        
</form>
<?php 
            if($_SERVER['REQUEST_METHOD']==='POST'){
                if(isset($_POST["zapisz"])){?>
                    <br><a href="wyswietl_miesiac.php">Wyświetl miesiąc</a>
            <?php }
            }
            ?>
</body>
</html>