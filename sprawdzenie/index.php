<?php
// index.php - Strona główna
include 'session.php';
include 'menu.php';
?>
<h1>Witaj na stronie!</h1>
<p><?php echo $isLoggedIn ? "Witaj, $login!" : "Witaj gościu!"; ?></p>
<?php include 'footer.php'; ?>