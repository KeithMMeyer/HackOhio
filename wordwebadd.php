<?php
include 'includes/db_connection.php';


$sql = "INSERT INTO card (setId, cardQuestion, cardAnswer) VALUES (" .$info["set"] . ", '". $info["term"] . "', '" . $info["def"] . "');";

$result = mysqli_query($conn, $sql);

echo $sql;

return $result;
?>