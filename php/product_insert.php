<?php

include "php/db_connect.php";

if (isset($_POST["product_save"])) {
    $product_name = $_POST["product_name"];
    $product_description = $_POST["product_description"];
    $category_id = $_POST["category_id"];
    $product_price = $_POST["product_price"];
    $category_id = $_POST["category_id"];
    $product_active = $_POST["product_active"];
    $query = "insert into product (name, description, category_id, price, active) values ('$product_name', '$product_description', $category_id, $product_price, $product_active)";
    //$result = mysqli_query($conn, $query);


if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }

  header('Location: product_detail.php');
}
?>