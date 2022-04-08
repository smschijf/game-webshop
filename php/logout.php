<?php

session_start();

if(isset($_SESSION['customer_id']))
{
  unset($_SESSION['customer_id']);
}

header("Location: ../index.php");
die;