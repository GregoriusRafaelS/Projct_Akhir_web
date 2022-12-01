<?php
    include 'functions/functions-food.php';
    session_start();

    if(empty($_SESSION["usernameUsers"])){
        header("Location: login-users.php?message=not_logged_in");
        exit;
    }

    if($_GET['category'] == "all"){
        $food = queryFunction("SELECT * FROM food WHERE category='appetizer' OR category='main course' OR category='dessert' OR category='drink' OR category='dan lain lain'");
    }else{
        $food = queryFunction("SELECT * FROM food WHERE category='$_GET[category]'");
    }

    if(isset($_POST['order'])){
        $i = 0;
        $data = queryFunction("SELECT * FROM payment");
        if(count($data) == 0){
            $i = 1;
        }else{
            $data = queryFunction("SELECT * FROM payment ORDER BY id_payment DESC LIMIT 1");
            $i = $data[0]['id_payment'] + 1;
        }

        if(menuOrder($_POST, $i, $_SESSION['idUsers']) > 0){
            echo "
                <script>
                    alert('Order Success');
                </script>
            ";
        }
    }

    $length = end($food);
    
    $panjang = $length['id_food'];
    
    $menu = [
        [
            'id' => 1,
            'name' => "All menu",
            'category' => "all",
            'img' => "assets/logo_background/logo-restaurant.png",
        ],
        [
            'id' => 2,
            'name' => "Appetizer",
            'category' => "appetizer",
            'img' => "assets/logo_background/appetizer.jpg",
        ],
        
        [
            'id' => 3,
            'name' => "Main Course",
            'category' => "main course",
            'img' => "assets/logo_background/main_course.jpg",
        ],
        [
            'id' => 4,
            'name' => "Dessert",
            'category' => "dessert",
            'img' => "assets/logo_background/dessert.jpg",
        ],
        [
            'id' => 5,
            'name' => "Drink",
            'category' => "drink",
            'img' => "assets/logo_background/drink.png",
        ],
        [
            'id' => 6,
            'name' => "Dan lain lain",
            'category' => "dan lain lain",
            'img' => "assets/logo_background/dll.jpg",
        ],
    ]

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
    <div class="menu-main-page">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand logo-restaurant text-light" href="#"><img src="assets/logo_background/logo-restaurant.png" alt="Logo-Restaurant">Western Restaurant</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active navbar-menu">
                <a class="nav-link text-light text-menu" href="home-users.php">Home</a>
            </li>
            <li class="nav-item navbar-menu">
                <a class="nav-link text-light text-menu" href="about-users.php">About</a>
            </li>
            <li class="nav-item navbar-menu">
                <a class="nav-link text-warning text-menu" href="menu-users.php?category=all">Menu</a>
            </li>
            </ul>
        </div>
        <a href="logout-users.php" class="logout"><img src="assets/logo_background/logout.png" alt="logout"></a>
    </nav>
    
    <div>   
        <div class="container-fluid mt-5">
            <div class="d-flex flex-wrap">
                <?php foreach($menu as $row) : ?> 
                    <a href="menu-users.php?category=<?= $row["category"]; ?>" class="ms-4 pt-3 pb-3 btn btn-light" style="width: 200px; border-radius: 50%;">
                        <div>
                            <h5><?= $row["name"]; ?></h5>
                            <img src="<?= $row["img"]; ?>" alt="category-image" style="border-radius: 50%;">    
                        </div>    
                    </a>
                <?php endforeach; ?>    
            </div>
        </div>

        <div>   
        <div class="container-fluid mt-5">
            <form action="" method="POST">
            <div class="d-flex flex-wrap">
                    <?php foreach($food as $row) : ?>
                    <div class="card ms-2 mt-5 pt-3 pb-3" style="width: 18rem;">
                        <div class="card-body">
                            <input type="hidden" name="id_food<?= $row["id_food"]; ?>" id="id_food<?= $row["id_food"]; ?>" value="<?= $row["id_food"]; ?>">
                            <input type="hidden" name="length" id="length" value="<?= $panjang ?>">
                                <h5 class="card-title"><?= $row["nama"]; ?></h5>
                                <p class="card-image"><img src="img/<?= $row["gambar"]; ?>" alt=""></p>
                                
                                <div class="input-group mb-3">
                                    <select class="form-select" id="price<?= $row['id_food']; ?>">
                                        <option selected><?= $row["harga"]; ?></option>
                                        <option value="<?= $row["harga"]; ?>"><?= $row["harga"]; ?></option>
                                    </select>
                                </div>
                                
                                <a href="lihat-menu.php?id_food=<?= $row['id_food']; ?>" class="btn bg-dark text-light">Lihat</a>
                                <input type="number" name="quantity<?= $row['id_food']; ?>" id="quantity<?= $row['id_food']; ?>">
                                <h6 class="card-subtitle mb-2 text-muted mt-2" id="total-price<?= $row['id_food']; ?>">Total Price: <?= $row["harga"]; ?></h6>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <center class="mt-3 pb-3" >
                    <button type="submit" name="order" style="width: 18rem; height: 5rem;">Order Now</button>
                </center>
            </form>
        </div>
    </div>
    </div>

    <script src="assets/js/jsHomeUsers.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
