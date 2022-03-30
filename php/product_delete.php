<?php
    include "db_connect.php";
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];
        $sql = "DELETE FROM `product` WHERE product_id=$id";
        $result = mysqli_query($conn, $sql);

        if($result) {
            echo "Deleted succesfull";
        } else {
            die(mysqli_error($conn));
        }
    }


?>