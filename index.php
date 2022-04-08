<?php

  session_start();

    include("php/db_connect.php");
    include("php/functions.php");

    if(isset($_POST["submit"]))
    {
      echo "werkt";
      $email_address = $_POST['email_address'];
      $password = $_POST['password'];

      echo $email_address;
      echo $password;

      $query = "SELECT * FROM customer WHERE email_address = '$email_address' LIMIT 1";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result);
      if($result) {
        echo "result works";
      }
      if(mysqli_num_rows($result) > 0) {
        echo "test";
        if($password === $row["password"]) {
          $_SESSION["customer_id"] = $row["customer_id"];
          header("Location: php/product_list.php");
          echo "test";
        }
        else {
          echo "Wrong password";
        }
      }
      else {
        echo "User not registered";
      }
    }
      
    //   if ($result)
    //   {
    //     if($result && mysqli_num_rows($result) > 0)
    //     {
    //       $user_data = mysqli_fetch_assoc($result);

    //       if($user_data['password'] === $password)
    //       {
    //         $_SESSION['customer_id'] = $user_data['customer_id'];
    //         header("Location: php/product_list.php");
    //         die;
    //       }
    //     }
    //   } echo "Please enter some valid information";
    // }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin</title>
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <div id="container">
    <div class="form-container">
      <form method="post">
        <h3>Login</h3>
        <div class="input-label">Email Address</div>
        <input type="text" name="email_address">
        <div class="input-label">Password</div>
        <input type="password" name="password">
        <input type="submit" value="Login" name="submit">
        <a href="php/signup.php">Signup instead</a>
      </form>
    </div>
  </div>
</body>
</html>