<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$con="{\"response_code\":0,\"results\":[{\"type\":\"multiple\",\"difficulty\":\"easy\",\"category\":\"Science & Nature\",\"question\":\"What is the hottest planet in the Solar System?\",\"correct_answer\":\"Venus\",\"incorrect_answers\":[\"Mars\",\"Mercury\",\"Jupiter\"]}]}";
        /*$url="https://opentdb.com/api.php?amount=1&type=multiple";
        $con=file_get_contents($url);*/?>
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
</body>
</html>