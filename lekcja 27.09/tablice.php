<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice</title>
</head>
<body>
    <pre>
        <?php 
            $parzyste=range(0,12,2);
            foreach($parzyste AS $lab){
            echo $lab." ";
             }
        ?>
    </pre>
<pre>
<?php
    $dziesiątki=range(-10,100,10);
    foreach($dziesiątki AS $labb){
        echo $labb." ";
    }
?>
</pre>
<pre>
    <?php
    $polowki=range(-5.5,5.5,0.5);
    foreach($polowki AS $lab3){
        echo $lab3." ";
    }
    ?>
</pre>
<pre>
    <?php
    $litery_od_em=range('m','u');
    foreach($litery_od_em AS $lab4){
        echo $lab4." ";
    }
    ?>
</pre>

<pre>
<?php
    $litery_wstecz=range('X',"E");
    foreach($litery_wstecz AS $labbbbb){
        echo $labbbbb." ";
    }
?>
</pre>


</body>
</html>