<?php include_once 'MasaGestosc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color:linen;
        font-family:"Calibri";
    }
    </style>
</head>
<body>
    <?php
    $gip= new MG("gips",5);
    $rte= new MG("rtec",5);
    $zlo= new MG("zloto",5);
    $wod= new MG("woda",5);

    ?>
<ol type="I">
    <li>Masa kulki <b>gipsu</b> o promieniu <u>5cm</u>: <mark><?= $gip->masa()?></mark> kg</li>
    <li>Masa kulki <b>rtęci</b> o promieniu <u>5cm</u>: <mark><?= $rte->masa()?></mark> kg</li>
    <li>Masa kulki <b>złota</b> o promieniu <u>5cm</u>: <mark><?= $zlo->masa()?></mark> kg</li>
    <li>Masa kulki <b>wody</b> o promieniu <u>5cm</u>: <mark><?= $wod->masa()?></mark> kg</li>

</ol>
</body>
</html>