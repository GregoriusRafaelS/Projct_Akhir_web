<?php

    $quantity = $_GET['quantity'];
    $price = $_GET['price'];


    $total = (int)$quantity * (int)$price;

?>
<h6>Total Price: <?= $total ?></h6>
