<?php
  error_reporting(E_ALL); 
  ini_set('display_errors', 1);
  $servername = "REPLACE WITH SQL IP";
  $username = "SQL USERNAME";
  $password = "SQL PASSWORD";
  $db_name = "SQL DATABASE NAME";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $db_name);

  // Check connection
  if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
?>