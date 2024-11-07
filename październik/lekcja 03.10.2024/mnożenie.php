<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
     th{ border: 1px dashed black;
        padding: 5px;
        border-collapse: collapse;
        font-size:large;
        font-family:Verdana;
        background-color: burlywood;
         } 
         table{
            border: 1px solid black;
            padding: 10px;
            border-collapse: collapse;
            background-color: orange;
            font-size:large;
            font-family:Verdana;
         }
         td{
            border: 1px dashed black;
            padding: 5px;
            border-collapse: collapse;
            background-color: beige;
            font-size:large;
            font-family:Verdana;
            text-align:center;
         }
    
</style>
</head>
<body>

    <table>
        <caption>Tabliczka mnożenia</caption>
        <tr>
            <th>
                ×</th>
        <?php 
            for($i=1;$i<=10;$i++){
                echo "<th>$i</th>";
            }
            ?>
            </tr>
           <tr>
            <?php
            for($d=1;$d<=10;$d++){
                echo "<th>$d</th> ";
                
                for($j=1;$j<=10;$j++){
                    $w = $d *$j;
                    if($d==$j){
                     echo '<td style="background-color: bisque;">'.$w.'</td>';
                    }else
                   echo "<td>$w</td>";
                }
                echo "</tr>";
            }

        ?>
        </tr>
    </table>
</body>
</html>