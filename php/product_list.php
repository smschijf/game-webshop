<?php

include "db_connect.php";

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/product_list.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div id="container">
    <header><i class='bx bx-log-out bx-sm'></i></header>
    <?php include 'nav.php'; ?>
    <div class="inner-container">
      <button class="product-add">
        <a class="product-add" href="add_product.php">add product</a>
      </button>
      <div class="table">
        <div class="column">
          <div class="column-title">Name</div>
          <?php
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo $row['name'] . '<br>';
            }
          }
          ?>
        </div>
        <div class="column">
          <div class="column-title">Price</div>
          <?php
          $result = mysqli_query($conn, $sql);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo $row['price'] . '<br>';
            }
          }
          ?>
        </div>
        <div class="column">
          <div class="column-title">Active</div>
          <?php
          $result = mysqli_query($conn, $sql);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo $row['active'] . '<br>';
            }
          }
          ?>
        </div>
        <div class="column">
          <div class="column-title">Operations</div>
          <?php
          $result = mysqli_query($conn, $sql);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['product_id'];
              echo
              '<button class="button-edit">
                <a href="product_edit.php?updateid=' . $id . '"><i class="bx bxs-edit-alt"></i></a>
                </button>
                <button class="button-delete">
                <a href="product_delete.php?deleteid=' . $id . '" name="deleteid"><i class="bx bx-minus-circle" ></i></a>
                </button> <br>';
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>