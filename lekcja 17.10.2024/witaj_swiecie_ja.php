<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr ,td { 
            border: 3px dotted red;
        padding: 15px;
        border-collapse: collapse;
         } 
    </style>
</head>
<body>
<table>

    
<tr> <?php 
    $tg=str_split("Kon'nichiwa sekai");
    foreach($tg AS $pom => $bom){
        echo'<td> '.$bom.'</td>';
    }
     ?>
     
</tr>  



</table>
</body>
</html>