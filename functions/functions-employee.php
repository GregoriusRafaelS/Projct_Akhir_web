<?php 
    include 'connection.php';
    
    function register($data){
        global $connect;

        $username = strtolower(stripslashes($data["username"]));
        $password1 = mysqli_real_escape_string($connect, $data["password1"]);
        $password2 = mysqli_real_escape_string($connect, $data["password2"]);

        // check apakah username sudah ada dalam table atau tidak
        $query = "SELECT username FROM employee WHERE username = '$username'";
        $result = mysqli_query($connect, $query);

        if(mysqli_fetch_assoc($result)){
            echo "<script>
                  alert('Username has been used !');  
            </script>
            ";
            return false;
        }

        // check konfirmasi password
        if($password1 != $password2){
            echo "<script>
                alert('Confirmation password does not match');
            </script>
            ";
            return false;
        }

        // encryption password
        $password1 = password_hash($password1, PASSWORD_DEFAULT);


        // lolos pengecheckan 
        $query = "INSERT INTO employee
                    VALUES
                    ('', '$username', '$password1')           
            ";

        mysqli_query($connect, $query);

        return mysqli_affected_rows($connect);
    }

    function login($data){
        global $connect;

        $username = $data["username"];
        $password = $data["password1"];

        $query = "SELECT * FROM employee WHERE username = '$username'";
        $result = mysqli_query($connect, $query);

        // if($database = mysqli_fetch_assoc($result)){
        //     if(password_verify($password, $database["password"])){
        //         header("Location: index.php");
        //         return 1;
        //     }
        // }
        
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            
            if(password_verify($password, $row["password"])){
                
                $_SESSION["usernameEmployee"] = $row["username"];
                $_SESSION["idEmployee"] = $row["id_employee"];

                // check remember me untuk cookie
                if(isset($_POST["remember"])){
                    setcookie('Employeee', $row["id"], time()+60);
                    setcookie('usernameEmployeee', hash( 'sha256', $row["username"]), time()+60);
                }

                header("Location: home-employee.php");
                return 1;
            }
        }

        return 0;
    }
?>