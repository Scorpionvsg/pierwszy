<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pytanie</title>
    <style>
        div{
            margin:auto;
            Max-width:700px;
        }
    </style>
</head>
<body>
    <?php
    include "debug.php";
    $url="https://opentdb.com/api.php?amount=1&type=multiple";
    $con=file_get_contents($url);
    $data=json_decode($con,true);
    $dif=$data["results"][0]["difficulty"];
    $catg=$data["results"][0]["category"];
    $quest=$data["results"][0]["question"];
    $cor_ans=$data["results"][0]["correct_answer"];
    $all_ans=$data["results"][0]["incorect_answers"];
    $all_ans[]=$cor_ans;
    shuffle($all_ans);
    ?>
    
        <?= json_encode($con); ?>
        <pre>
        <h2>JSON</h2>
            <?php print_r(json_decode($con)) 
            //zmienne sesji
            // zmiennse post?>
        </pre>
        <pre>
            <h2>$_SESSION</h2>
            <?php print_r($_SESSION) ?>
        </pre>
        <pre>
            <h2>$_POST</h2>
            <?php print_r($_POST) ?>
        </pre>
        
    
    <form action="odpowiedź" method="post">
        <div>
            <h1>Pytanie</h1>
            <?php
            foreach($all_ans as $tmp){?>
                <input type=radio name="btw[]" value=$tmp><label for=$tmp><?=$tmp?></label>
            <?php } ?>
        </div>
    </form>




</body>
</html>