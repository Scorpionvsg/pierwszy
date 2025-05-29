<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

.column-left {
  float: left;
  width: 25%;
  height: 100%;
}

.column-right {
  float: left;
  width: 75%;
  padding: 15px;
  height: 100%;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

a:active {
  color: darkgreen;
  background-color: transparent;
  text-decoration: underline;
}

a{
    padding:15px;
    text-decoration: none;
    color: white;
    font-size:17px;
}

a:hover {
  background-color: yellow;
}

</style>
</head>
<body>


<div class="row">
  <nav class="column-left" style="background-color: #626F47;">
    <a href="index.php?page=glowna" style="display: block;">Strona główna</a>
    <a href="index.php?page=czytelnicy" style="display: block;">Tabela <i>czytelnicy</i></a>
    <a href="index.php?page=dzialy" style="display: block;">Tabela <i>działy</i></a>
    <a href="index.php?page=ksiazki" style="display: block;">Tabela <i>książki</i></a>
    <a href="index.php?page=pracownicy" style="display: block;">Tabela <i>pracownicy</i></a>
    <a href="index.php?page=stanowiska" style="display: block;">Tabela <i>stanowiska</i></a>
    <a href="index.php?page=wypozyczenia" style="display: block;">Tabela <i>wypożyczenia</i></a>
  </nav>

  <main class="column-right" style="background-color: #A4B465;">
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