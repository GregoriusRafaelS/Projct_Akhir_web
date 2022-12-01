<?php
    session_start();
    include 'functions/functions-employee.php';

    // check cookie
    if(!empty($_COOKIE["idEmployeee"]) && !empty($_COOKIE["usernameEmployee"])){
        $query = "SELECT * FROM employee WHERE id=$_COOKIE[idEmployeee]";
        $result = mysqli_query($connect, $query);

        $row = mysqli_fetch_assoc($result);

        $_SESSION["usernameEmployee"] = $row["username"];
    }

    if(!empty($_SESSION["usernameEmployee"])){
        header("Location: home-employee.php");
        exit;
    }
    
    // check apakah tombol login sudah ditekan
    if(isset($_POST["login"])){
        if(login($_POST) > 0){
            echo "<script>
                    alert('Succded Login');
                </script>
            ";
        }else{
            header("Location: login-employee.php?message=failed");
        }
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Employee</title>
    <link rel="stylesheet" href="assets/css/styleRegisterLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="main-page d-flex flex-column justify-content-center align-items-center">
    <a href="index.php" class="btn btn-dark">Kembali</a>
    <div>
        <div class="text-register">LOGIN</div>

        <?php if(isset($_GET["message"])) : ?>
            <?php if($_GET["message"] == "failed") : ?>
                <p class="text-info">Your username or password is wrong</p>
            <?php elseif($_GET["message"] == "not_logged_in") : ?>
                <p class="text-info">Login first, before entering the main page</p>
            <?php elseif($_GET["message"] == "log_out") : ?>
                <p class="text-info">Success log out</p>
            <?php endif; ?>
        <?php endif; ?>

        <div class="container-main-page">
            <form action="" method="post"> 
                    <table>    
                        <tr>
                            <td><label for="username" class="mb-2"><img src="assets/logo_background/username.png" alt=""></label></td>
                            <td><label for="username" class="mb-2">Username</label></td>
                            <td><label for="username" class="mb-2">:</label></td>
                            <td><input type="text" name="username" id="username" class="input-user-password mb-2" placeholder="  Username"></td>
                        </tr>
                        <tr>
                            <td><label for="password1" class="mb-2"><img src="assets/logo_background/password.png" alt=""></label></td>
                            <td><label for="password1" class="mb-2">Password</label></td>
                            <td><label for="password1" class="mb-2">:</label></td>
                            <td><input type="password" name="password1" id="password1" class="input-user-password mb-2" placeholder="  Password"></td>
                        </tr> 
                        <tr>
                            <td><input type="checkbox" name="remember" id="remember"></td>
                            <td colspan="2"><label for="remember">Remember me</label></td>
                        </tr>
                    </table>
                    <center>
                        <button type="submit" name="login" class="mt-2 container-register">LOGIN</button>
                    </center>
            </form>
        </div>
        </div>
        <div class="text-login">Belum mempunyai akun ? Silahkan buat akun di <a href="register-employee.php"> REGISTER</a></div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>