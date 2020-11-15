<?php
  error_reporting(E_ALL); 
  ini_set('display_errors', 1);
  $servername = "localhost";
  $username = "root";
  $password = "password";
  $db_name = "quickcard";

  // Create connection
  $conn = new mysqli_connect($servername, $username, $password, $db_name);

  // Check connection
  if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
?>