<?php

include "db_connect.php";

session_start();

if (!isset($_SESSION['customer_id'])) {
  header("Location: ../index.php");
}

$id = $_GET['updateid'];
$query = "SELECT * FROM `category` WHERE category_id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$category_name = $row["name"];
$category_description = $row["description"];
$category_active = $row["active"];

if (isset($_POST["product_save"])) {
    $category_name = $_POST["category_name"];
    $category_description = $_POST["category_description"];
    $category_active = $_POST["category_active"];
    $query = "UPDATE `category` SET category_id=$id, name='$category_name', 
    description='$category_description', active='$category_active' WHERE category_id=$id";


if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }

  header('Location: categories_list.php');
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
            <h1>Category aanpassen</h1>
            <form action="" method="post">
                <input type="text" placeholder="name" name="category_name" value=<?php echo $category_name;?>>
                <input type="text" placeholder="description" name="category_description" value=<?php echo $category_description;?>>
                <input type="text" placeholder="active" name="category_active" value=<?php echo $category_active;?>>
                <button type="submit" name="product_save">save</button>
            </form>
        </div>
    </div>
</body>

</html>
