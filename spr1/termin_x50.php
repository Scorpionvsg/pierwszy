<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>terminy</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid lightgray;
            padding:5px;
        }

</style>
</head>
<body>
    <table>
    <caption>Terminy</caption>
        <?php
            for($i=1;$i<=50;$i++){
                        $term_value = 'termin_'.$i;
                        $month_year_name = 'miesac_rok_'.$i;?>
                        <tr>
                            <td>
                                <label for="termin_<?=$i?>">Termin <?=$i?>:</label>
            </td>
                            <td>
                                <input type="month" name="<?=$month_year_name?>" value="">
                            </td>
                        </tr>
                    <?php
                    }
    ?>
    <tr><td colspan="2" style="text-align:center"><input type="submit" name="Zapisz" value="Zatwierdź"></td></tr>
        </table>

</body>
</html>