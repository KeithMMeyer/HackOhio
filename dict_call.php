<?php

include 'includes/db_connection.php';

$curl = curl_init();
$word = "idiot";

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
		"x-rapidapi-key: f91be4675amshdfb0adfcfbcb882p19e804jsndcd607f971bc"
	],
]);

echo $curl['CURLOPT_URL'];

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
}

    $definitions = json_decode($response, true);
    $def = $definitions['definitions'][0]['definition'];
    print_r($def);
?>