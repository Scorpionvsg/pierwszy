<div class="menu">
    <a href="index.php">Strona Główna</a>
    <a href="login.php">Logowanie</a>
    <a href="admin.php">Administracja</a>
    <?php if ($isLoggedIn): ?>
        <a href="logout.php">Wyloguj</a>
    <?php endif; ?>
</div>