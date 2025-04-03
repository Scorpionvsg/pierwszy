<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odpowiedź</title>
    <style>
        div{
            margin:auto;
            Max-width:700px;
        }
    </style>
</head>
<body>
<?php include "debug.php";?>
<form>
        <div>
            <h1>Prosty quiz z OpenTDB</h1>
            <p>Trudność: <?=$_SESSION["difficulty"]; ?></p>
            <p>Kategoria: <?=$_SESSION["category"]; ?></p>
            <p>Pytanie: <?=$_SESSION["question"]; ?></p>
            <?php/* 
                if(){

                }else{

                }*/
            ?> 
           <br>
           <a href="pytanie.php">kolejne pytanie</a>
        </div>
    </form>

</body>
</html>