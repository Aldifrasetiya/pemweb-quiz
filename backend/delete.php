<?php

require './../config/db.php';

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    mysqli_query($db_connect, "DELETE FROM products WHERE id=$productId");

    header("Location: ./../show.php");
    exit();
} else {
    header("Location: ./../show.php");
    exit();
}

?>