<?php

$con = mysqli_connect("localhost","root","","linomtha");
error_reporting(0);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>