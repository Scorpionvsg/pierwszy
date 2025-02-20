<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
    <style>
        fieldset{
            border:2px solid blue;
            border-collapse: collapse;
        }
        label{
            margin-right:15px;
        }
    </style>
</head>
<body>
    <form method="post">
    <fieldset>
        <legend>Alfabet</legend>
        
                <?php
                foreach(range('a','z') as $l){
                    if(isset($_POST["litery"])&& in_array($l,$_POST["litery"])){
                        $checked="checked";
                    }else{
                        $checked="";
                    }?>
                    <input type="checkbox" <?=$checked?> id="<?=$l?>" name="litery[]" value="<?=$l?>"<?=$l?>>
                    <label><?=$l?></label>
            <?php }?>
            <br>
            <input type="submit" id="wybierz" name="Wybierz" value="wybierz"><br><br>
        
        <?php
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            if(isset($_POST["litery"])){
                if(count($_POST["litery"])===1){
                    echo ("Ta litera została wybrana: ");
                }else{
                    echo ("Te litery zostały wybrane: ");
                }
            echo implode(", ",$_POST["litery"]).".";
            }else{
                echo ("Żadna litera nie została wybrana.");
            }
            }
        
        ?>
    </fieldset>
    </from>
</body>
</html>