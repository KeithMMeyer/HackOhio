<?php session_start();?>
<?php
   require './vendor/autoload.php';
/*
 * To run this project, make sure that the AWS PHP SDK has been unzipped in the current directory.
 * 
 * Caution: this is not production quality code. There are no tests, and there is no error handling.
 */
use Aws\Credentials\CredentialProvider;
use Aws\Textract\TextractClient;

// If you use CredentialProvider, it will use credentials in your .aws/credentials file.
/*
$provider = CredentialProvider::env();
$client = new TextractClient([
	'profile' => 'TextractUser',
    'region' => 'us-west-2',
	'version' => '2018-06-27',
	'credentials' => $provider
]);
*/
$client = new TextractClient([
    'region' => 'us-east-1',
	'version' => '2018-06-27',
	'credentials' => [
        'key'    => 'AWS IAM KEY',
        'secret' => 'AWS IAM SECRET'
	]
]);

// The file in this project.
$filename = "./uploads/" . $_SESSION["fileName"];
$file = fopen($filename, "rb");
$contents = fread($file, filesize($filename));
fclose($file);
$options = [
    'Document' => [
		'Bytes' => $contents
    ],
    'FeatureTypes' => ['FORMS'], // REQUIRED
];
$result = $client->analyzeDocument($options);
// If debugging:
// echo print_r($result, true);
$blocks = $result['Blocks'];
$textract_words = [];
// Loop through all the blocks:
foreach ($blocks as $key => $value) {
	if (isset($value['BlockType']) && $value['BlockType']) {
		$blockType = $value['BlockType'];
		if (isset($value['Text']) && $value['Text']) {
			$text = $value['Text'];
			if ($blockType == 'WORD') {
				array_push($textract_words, strtolower($text));
			}
		}
	}
}

$filename = "ocr/result";
$filler_words = file($filename, FILE_IGNORE_NEW_LINES);

$final_words = array_diff($textract_words, $filler_words);

$_SESSION['webArray'] = $final_words;
?>