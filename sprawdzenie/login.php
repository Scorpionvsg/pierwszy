<?php
// login.php - Strona logowania
include 'session.php';
include 'menu.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['login'] === 'admin' && $_POST['password'] === '1234') {
        $_SESSION['login'] = $_POST['login'];
        echo "<p>Udane logowanie</p>";
    } else {
        echo "<p>Błędne dane logowania!</p>";
    }
}
?>
<?php if (!$isLoggedIn): ?>
<form method="post">
    <label>Login: <input type="text" name="login"></label><br>
    <label>Hasło: <input type="password" name="password"></label><br>
    <button type="submit">Zaloguj</button>
</form>
<?php else: ?>
<p>Jesteś zalogowany jako <?php echo $login; ?>.</p>
<?php endif; ?>
<?php include 'footer.php'; ?>