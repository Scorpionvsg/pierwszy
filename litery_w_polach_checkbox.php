<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <fieldset>
        <legend>Alfabet</legend>
        <form method="post">
                <?php
                foreach(range('a','z') as $litery){?>
                    <input type="checkbox" id="<?=$litery?>" name="prc[]" value="<?=$litery?>" >
                    <label><?=$litery?></label>
            <?php }?>
            <br>
            <input type="submit" value="wybierz">
        </from>
        <?php
        echo '<p>'
        if()
        ?>
    </fieldset>
</body>
</html>