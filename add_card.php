<?php
include 'includes/db_connection.php';

$info = json_decode($_POST['info'], true);

$sql = "INSERT INTO card (setId, cardQuestion, cardAnswer) VALUES (" .$info["set"] . ", '". $info["term"] . "', '" . $info["def"] . "');";

$result = mysqli_query($conn, $sql);

echo $sql;

return $result;
?>