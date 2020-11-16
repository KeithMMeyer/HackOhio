<?php

include 'includes/db_connection.php';

$curl = curl_init();

$info = json_decode($_POST['info'], true);
$word = $info["term"];
$isDel = $info["delete"];

$setId = 2;

curl_setopt_array($curl, [
	CURLOPT_URL => "https://wordsapiv1.p.rapidapi.com/words/" . $word . "/definitions",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: wordsapiv1.p.rapidapi.com",
		"x-rapidapi-key: key"
	],
]);

echo $curl['CURLOPT_URL'];

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
}

if ($isDel == "false") {
    $definitions = json_decode($response, true);
    $def = $definitions['definitions'][0]['definition'];
	
	$sql = "INSERT INTO card (setId, cardQuestion, cardAnswer) VALUES (" . $setId . ", '". $word . "', '" . $def . "');";

	$result = mysqli_query($conn, $sql);
} else {
	$sql = "DELETE FROM card WHERE cardQuestion = '" . $word . "';";

	$result = mysqli_query($conn, $sql);
}
?>
