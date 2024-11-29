<?php include_once 'stozek.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            background-color: lightpink;
            color: darkmagenta;
            font-family: Consolas;
            font-size:50px;
            margin-left:0px;
            margin-top:100px;
            margin-bottom:100px;
            margin-right:0px:
        }
        div{
            border-top: 3px solid magenta;
            border-bottom: 3px solid magenta;
            text-align: center;
            display: inline-block
}
</style>
</head>
<body>
    <?php 
    $r=5;
    $h=50;
    $j="m";
    $obj= new stoz($r,$h)?>
    <div>
    <p>Stożek</p>
    <p>Promień: R = <?=number_format($r,0),$j?> </p>
    <p>Wyskość: H = <?=number_format($h,0),$j?> </p>
    <p>Pole: = <?= number_format($obj->PoleCalkowite(),2,","," "),$j?><sup>2</sup></p>
    <p>Objętość: V = <?=number_format($obj->Obj(),2,","," "),$j?><sup>3</sup></p>
    </div>  
</body>
</html>