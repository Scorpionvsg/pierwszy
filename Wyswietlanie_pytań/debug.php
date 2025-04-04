

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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