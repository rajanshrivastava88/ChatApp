<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname, port: 3307);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
