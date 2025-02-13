<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem50</title>
    <style>
        fieldset{
            border:2px solid black;
        }
        .col{
            color:red;
            font-style: italic;
        }
    </style>
</head>
<body>

    <fieldset>
        <legend>lorem50</legend>
        
        <?php
        if($_SERVER["REQUEST_METHOD"]==="POST"){ ?>
            <p>Oto wpisany tekst:</p>
            <p class="col"><?=$_POST["lorem"]?>
            <?php
        }else{ ?>
        
        <form method="POST">
        <textarea id="lorem" name="lorem" rows="5" cols="50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, possimus temporibus doloremque tempore dolores esse voluptas accusamus. Officia, sed. Voluptate molestias dolore ea sed eveniet impedit quasi molestiae aut omnis. Voluptatem vero aut, totam neque quibusdam quia deleniti odit qui nam libero laborum ducimus possimus atque! Omnis tempora magni consequatur!</textarea><br>
            <input type="submit"id="wyślij" name="wyślij" value="Wyślij"> </from>
            <?php

        }
        ?>
    </fieldset>
    
    
</body>
</html>