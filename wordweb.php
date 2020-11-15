<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" href="study.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
<title>QuickCard - Study</title>
<?php include 'includes/include_BS.php';?>
</head>
<body>
<?php include 'includes/include_nav.php';?>

<div class="container" style="padding: 5%;">
	<h2> Words Choices </h2>
	<br>
	<div id="cloud" style="text-align: center; font-size: 1.8em; padding: 2%; border: 3px solid #2E0854;"">
	</div>
</div>

<script>
	var words = [
"minute","miss","mission","model","modern","moment","money","month","more","morning","most","mother","mouth","move","movement","movie","Mr","Mrs","much","music","must","my","myself","name","nation","national","natural","nature","near","nearly","necessary","need","network","never","news","newspaper","next","nice","night","no","none","nor","north","not","note","nothing","notice","now"
	];
	var chosenWords = [];

	for (var i = 0; i < words.length; i++) {
		document.getElementById("cloud").innerHTML += "<p class='aWord' id='word" + i + "' style='display: inline-block; ' onclick='chooseWord(" + i + ")'>&nbsp;" + words[i] + "&nbsp;</p>";
	}
	
	function chooseWord(wordId) {
		let word = words[wordId];
			if (!chosenWords.includes(word)) {
				chosenWords.push(word);
				document.getElementById("word" + wordId).style.backgroundColor = "#fc6c85";
				document.getElementById("word" + wordId).style.color = "white";
				document.getElementById("word" + wordId).style.fontWeight = "bold";
			} else {
				chosenWords.pop(word);
				document.getElementById("word" + wordId).style.backgroundColor = "white";
				document.getElementById("word" + wordId).style.color = "#212529";
				document.getElementById("word" + wordId).style.fontWeight = "normal";
			}
	}
</script>

</html>