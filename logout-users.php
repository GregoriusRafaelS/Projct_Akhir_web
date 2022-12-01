<?php
    session_start();

    session_destroy();

    setcookie('idUsers', '', time() - 3600);
    setcookie('usernameUsers', '', time() - 3600);
    header("Location: login-users.php?message=log_out");
    exit;
?>