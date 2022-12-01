<?php
    session_start();
    include 'functions/functions-food.php';

    if(empty($_SESSION["usernameEmployee"])){
        header("Location: login-employee.php?message=not_logged_in");
        exit;
    }

    if(isset($_GET['message'])){
        if(addHistory($_GET['message'], $_SESSION['idEmployee']) > 0){
            echo " 
                <script>
                    alert('succeed deleting food');
                    document.location.href = 'pesanan-employee.php';
                </script>
            ";
        }
    }

    $payment_Max = queryFunction("SELECT * FROM history_payment ORDER BY id_payment DESC LIMIT 1");
    $length = $payment_Max[0]['id_payment'];
    $orders = [];
    for($i=1; $i<=$length; $i++){
        $query = "SELECT a.id_payment AS payment, b.username AS username, a.quantity AS quantity, c.nama AS nama
                    FROM history_payment AS a
                    INNER JOIN users b ON a.id_user = b.id_user
                    INNER JOIN food c ON a.id_food = c.id_food
                    WHERE a.id_payment = '$i'";
    
        $orders[$i] = queryFunction($query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Employee</title>
    <link rel="stylesheet" href="assets/css/styleHomeUsers.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="employee-about-page">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand logo-restaurant text-light" href="#"><img src="assets/logo_background/logo-restaurant.png" alt="Logo-Restaurant">Western Restaurant</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-control=="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active navbar-menu">
                <a class="nav-link text-light text-menu" href="home-employee.php">Home</a>
            </li>
            <li class="nav-item navbar-menu">
                <a class="nav-link text-light text-menu" href="pesanan-employee.php">Pesanan</a>
            </li>
            <li class="nav-item navbar-menu">
                <a class="nav-link text-light text-menu" href="menu-employee.php">Menu</a>
            </li>
            </ul>
        </div>
        <a href="logout-employee.php" class="logout"><img src="assets/logo_background/logout.png" alt="logout"></a>
    </nav>
    <!-- End Navbar -->

    <div class="container mt-4 p-3 d-flex flex-column">
    <a href="pesanan-employee.php" class="btn btn-dark">Pesanan Menu</a>    
    <?php $i= 0; $u=1?>
        <?php foreach($orders as $order) { ?>
            <?php $length = count($order);?>
            <?php if($length > 0) : ?>
                <?php $i = $order[$length-1]['payment']; ?>
                <div class="d-flex flex-column">
                    <div class="row mt-4">
                        <div class="col-1">
                            <p class="vertical-text"><?= $order[$length-1]['username']; ?></p>
                        </div>
                        <div class="col-3">
                            <img src="assets/logo_background/picture-profil<?= ($u%3) + 1 ?>.png" alt="picture-profile">
                        </div>
                        <div class="col-5">
                            <?php foreach($order as $orde) { ?>
                                <div class="column">
                                    <div class="row mt-3" style="font-family: poppins; font-size: 20px">
                                    <em>
                                        <?= $orde['quantity']; ?>
                                        x
                                        <?= $orde['nama']; ?>
                                    </em>    
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="col-3 pt-5">
                                <center>
                                    <a href="#>" name="ordered" class="btn btn-dark">Lihat kebih lanjut</a>
                                </center>
                            </div>
                        </div>    
                        <br>
                        <img src="assets/logo_background/line.png" alt="line">
                    </div>
                    <?php endif; ?>
                    <?php $u++; ?>
            <?php }; ?>
            
    

    </div>
    

    <script src="assets/js/jsHomeUsers.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>