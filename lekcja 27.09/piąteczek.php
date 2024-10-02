<!DOCTYPE html>
<html lang="PL-pl">
<head>
<style> 
    td { border: 2px solid black;
        padding: 20px;
         } 
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piąteczek</title>
</head>
<body>
    
    <table>


        
    <tr  text-align:center;> <?php 
        $tg=["pon","wto","śro","czw","pią","sob","nie"];
        foreach($tg AS $pom => $bom){?> 
         <?php if($pom % 2 ==1){
            echo '<td style="background-color: cyan;">'.$bom.'</td>';
        } else { echo '<td>'.$bom.'</td>';} }?>
    </tr>  


  
    </table>


</body>
</html>