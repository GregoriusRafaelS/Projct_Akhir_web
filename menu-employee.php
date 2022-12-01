<?php
    session_start();
    include 'functions/functions-food.php';

    if(empty($_SESSION["usernameEmployee"])){
        header("Location: login-employee.php?message=not_logged_in");
        exit;
    }

    // ambil data dari tabel makanan / query data makanan
    $query = "SELECT * FROM food";
    $food = queryFunction($query);
 
     // check apakah tombol cari sudah dibuat
     if(isset($_POST["find"])){
         $food = findFood($_POST["find"]);
     }
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
                <a class="nav-link text-warning text-menu" href="menu-employee.php">Menu</a>
            </li>
            </ul>
        </div>
        <a href="logout-employee.php" class="logout"><img src="assets/logo_background/logout.png" alt="logout"></a>
    </nav>

    <center class="mt-5">
         <h2>Selamat Datang <?= $_SESSION["usernameEmployee"] ?></h2>
         <h2>Data Makanan</h2>
         
         <form action="" method="post">
             <input type="text" name="find" placeholder="Finding you'r food" size="50" autocomplete="off" autofocus>
             <button type="submit" name="submit">Find</button>
         </form>
         <br></br>
    
         <a href="add-food.php"><button>Add Food Data</button></a>
         <br></br>
         
         <?php $i=1; ?>
         <table class="table table-bordered table-dark" cellpadding="10" cellspacing="0">
             <tr>
                 <th>No.</th>
                 <th>Aksi</th>
                 <th>Gambar</th>
                 <th>Nama</th>
                 <th>Keterangan</th>
                 <th>Harga</th>
                 <th>Rating</th>
             </tr>
             <?php foreach($food as $fd ) : ?>
             <tr>
                 <td><?= $i ?></td>
                 <td><a class="btn btn-light mt-3" href="update-food.php?id=<?= $fd["id_food"] ?>">Update</a><a class="btn btn-light mt-3" href="delete-food.php?id=<?= $fd["id_food"] ?>" onclick="return confirm('Are you sure want to delete it?');">Delete</a></td>
                 <td><img src="<?= "img/$fd[gambar]"; ?>" alt="Food Picture"></td>
                 <td><?= $fd["nama"]; ?></td>
                 <td><?= $fd["keterangan"]; ?></td>
                 <td><?= $fd["harga"]; ?></td>
                 <td><?= $fd["rating"]; ?></td>
             </tr>
             <?php $i++; endforeach; ?>
         </table>
     </center>
    </div>

    <script src="assets/js/jsHomeUsers.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>