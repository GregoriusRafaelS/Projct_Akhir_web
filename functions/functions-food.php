<?php
    include 'connection.php';

    function queryFunction($query){
        global $connect;
        $rows = [];
        $result = mysqli_query($connect, $query); 

        // ambil data (fetch) food dari object result
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function addFood($data){
        global $connect;
        $nama = htmlspecialchars($data["nama"]);
        $keterangan = htmlspecialchars($data["keterangan"]);
        $harga = htmlspecialchars($data["harga"]);
        $rating = htmlspecialchars($data["rating"]);
        $category = htmlspecialchars($data["category"]);

        // upload gambar
        $gambar = upload();
        if(!$gambar){
            return false;
        }

        // query insert data
        $query = "INSERT INTO food
                    VALUES
                ('', '$nama', '$keterangan', '$harga', '$rating', '$gambar', '$category')
                ";
        mysqli_query($connect, $query);

        return mysqli_affected_rows($connect);
    }

    function upload(){
        $fileName = $_FILES['gambar']['name'];
        $fileSize = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // check apakah tidak ada gambar yang diupload
        if($error === 4){
            echo "<script>
                    alert('Select the image first !');
                </script>";
            return false;
        }

        // check apakah user upload format gambar
        $validImageFormat = ['jpg' , 'jpeg', 'png'];
        $imageFormat = explode('.', $fileName);
        $imageFormat = strtolower(end($imageFormat));

        if(!in_array($imageFormat, $validImageFormat)){
            echo "<script>
                    alert('Upload image with format jpg / jpeg / png !');
                </script>";
            return false;
        }

        // check jika ukurannya terlalu besar
        if($fileSize > 1000000){
            echo "<script>
                    alert('Your file is to large !');
                </script>";
            return false;
        }

        // lolos pengecekan, gambar diupload
        // generate nama gambar baru
        $newFileName = uniqid();
        $newFileName .= '.' . $imageFormat ;
        move_uploaded_file($tmpName, 'img/' . $newFileName);

        return $newFileName;
    }


    function deleteFood($id){
        global $connect;

        $query = "SELECT gambar FROM food WHERE id_food=$id";
        $result = mysqli_query($connect, $query);
        $file = mysqli_fetch_assoc($result);
        
        $fileName = implode('.', $file);
        $location = "img/$fileName";

        // check apakah file ada dilokasi penyimpanan
        if(file_exists($location)){
            unlink($location);
        }

        $query = "DELETE FROM food WHERE id_food=$id";
        mysqli_query($connect, $query);
        
        return mysqli_affected_rows($connect);
    }

    function updateFood($data){
        global $connect;

        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $keterangan = htmlspecialchars($data["keterangan"]);
        $harga = htmlspecialchars($data["harga"]);
        $rating = htmlspecialchars($data["rating"]);
        $category = htmlspecialchars($data["category"]);
        $gambar = htmlspecialchars($data["gambar"]);
        $oldImage = htmlspecialchars($data["oldImage"]);

        // check user pilih gambar baru atau tidak
        if($_FILES['gambar']['error'] === 4){
            $gambar = $oldImage;
        }else{
            $query = "SELECT gambar FROM food WHERE id_food=$id";
            $result = mysqli_query($connect, $query);
            $file = mysqli_fetch_assoc($result);
            
            $fileName = implode('.', $file);
            $location = "img/$fileName";
            unlink($location);

            $gambar = upload();
        }

        // query insert data
        $query = "UPDATE food SET
                    nama='$nama',
                    keterangan='$keterangan',
                    harga= '$harga',
                    rating= '$rating',
                    category= '$category',
                    gambar='$gambar'
                  WHERE id_food=$id
                ";
        mysqli_query($connect, $query);

        return mysqli_affected_rows($connect);
    }

    function findFood($find){
        $query = "SELECT * FROM food
                    WHERE
                    nama LIKE '%$find%'
                ";
        return queryFunction($query);
    }

    function menuOrder($data, $id_payment, $id_users){
        global $connect;

        $id_users = (int)$id_users;

        $dataTerbaruIdPayment = [];
        $dataTerbaruIdFood = [];
        $dataTerbaruQuantity = [];
        $database_food = queryFunction("SELECT * FROM food ORDER BY id_food DESC LIMIT 1");
        $length = $database_food[0]['id_food'];
        $id_food;
        $id_quantity;

        for($i = 1; $i<=$length; $i++){
            $u = (string)$i;
            if(isset($data['quantity'.$u])){
                if($data['quantity'.$u] > 0){
                    $dataTerbaruIdPayment[] = $id_payment;
                    $dataTerbaruIdFood[] = $data['id_food'.$u];
                    $dataTerbaruQuantity[] = $data['quantity'.$u];
                    $id_food = $data['id_food'.(string)$i];
                    $id_food = (int)$id_food;
                    $id_quantity = $data['quantity'.(string)$i];
                    $id_quantity = (int)$id_quantity;
                    mysqli_query($connect, "INSERT INTO 
                                payment 
                                VALUES 
                            ('', '$id_payment', '$id_users', '$id_food', '$id_quantity')"
                            );
                }
            }
        }

        return mysqli_affected_rows($connect);
    }

    function orderedFood($id_payment, $id_employee){
        global $connect;

        $query = "SELECT * FROM payment
                    WHERE
                    id_payment = '$id_payment'
                ";

        $rows = queryFunction($query);

        foreach($rows as $row){
            mysqli_query($connect, "INSERT INTO 
                                    history_payment 
                                    VALUES 
                                ('', '$id_payment', '$row[id_user]', '$id_employee', '$row[id_food]', '$row[quantity]')"
                                );
        }

        mysqli_query($connect, "DELETE FROM payment WHERE id_payment = '$id_payment'");
        

        return mysqli_affected_rows($connect);
    }
        
    
?>