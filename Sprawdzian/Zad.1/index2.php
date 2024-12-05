<?php include_once 'klasa2.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasa 2</title>
    <style>
        body{
        background-color:pink;
        }
        h2{
            color:deeppink;
        }
    </style>
</head>
<body>
    <?php
    $tab= new Klasa2();
    ?>
    <h2><?=$tab::$a?></h2>
    
</body>
</html>