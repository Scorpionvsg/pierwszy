<?php include_once 'okrag_sfera_kula.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#219ebc;
            color: #023047;
            font-family:Garamond;
            font-size:18px;
            padding: 20px;
            
        }
        table,tr{
            width:100%;
            background-color:#8ecae6;
            border-collapse: collapse;
            border: 4px solid #ffb703;
            table-layout: fixed;
        }
        td{
            border-collapse: collapse;
            border: 4px solid #ffb703;
            padding: 10px;
            text-align:center;
            
        }
    </style>
</head>
<body>
    <?php
        $ran=rand(0,99);
        $object= new kula($ran);
    ?>
    <table>
        <tr><td colspan=3><b>Promień kuli:	 r=<?=$ran ?></b></td></tr>
        <tr><td><b>Obwód</b></td><td><b>Pole powierzchni</b></td><td><b>Objętość</b></td</tr>
        <em><tr><td><b><i>L=2&#960;r</i></b></td><td><b><i>P=4&#960;r<sup>2</sup></i></b></td><td><b><i>V =&#8531; &#8226; 4&#960;r<sup>3</sup></i></b></td></tr></em>
        <tr><td><b><?=$object->obwod()?></b></td><td><b><?=$object->pole()?></b></td><td><b><?=$object->objetosc()?></b></td</tr>
    <table>
</body>
</html>