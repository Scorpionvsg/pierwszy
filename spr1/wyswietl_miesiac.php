<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
        if(isset($_SESSION['mies'])){  
            echo "Miesiąc twoich urodzin to: ".$_SESSION['mies'];
        }
    }
    

?>
</form>
    <br><a href="ustaw_miesiac.php">Ustaw miesiąc</a>
</body>
</html>