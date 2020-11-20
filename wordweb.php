<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="study.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
	html {
  height:100%;
}

body {
  background: linear-gradient(324deg, rgba(36,34,84,0.5) 0%, rgba(50,75,154,0.5) 35%, rgba(228,98,112,0.5) 100%);
}

#cloud {
	background: white;
}
	</style>
<title>QuickCard - WordWeb</title>
<?php include 'includes/include_BS.php';?>
</head>
<body>
<?php include 'includes/include_nav.php';?>

<div class="container" style="padding: 5%;">
	<h2> Words Choices </h2>
    <a class="btn btn-primary" href="sets.php" role="button" style="margin-bottom:20px;">Study Sets ></a>
	<br>
	<div id="cloud" style="text-align: center; font-size: 1.8em; padding: 2%; background-color:rgba(0,0,0,0.3); border-radius:16px;">
	</div>
</div>
<?php include 'aws-textract.php';?>
<script>
// get words from textract or upload
	
            var encodeCards = <?php echo json_encode($final_words); ?>;
            var words = [];
            $.each(encodeCards, function(key, value) {
                value = value.replace(/[.,\/#!$?%\^&\*;:{}=\-_`~()]/g,"")
                if(!parseInt(value))
                    words.push(value);
            });

	// get and store frequencies
	let frequencies = {};
	for (let i = 0; i < words.length; i++) {
		if (words[i] in frequencies) {
			frequencies[words[i]] += 1;
		} else {
			console.log("CHECK");
			frequencies[words[i]] = 1;
		}
	}

	let tuples = [];

for (let key in frequencies) tuples.push([key, frequencies[key]]);

tuples.sort(function(a, b) {
    a = a[1];
    b = b[1];

    return a < b ? 1 : (a > b ? -1 : 0);
});

for (let i = 0; i < tuples.length; i++) {
    let key = tuples[i][0];
    let value = tuples[i][1];

    // do something with key and value
}
	let chosenWords = [];

    if (tuples.length < 30) {
        for (var i = 0; i < tuples.length; i++) {
            document.getElementById("cloud").innerHTML += "<p class='aWord' id='word" + i + "' style='display: inline-block; cursor: pointer;' onclick='chooseWord(" + i + ")'>&nbsp;" + tuples[i][0] + "&nbsp;</p>";
        }
    } else {
        for (var i = 0; i < 30; i++) {
            document.getElementById("cloud").innerHTML += "<p class='aWord' id='word" + i + "' style='display: inline-block; cursor: pointer;' onclick='chooseWord(" + i + ")'>&nbsp;" + tuples[i][0] + "&nbsp;</p>";
        }
    }
	
	function chooseWord(wordId) {
		let word = tuples[wordId][0];
			if (!chosenWords.includes(word)) {
				chosenWords.push(word);
				document.getElementById("word" + wordId).style.backgroundColor = "#fc6c85";
				document.getElementById("word" + wordId).style.color = "white";
				document.getElementById("word" + wordId).style.fontWeight = "bold";
                
                var info = { 
                    "term":word,
                    "delete":"false"
                }
                console.log(info);
                var infoStr = JSON.stringify(info);
                $(document).ready(function() {
                    $.ajax({
                    type: "POST",
                    url: "dict_call.php",
                    data: {info : infoStr}, 
                    success: function(response){
                        console.log(response)
                    }
                    });
                });
            } else {
				chosenWords.pop(word);
				document.getElementById("word" + wordId).style.backgroundColor = "initial";
				document.getElementById("word" + wordId).style.color = "#212529";
				document.getElementById("word" + wordId).style.fontWeight = "normal";
			
                var info = { 
                    "term":word,
                    "delete":"true"
                }
                console.log(info);
                var infoStr = JSON.stringify(info);
                $(document).ready(function() {
                    $.ajax({
                    type: "POST",
                    url: "dict_call.php",
                    data: {info : infoStr}, 
                    success: function(response){
                        console.log(response)
                    }
                    });
                });
            }
	}
</script>
</body>
</html>