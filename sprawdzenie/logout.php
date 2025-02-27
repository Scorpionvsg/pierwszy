<?php
// logout.php - Wylogowanie
session_start();
session_destroy();
header("Location: index.php");
?>