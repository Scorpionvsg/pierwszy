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
        padding:20px;
    }
    </style>
</head>
<body>
    <?php
    $gip= new MG("gips",0.05);
    $rte= new MG("rtec",0.05);
    $zlo= new MG("zloto",0.05);
    $wod= new MG("woda",0.05);

    ?>
<ol type="I">
    <li>Masa kulki <b>gipsu</b> o promieniu <u>5cm</u>: <mark><?= number_format($gip->masa(),3,",")?> kg</mark> </li>
    <li>Masa kulki <b>rtęci</b> o promieniu <u>5cm</u>: <mark><?= number_format($rte->masa(),3,",")?> kg</mark></li>
    <li>Masa kulki <b>złota</b> o promieniu <u>5cm</u>: <mark><?= number_format($zlo->masa(),3,",")?> kg</mark></li>
    <li>Masa kulki <b>wody</b> o promieniu <u>5cm</u>: <mark><?= number_format($wod->masa(),3,",")?> kg</mark></li>

</ol>
</body>
</html>