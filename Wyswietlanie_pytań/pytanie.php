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
    //$con="{\"response_code\":0,\"results\":[{\"type\":\"multiple\",\"difficulty\":\"easy\",\"category\":\"Science & Nature\",\"question\":\"What is the hottest planet in the Solar System?\",\"correct_answer\":\"Venus\",\"incorrect_answers\":[\"Mars\",\"Mercury\",\"Jupiter\"]}]}";
    
    
        $_SESSION['url']="https://opentdb.com/api.php?amount=1&type=multiple";
        $_SESSION['con']=file_get_contents($_SESSION['url']);
        $data=json_decode($_SESSION['con'],true);
        $dif=$data["results"][0]["difficulty"];
        $catg=$data["results"][0]["category"];
        $quest=$data["results"][0]["question"];
        $cor_ans=$data["results"][0]["correct_answer"];
        $all_ans=$data["results"][0]["incorrect_answers"];
        $all_ans[]=$cor_ans;
        shuffle($all_ans);
        $_SESSION["difficulty"]=$dif;
        $_SESSION["category"]=$catg;
        $_SESSION["question"]=$quest;
        $_SESSION["correct_answer"]=$cor_ans;
        $_SESSION["licz"]=0;
    
    
        ?>
    
    <form action="odpowiedź" method="post">
        <div>
            <h1>Prosty quiz z OpenTDB</h1>
            <p>Trudność: <?=$_SESSION["difficulty"]; ?></p>
            <p>Kategoria: <?=$_SESSION["category"]; ?></p>
            <p>Pytanie: <?=$_SESSION["question"]; ?></p>
            
            <?php
            foreach($all_ans as $tmp){?>
                <input type=radio name="user" value="<?=$tmp?>"><label for="btw[]"><?=$tmp?></label><br>
            <?php } ?><br>
            <input type=submit name="zatw" value="Sprawdź odpowiedź">
        </div>
    </form>


    

</body>
</html>