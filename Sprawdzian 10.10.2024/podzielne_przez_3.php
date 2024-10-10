<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
    <style>
    
    </style>
</head>
<body>
    <?php
        
        $d=range(-9,9);
        foreach($d AS $lab){
            if($lab%3==0){
                echo "<h2 style=color:limegreen;>$lab|";
                ?>

                <?php
            }else{
            echo "<h2 style=color:black;>$lab|";
            }
      }

    ?>
    </h2>
</body>
</html>