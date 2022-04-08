<?php

  session_start();

    include("db_connect.php");
    include("functions.php");

    if(isset($_POST["signup"]))
    {
      $first_name = $_POST['first_name'];
      $middle_name = $_POST['middle_name'];
      $last_name = $_POST['last_name'];
      $city = $_POST['city'];
      $street_name = $_POST['street_name'];
      $house_number = $_POST['house_number'];
      $email_address = $_POST['email_address'];
      $password = $_POST['password'];
      $house_number_addon = $_POST['house_number_addon'];
      $phone = $_POST['phone'];

      $query = "INSERT INTO customer(first_name, middle_name, last_name, city, street, house_number, house_number_addon, phone, email_address, `password`) 
      VALUES ('$first_name', '$middle_name', '$last_name', '$city', '$street_name', '$house_number', '$house_number_addon', '$phone', '$email_address', '$password')";

      if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }

      header('Location: ../index.php');
      die;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin</title>
  <link rel="stylesheet" href="../assets/css/signup.css">
</head>
<body>
  <div id="container">
    <div class="form-container">
      <form method="post">
        <h3>Signup</h3>
        <div class="input-label">First Name *</div>
        <input type="text" name="first_name" required>
        <div class="input-label">Middle name</div>
        <input type="text" name="middle_name">
        <div class="input-label">Last Name *</div>
        <input type="text" name="last_name" required>
        <div class="input-label">City</div>
        <input type="text" name="city">
        <div class="input-label">Street Name</div>
        <input type="text" name="street_name">
        <div class="input-label">House Number *</div>
        <input type="number" name="house_number" required>
        <div class="input-label">House Number Addon</div>
        <input type="text" name="house_number_addon">
        <div class="input-label">Phone</div>
        <input type="tel" name="phone">
        <div class="input-label">Email address *</div>
        <input type="text" name="email_address" required>
        <div class="input-label">Password *</div>
        <input type="password" name="password" required>
        <input type="submit" value="Signup" name="signup">
        <a href="../index.php">Login instead</a>
      </form>
    </div>
  </div>
</body>
</html>