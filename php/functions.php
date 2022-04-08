<?php

function check_login($conn)
{
  if(isset($_SESSION['customer_id']))
  {
    $id = $_SESSION['customer_id'];
    $query = "SELECT * FROM customer WHERE customer_id = '$id' LIMIT 1";

    $result = mysqli_query($conn, $query);
    if($result && mysqli_num_rows($result) > 0)
    {
      $user_data = mysqli_fetch_assoc($result);
      return $user_data;
    }
  }
  header("Location: product_list.php");
  die;
}