<?php
include 'includes/db_connection.php';

$info = json_decode($_POST['info'], true);

$sql = "INSERT INTO card (cardQuestion, cardAnswer) VALUES ('" . $info["term"] . "', '" . $info["def"] . "');";

echo $sql;

$result = mysqli_query($conn, $sql);
return $result;
?>