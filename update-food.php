<?php
    session_start();
    include 'functions/functions-food.php';

    if(empty($_SESSION["usernameEmployee"])){
        header("Location: login-employee.php?message=not_logged_in");
        exit;
    }

    // check apakah tombol submit sudah ditekan
    if(isset($_POST["submit"])){
        // check apakah data berhasil ditambahkan
        if(updateFood($_POST) > 0){
            echo " 
                <script>
                    alert('succeed updating food');
                    document.location.href = 'home-employee.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('failed updating food');
                    document.location.href = 'home-employee.php';
                </script>
            ";
        }
    }
    
    $query = "SELECT * FROM food WHERE id_food=$_GET[id]";
    $fd = queryFunction($query)[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Foods</title>
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
                <a class="nav-link text-light text-menu" href="about-employee.php">About</a>
            </li>
            <li class="nav-item navbar-menu">
                <a class="nav-link text-light text-menu" href="menu-employee.php">Menu</a>
            </li>
            </ul>
        </div>
        <a href="logout-users.php" class="logout"><img src="assets/logo_background/logout.png" alt="logout"></a>
    </nav>


    <div class="container-main">
        <center class="m-3">
            <h2>Update Type of Food</h2>
        </center>
        <form action="" method="post" enctype="multipart/form-data" class="d-flex flex-column justify-content-center ms-5 me-5">
            <input type="hidden" name="id" value="<?= $_GET["id"]; ?>">
            <input type="hidden" name="oldImage" value="<?= $fd["gambar"]; ?>">
            <table>
                <tr>
                    <td> <label class="mb-4" for="nama">Nama</label> </td>
                    <td> : </td>
                    <td><input class="form-control" type="text" name="nama" id="nama" value="<?= $fd["nama"]; ?>" required> </td>
                </tr>
                <tr>
                    <td> <label class="mb-4" for="keterangan">Keterangan</label> </td>
                    <td> : </td>
                    <td><input class="form-control" type="text" name="keterangan" id="keterangan" value="<?= $fd["keterangan"];?>" required> </td>
                </tr>
                <tr>
                    <td> <label class="mb-4" for="harga">Harga</label> </td>
                    <td> : </td>
                    <td><input class="form-control" type="text" name="harga" id="harga" value="<?= $fd["harga"];?>" required> </td>
                </tr>
                <tr>
                    <td> <label class="mb-4" for="rating">Rating</label> </td>
                    <td> : </td>
                    <td><input class="form-control" type="text" name="rating" id="rating" value="<?= $fd["rating"];?>" required> </td>
                </tr>
                <tr>
                    <td> <label class="mb-4" for="category">Category</label> </td>
                    <td> : </td>
                    <td>
                        <div class="input-group mb-3 form-check-inline">
                            <select class="custom-select form-select" name="category" id="inputGroupSelect02">
                                <option selected>Choose...</option>
                                <option value="appetizer">Appetizer</option>
                                <option value="main course">Main Course</option>
                                <option value="dessert">Dessert</option>
                                <option value="drink">Drink</option>
                                <option value="dan lain lain">Dan-lain-lain</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td> <label class="mb-4" for="gambar">Gambar</label> </td>
                    <td> : </td>
                    <td><input type="file" name="gambar" id="gambar"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td>:</td>
                    <td><img src="img/<?= $fd['gambar']; ?>" alt="iamge"></td>
                </tr>
            </table>
            <button type="submit" name="submit" class="mt-4">Update Food</button>
        </form>
    </div>


    <script src="assets/js/jsHomeUsers.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>