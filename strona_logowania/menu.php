<div>
    <a class="button <?= (basename($_SERVER['PHP_SELF'])== 'Strona_glowna.php') ? 'button_active':''?>"  href="Strona_glowna.php">Strona główna</a>

    <a class="button <?= (basename($_SERVER['PHP_SELF'])== 'logowanie.php') ? 'button_active':''?>" href="logowanie.php">Logowanie</a> 

    <a class="button <?= (basename($_SERVER['PHP_SELF'])== 'Panel_admin.php') ? 'button_active':''?>" href="Panel_admin.php">Panel administracyjny</a>
</div>