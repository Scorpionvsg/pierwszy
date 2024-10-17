<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr ,td,th { 
        border: 1px solid dodgerblue;
        padding: 10px;
        border-collapse: collapse;
        background-color:aliceblue;
        color:blue;
        text-align:center;
         } 
        </style>
</head>
<body>
    <table style="width: 100%;">
        <?php


        $nu = range(0, 10);
        shuffle($nu);
        foreach ($nu as $num) {
            echo "<td >$num</td>";
        }
        ?>
<table>
</body>
</html>