<?php
    session_start();
    include 'functions/functions-food.php';

    if(empty($_SESSION["usernameEmployee"])){
        header("Location: login-employee.php?message=not_logged_in");
        exit;
    }

    if(deleteFood($_GET["id"]) > 0){
        echo " 
            <script>
                alert('succeed deleting food');
                document.location.href = 'home-employee.php';
            </script>
            ";
    }else{
        echo " 
            <script>
                alert('succeed deleting food');
                document.location.href = 'home-employee.php';
            </script>
            ";
    }
?>