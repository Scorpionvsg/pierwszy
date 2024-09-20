<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad3-miesiąc</title>
    <style>
        #h1{
            border-width: 4px; 
            border-top: 4px dotted blue;
            border-bottom: 4px dotted blue;
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
<h1><?= "<center>$miesiąc</center"?></h1>


<h3><?php
    switch($miesiąc){
        case 1:
            echo "I Kwartał";
            break;
        case 2:
            echo "I Kwartał";
            break;
        case 3:
            echo "I Kwartał";
            break;
        case 4:
            echo "II Kwartał";
            break;
        case 5:
            echo "II Kwartał";
            break;
        case 6:
            echo "II Kwartał";
             break;
        case 7:
            echo "III Kwartał";
            break;
        case 8:
            echo "III Kwartał";
            break;
        case 9:
            echo "III Kwartał";
            break;
        case 10:
             echo "III Kwartał";
             break;
            case 11:
            echo "IV Kwartał";
            break;
        case 12:
            echo "IV Kwartał";
            break;
        case 13:
            echo "IV Kwartał";
            break;
        case 14:
            echo "IV Kwartał";
            break;
        case 15:
            echo "IV Kwartał";
            break;
        default: 
            echo"Błędny numer miesiąca";
            break;
    }?>
</h3>
</body>
</html>