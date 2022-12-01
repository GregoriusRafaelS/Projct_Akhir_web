<?php
    include 'functions/functions-food.php';
    session_start();

    if(empty($_SESSION["usernameUsers"])){
        header("Location: login-users.php?message=not_logged_in");
        exit;
    }
    $food = queryFunction("SELECT * FROM 
                food  WHERE 
            category='appetizer' OR category='main course' OR category='dessert' OR category='drink' && id_food = '$_GET[id_food]'");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Users</title>
    <link rel="stylesheet" href="assets/css/styleHomeUsers.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="main-page">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand logo-restaurant text-light" href="#"><img src="assets/logo_background/logo-restaurant.png" alt="Logo-Restaurant">Western Restaurant</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active navbar-menu">
                <a class="nav-link text-warning text-menu" href="home-users.php">Home</a>
            </li>
            <li class="nav-item navbar-menu">
                <a class="nav-link text-light text-menu" href="about-users.php">About</a>
            </li>
            <li class="nav-item navbar-menu">
                <a class="nav-link text-light text-menu" href="menu-users.php?category=all">Menu</a>
            </li>
            </ul>
        </div>
        <a href="logout-users.php" class="logout"><img src="assets/logo_background/logout.png" alt="logout"></a>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 ps-5">
                <h1 class="text-hello">Hello, <?= $_SESSION['usernameUsers']; ?></h1>
                <p class="text-welcome">Ini pesanan yang ingin anda lihat ! <?= $food[0]["nama"] ?></p>
                
                

            </div>
            <div class="col-6">
            <div class="card" style="width: 600px; margin: 50px; padding:50px;">
            <center>
                <img class="card-img-top" src="img/<?= $food[0]['gambar']; ?>" alt="logo-makanna" style="width: 400px;">
            </center>
                    <div class="card-body bg-dark text-light mt-5 rounded">
                        <table>
                            <tr>
                                <td>Keterangan</td>
                                <td> : </td>
                                <td><p class="card-text text-start"><?= $food[0]['keterangan']; ?></p></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td> : </td>
                                <td><p class="card-text"><?= $food[0]['harga']; ?></p></td>
                            </tr>
                            <tr>
                                <td>Rating</td>
                                <td> : </td>
                                <td><p class="card-text"><?= $food[0]['rating']; ?></p></p></td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td> : </td>
                                <td><p class="card-text"><?= $food[0]['category']; ?></p></td>
                            </tr>
                        </table>
                        
                        
                        
                        
                    </div>
                </div>                
            </div>
        </div>
    </div>

    </div>

    <script src="assets/js/jsHomeUsers.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>