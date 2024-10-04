<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sto elementów listy</title>
    <style>
        ol{
            list-style-type: upper-roman;
        }
        li{
            margin-left: 40px;
        }
        
</style>
</head>
<body>
    
    <ol >
        
    <?php
    for($n=1;$n<=100;$n++){

        echo "<li>To jest $n. element listy</li>";

    }

?>
</ol>
</body>
</html>