<?php include_once 'Trojkat.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pole trójkąta</title>
    <style>
        p{
            background-color:darkseagreen;
            margin:30px;
        }
    </style>
</head>
<body>
    <?php 
    
    $a=1;
    $b=2;
    $tag= new Trojkat($a,$b);
    ?>
    <p><b>Pole trójkąta o podatawie <?=$a?> i wysokości <?=$b?> wynosi: <?=$tag->poleTrojkata()?>.</b></p>
</body>
</html>