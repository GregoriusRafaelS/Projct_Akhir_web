<?php
    include 'functions/functions-employee.php';

    // check apakah tombol register sudah ditekan
    if(isset($_POST["register"])){
        if(register($_POST) > 0){
            echo "<script>
                    alert('Succded Adding New User');
                </script>
            ";
            header("Location: login-employee.php");
        }else{
            echo mysqli_error($connect);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link rel="stylesheet" href="assets/css/styleRegisterLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="main-page d-flex flex-column justify-content-center align-items-center">

    <div>
        <div class="text-register">REGISTER</div>
        <div class="container-main-page">
            <form action="" method="post"> 
                    <table>    
                        <tr>
                            <td><label for="username" class="mb-2"><img src="assets/logo_background/username.png" alt=""></label></td>
                            <td><label for="username" class="mb-2">Username</label></td>
                            <td><label for="username" class="mb-2">:</label></td>
                            <td><input type="text" name="username" id="username" class="input-user-password mb-2" placeholder="  Buat Username"></td>
                        </tr>
                        <tr>
                            <td><label for="password1" class="mb-2"><img src="assets/logo_background/password.png" alt=""></label></td>
                            <td><label for="password1" class="mb-2">Password</label></td>
                            <td><label for="password1" class="mb-2">:</label></td>
                            <td><input type="password" name="password1" id="password1" class="input-user-password mb-2" placeholder="  Buat Password"></td>
                        </tr> 
                        <tr>
                            <td><label for="password2" class="mb-2"><img src="assets/logo_background/password.png" alt=""></label></td>
                            <td><label for="password2" class="mb-2">Confirm password</label></td>
                            <td><label for="password2" class="mb-2">:</label></td>
                            <td><input type="password" name="password2" id="password2" class="input-user-password mb-2" placeholder="  Ulangi Password"></td>
                        </tr>
                    </table>
                    <center>
                        <button type="submit" name="register" class="mt-2 container-register">REGISTER</button>
                    </center>
            </form>
        </div>
        </div>
        <div class="text-login">Sudah mempunyai akun ? Silahkan <a href="login-employee.php"> LOGIN</a></div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>