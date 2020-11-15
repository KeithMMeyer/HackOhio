<?php
include 'includes/db_connection.php';

$info = json_decode($_POST['info'], true);
    $sql = "UPDATE card SET cardQuestion = '" . $info["term"] . "', cardAnswer = '" . $info["def"] . "' WHERE cardID = " . $info["id"];
$result = mysqli_query($conn, $sql);
return $result;
?>