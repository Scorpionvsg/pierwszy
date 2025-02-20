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
            for($i=1;$i<=5;$i++){?>
                <tr>
                    <td><label for="termin_<?=$i?>">Termin<?=$i?>:</label></td>
                    <td> <input type="checkbox" id=termin_<?=$i?> name="terminy[]" value="termin_<?=$i?>"> </td>
                    <td><input type="month" name="months[]"></td>
                </tr>
            <?php
            }
            ?>
            <tr><td colspan="3" style="text-align:center"><input type="submit" name="Zapisz" value="Zapisz"></td></tr>
        </table>
    </form>
    
    <?php 
    print_r($_POST);
    ?>

</body>
</html>