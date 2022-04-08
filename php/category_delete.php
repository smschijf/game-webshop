<?php
    include "db_connect.php";
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];
        $sql = "DELETE FROM `category` WHERE category_id=$id";
        $result = mysqli_query($conn, $sql);

        if($result) {
            echo "Deleted succesfull";
            header("location:categories_list.php");
        } else {
            die(mysqli_error($conn));
        }
    }


?>