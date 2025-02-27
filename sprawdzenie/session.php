<?php
// session.php - Obsługa sesji
session_start();
$login = isset($_SESSION['login']) ? $_SESSION['login'] : '';
$isLoggedIn = !empty($login);
?>