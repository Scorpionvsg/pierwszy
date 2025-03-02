<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
        form{
            border:3px dashed gray;
        }
    </style>
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD']==="POST"){

    }
    ?>
    <form method="post">
        <fieldset>
            <legend>Sprawdz przybliżoną lokalizacje adresu IP v. 4<legend>
                <label for="nam">http://ip-api.com/json/<input id="dal" name="nam"></label>
        </fieldset>
        <fieldset>
            <legend>Zwrócone dane w (json)<legend>
                <?= json_encode($_POST)?>
        </fieldset>
        <fieldset>
            <legend>Zwrócone dane w (array)<legend>
                <label><?php  print_r($_POST)?></label>
        </fieldset>
    </form>
</body>
</html>