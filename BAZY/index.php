<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include_once 'db_con.php'?>

<div class="row">
  <nav class="column-left" style="background-color:rgb(64, 197, 38);">
    <a href="index.php?page=glowna" style="display: block;">Strona główna</a>
    <a href="index.php?page=czytelnicy" style="display: block;">Tabela <i>czytelnicy</i></a>
    <a href="index.php?page=dzialy" style="display: block;">Tabela <i>działy</i></a>
    <a href="index.php?page=ksiazki" style="display: block;">Tabela <i>książki</i></a>
    <a href="index.php?page=pracownicy" style="display: block;">Tabela <i>pracownicy</i></a>
    <a href="index.php?page=stanowiska" style="display: block;">Tabela <i>stanowiska</i></a>
    <a href="index.php?page=wypozyczenia" style="display: block;">Tabela <i>wypożyczenia</i></a>
  </nav>

  <main class="column-right" style="background-color:rgb(212, 231, 133);">
    <?php
            if (isset($_GET['page'])) {
            if (file_exists('pages/' . $_GET['page'] . '.php')) {
                include 'pages/' . $_GET['page'] . '.php';
            } else {
                echo '<h1>Nie znaleziono żądanej strony</h1>';
            }
        } else {
            include 'pages/glowna.php';
        }
    ?>
</main>
</div>

</body>
</html>