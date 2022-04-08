<?php

include "db_connect.php";

if (isset($_POST["product_save"])) {
    $category_name = $_POST["category_name"];
    $category_description = $_POST["category_description"];
    $category_active = $_POST["category_active"];
    $query = "insert into category (name, description, active) values ('$category_name', '$category_description', $category_active)";
    //$result = mysqli_query($conn, $query);


if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }

  header('Location: categories_list.php');
}
?>