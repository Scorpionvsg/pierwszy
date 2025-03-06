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
<form method="post">
    <?php
    $check=isset($_POST['url']) ? $_POST['url'] : "";
    if($_SERVER['REQUEST_METHOD']==="POST"){?>
    <fieldset>
        <legend>Sprawdz przybliżoną lokalizacje adresu IP v. 4</legend>
            <label for="url">http://ip-api.com/json/<input type="text" id="dal" name="url" value="<?= $check ? "$check" : ''?>" require></label>
            <input type="submit" id="spr" name="spr" value="Sprawdź IP">
            </fieldset>
    <fieldset>
        <legend>Zwrócone dane w (json)</legend>
            <?= (file_get_contents("http://ip-api.com/json/".$_POST['url']))?>
        </fieldset>
    <fieldset>
        <legend>Zwrócone dane w (array)</legend>
        <pre>
            <?php print_r(json_decode((file_get_contents("http://ip-api.com/json/".$_POST['url']))));?>
        </pre>
    </fieldset><?php
    }else{
        ?>
        <fieldset>
                <legend>Sprawdz przybliżoną lokalizacje adresu IP v. 4<legend>
                    <label for="url">http://ip-api.com/json/<input type="text" id="dal" name="url" require></label>
                    <input type="submit" id="spr" name="spr" value="Sprawdź IP">
            </fieldset>
            <fieldset>
            <legend>Zwrócone dane w (json)</legend>
            </fieldset>
        <fieldset>
            <legend>Zwrócone dane w (array)</legend>
        </fieldset>

        </form><?php
    }?>
    
</body>
</html>