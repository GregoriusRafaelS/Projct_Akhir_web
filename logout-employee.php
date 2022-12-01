<?php
    session_start();

    session_destroy();

    setcookie('idEmployeee', '', time() - 3600);
    setcookie('usernameEmployee', '', time() - 3600);
    header("Location: login-employee.php?message=log_out");
    exit;
?>