<?php include_once 'konstruktor.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    ul{
        list-style-type: square;
        font-size: 20px;
        background-color: cyan;
    }
    </style>
</head>
<body>
<ul>
    <?php 
    $pom=new Arytmetyka(0.005,0.002);
    ?>
    <li>  Suma liczb <b><?php echo $pom->x?></b> i <b><?php echo $pom->y?></b> wynosi <b><?php echo $pom->suma();?></b></li>
    <li>  Różnica liczb <b><?php echo $pom->x?></b> i <b><?php echo $pom->y?></b> wynosi <b><?php echo $pom->roznica();?></b></li>
    <li>  Iloczyn liczb <b><?php echo $pom->x?></b> i <b><?php echo $pom->y?></b> wynosi <b><?php echo $pom->iloczyn();?></b></li>
    <li>  Iloraz liczb <b><?php echo $pom->x?></b> i <b><?php echo $pom->y?></b> wynosi <b><?php echo $pom->iloraz();?></b></li>
    <li>  Reszta z dzielenia liczb <b><?php echo $pom->x?></b> i <b><?php echo $pom->y?></b> wynosi <b><?php echo $pom->reszta();?></b></li>
    <li>  Liczba <b><?php echo $pom->x?></b> do potęgi <b><?php echo $pom->y?></b> wynosi <b><?php echo $pom->potega();?></b></li>
</ul>
</body>
</html>