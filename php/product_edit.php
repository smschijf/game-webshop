<?php

include "db_connect.php";

$id = $_GET['updateid'];
$query = "SELECT * FROM `product` WHERE product_id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$product_name = $row["name"];
$product_description = $row["description"];
$category_id = $row["category_id"];
$product_price = $row["price"];
$product_active = $row["active"];

if (isset($_POST["product_save"])) {
    $product_name = $_POST["product_name"];
    $product_description = $_POST["product_description"];
    $category_id = $_POST["category_id"];
    $product_price = $_POST["product_price"];
    $product_active = $_POST["product_active"];
    $query = "UPDATE `product` SET product_id=$id, name='$product_name', 
    description='$product_description', category_id=$category_id, 
    price=$product_price, active=$product_active WHERE product_id=$id";


if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }

  header('Location: product_list.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../assets/css/add_product.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div id="container">
        <header><i class='bx bx-log-out bx-sm'></i></header>
        <?php include 'nav.php';?>
        <div class="inner-container">
            <h1>Product aanpassen</h1>
            <form action="" method="post">
                <input type="text" placeholder="name" name="product_name" value=<?php echo $product_name;?>>
                <input type="text" placeholder="description" name="product_description" value=<?php echo $product_description;?>>
                <input type="text" placeholder="category_id" name="category_id" value=<?php echo $category_id;?>>
                <input type="text" placeholder="price" name="product_price" value=<?php echo $product_price;?>>
                <input type="text" placeholder="active" name="product_active" value=<?php echo $product_active;?>>
                <button type="submit" name="product_save">save</button>
            </form>
        </div>
    </div>
</body>

</html>
