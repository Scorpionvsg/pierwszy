<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>terminy</title>
    <style>
        table{
            border-collapse: collapse;
        }
    pre{
        border: 1px dashed red;
    }
    td{
        border: 1px dashed red;
    }
    th{
        border: 1px dashed red;
    }
    span{
        border: 1px dashed red;
    }
    </style>
</head>
<body>
    <?php
    $x=["Japonia" => "4,2 bln $","Indonezja" => "1,3 bln $", "Indie" => "3,5 bln $"];
    ?>
    <pre>
    <?php print_r($x); ?>
    </pre>
    <table>
        <tr><th>Kraj</th><th>PKB</th></tr>
        <?php
         foreach($x AS $pom=>$txx){
            echo "<tr><td>$pom</td>";
            echo "<td>$txx</td></tr>";
        }
        
        ?>
        
    </table>
    <br>
    <span><?=json_encode($x);?></span>
</body>
</html>