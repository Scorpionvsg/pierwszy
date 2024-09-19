<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad3-miesiąc</title>
    <style>
        #h1{
            border-width: 4px; 
            border-style: dotted;
            border-color: pink;
            text-align: center
        }
        #h3{
            border-width: 2px; 
            border-style: dashed;
            border-color: pink;
            text-align: center ;
            font-family: cursive;
        }
    </style>
</head>
<body>
    <?php
    $miesiąc=rand(1,15);?>
<h1><?=echo "<center>$miesiąc</center">?></h1>;
<h3><?php
    switch($miesiąc){
        case 1,2,3:
            echo "I Kwartał";
            break;
        case 4,5,6:
            echo "II Kwartał";
            break;
        case 7,8,9:
            echo "III Kwartał";
            break;
        case 10,11,12:
            echo "IV Kwartał";
            break;
        default: 
            echo"Błędny numer miesiąca";
            break;
    }?>
</h3>
</body>
</html>