<?php
// admin.php - Strona administracyjna
include 'session.php';
include 'menu.php';
?>
<h1>Panel administracyjny</h1>
<p><?php echo $isLoggedIn ? "Jesteś zalogowany jako $login." : "Nie masz dostępu."; ?></p>
<?php include 'footer.php'; ?>