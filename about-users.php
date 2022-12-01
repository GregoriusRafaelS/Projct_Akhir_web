<?php
    session_start();

    if(empty($_SESSION["usernameUsers"])){
        header("Location: login-users.php?message=not_logged_in");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Users</title>
    <link rel="stylesheet" href="assets/css/styleHomeUsers.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="about-users-background1">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand logo-restaurant text-light" href="#"><img src="assets/logo_background/logo-restaurant.png" alt="Logo-Restaurant">Western Restaurant</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-control=="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active navbar-menu">
                <a class="nav-link text-light text-menu" href="home-users.php">Home</a>
            </li>
            <li class="nav-item navbar-menu">
                <a class="nav-link text-menu text-warning" href="about-users.php">About</a>
            </li>
            <li class="nav-item navbar-menu">
                <a class="nav-link text-light text-menu" href="menu-users.php?category=all">Menu</a>
            </li>
            </ul>
        </div>
        <a href="logout-users.php" class="logout"><img src="assets/logo_background/logout.png" alt="logout"></a>
    </nav>
    
    <div class="container">
        <center>
            <h1 class="text-warning" style="font-size: 100px; margin-top: 80px; font-weight: bold;">About Us</h1>
        </center>
        <center>
            <p class="text-light" style="font-size: 40px; margin-top: 40px;">Kami ada dengan selallu menyediakan menu terbaik, untuk kepuasan dan kenikmatan pelanggan kami, sehingga tercipta kenyamanan saat menyantap hidangan kami</p>
        </center>
    </div>
    
    </div>

    <script src="assets/js/jsHomeUsers.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>