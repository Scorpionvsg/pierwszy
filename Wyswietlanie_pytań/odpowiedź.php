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
<?php include "debug.php";
?>
<form>
        <div>
            <h1>Prosty quiz z OpenTDB</h1>
            <p>Trudność: <?=$_SESSION["difficulty"]; ?></p>
            <p>Kategoria: <?=$_SESSION["category"]; ?></p>
            <p>Pytanie: <?=$_SESSION["question"]; ?></p>
            <?php 
                if($_POST['user']==$_SESSION["correct_answer"]){ ?>
                    <p>Twoja odpowiedź: <?=$_POST['user'] ?></p>
                    <p>✅Odpowiedź Poprawna</p>
                <?php }else{ ?>
                    <p>Twoja odpowiedź: <?=$_POST['user'] ?></p>
                    <p> ❌Odpowiedz błędna </p>
                    <p>Poprawna odpowiedz: <?=$_SESSION['correct_answer'] ?></p>
                <?php }
            ?> 
           <br>
           <a href="pytanie.php">kolejne pytanie</a>
        </div>
    </form>
<?php session_destroy();?>
</body>
</html>