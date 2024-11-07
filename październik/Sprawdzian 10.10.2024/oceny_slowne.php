<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad3</title>
    <style>
        table{
            border: 1px solid deeppink;
            padding: 10px;
            border-collapse: collapse;
        
         }
         td{
            border: 1px solid deeppink;
            padding: 10px;
            border-collapse: collapse;
            
         }
         

        </style>

</head>
<body>
    <table>
    <?php
    $tb=["niedostateczna","dopuszczająca","dostateczna","dobra","bardzo dobra","celująca"];
    foreach($tb AS $labo){
        if ($labo=="celująca"){
            echo '<td style="background-color: hotpink;">'.$labo.'</td>';
        }else{
        echo "<tr><td >$labo</td></tr>";
        }
    }
    ?>
    
</table>
</body>
</html>