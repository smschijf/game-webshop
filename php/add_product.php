<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/add_product.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div id="container">
        <header><i class='bx bx-log-out bx-sm'></i></header>
        <?php include 'nav.php';?>
        <div class="inner-container">
            <h1>Product toevoegen</h1>
            <form action="product_insert.php" method="post">
                <input type="text" placeholder="name" name="product_name">
                <input type="text" placeholder="description" name="product_description">
                <input type="text" placeholder="category_id" name="category_id">
                <input type="text" placeholder="price" name="product_price">
                <input type="text" placeholder="active" name="product_active">
                <button type="submit" name="product_save">save</button>
            </form>
        </div>
    </div>
</body>

</html>