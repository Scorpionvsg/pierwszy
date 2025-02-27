<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
    <title>Terminy</title>
    <style>
        body{
            background-color:burlywood;
            padding:100px;
            font-family: "Sigmar", serif;
        }
        table{
            border-collapse: collapse;
            background-color:coral;
        }
        td{
            border: 1px solid gray;
            padding:10px;
        }
        input{
            background-color:peru;
            border-color: sandybrown;
            font-family: "Sigmar", serif;
        }
        input[type="checkbox"]{
            accent-color:tan;
        }
        
        
    </style>
</head>
<body>
    <form method="post">
        <table>
            <caption>Terminy</caption>
            <?php
            $save = false;
            for($i=1;$i<=5;$i++){
                $term_value = 'termin_'.$i;
                $month_year_name = 'miesac_rok_'.$i;
                $checked = isset($_POST['terminy']) && (in_array($term_value, $_POST['terminy'] ?? []) && !empty($_POST[$month_year_name]));
                $month_year_value = $checked ? $_POST[$month_year_name]:'';
                $save = ($save || $month_year_value) ? true : false; ?>
                <tr>
                    <td>
                        <label for="termin_<?=$i?>">Termin<?=$i?>:</label>
                    </td>
                    <td>
                         <input <?= $checked ?> id=termin_<?=$i?> name="terminy[]" type="checkbox" value="<?= $term_value?>" <?=$checked ? 'checked' : '' ?>> 
                    </td>
                    <td>
                        <input type="month" name="<?=$month_year_name?>" value="<?=$month_year_value?>">
                    </td>
                </tr>
            <?php
            }
            ?>
            <tr><td colspan="3" style="text-align:center"><input type="submit" name="Zapisz" value="Zapisz"></td></tr>
        </table>
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD']==='POST'){
        if($save){
            $filename = 'terminy.txt';
            $file = fopen($filename,'a');
            $myData = date('Y-m-d H:i:s')."\n". print_r($_POST,true);
            fwrite($file,$myData);
            fclose($file);
            echo '<p>Dane zostały zapisane do pliku ',$filename. '</p>';
        }
    }?>
    <pre><?php
    print_r($_POST);
    var_dump($save);
    ?>
</pre>
</body>
</html>