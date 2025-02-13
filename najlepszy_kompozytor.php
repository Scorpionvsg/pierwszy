<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Najlepszy Kompozytor</title>
    <style>
        legend{
            padding:7px;
            border-top:3px solid blue;
            border-bottom:3px solid blue;
        }
        fieldset{
            border:3px solid blue;
        }
    </style>
</head>
<body>

    <fieldset>
        <legend>Najlepszy kompozytor</legend>
        
        <?php
        if($_SERVER["REQUEST_METHOD"]==="POST"){ ?>
            <p>Według ciebie njalepszym kompozytorem jest: <?=$_POST["komp"]?></p>
            <?php
        }else{ ?>
        
        <form method="POST">
        <input type="radio" required id="Alexander Borodin" name="komp" value="Alexander Borodin">
        <label for="Alexander Borodin">Alexander Borodin</label>
            <br>
        <input type="radio" required id="Fryderyk Chopin" name="komp" value="Fryderyk Chopin">
        <label for="Fryderyk Chopin">Fryderyk Chopin</label>
            <br>
        <input type="radio" required id="Edvard Grieg" name="komp" value="Edvard Grieg">
        <label for="Edvard Grieg">Edvard Grieg</label>
            <br>
        <input type="radio" required id="Stanisław Moniuszko" name="komp" value="Stanisław Moniuszko">
        <label for="Stanisław Moniuszko">Stanisław Moniuszko</label>
            <br>
        <input type="radio" required id="Giuseppe Verdi" name="komp" value="Giuseppe Verdi">
        <label for="Giuseppe Verdi">Giuseppe Verdi</label>
            <br>
        <input type="radio" required id="Richard Wager" name="komp" value="Richard Wager">
        <label for="Richard Wager">Richard Wager</label>
            <br>
        <input type="submit"id="kompozytor" name="kompozytor" value="Wybierz ulubionego kompozytora"> </from>
            <?php

        }
        ?>
    </fieldset>
    
    
</body>
</html>