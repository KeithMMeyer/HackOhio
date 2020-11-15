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

<a href="sets.php"><button type="button" class="btn btn-back btn-primary btn-md">< Back to Sets</button></a>
<h1>Set Name</h1>

<div class="container" style="padding: 5%;">
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary btn-sm btn-prev" onclick="findPrev()"><</button>
        </div>
        <div class="col-8">
            <div class="card-container">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h1>Front</h1>
                    </div>
                    <div class="flip-card-back">
                        <h1>Back</h1>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col">
            <button type="button" class="btn btn-primary btn-sm btn-next" onclick="findNext()">></button>
        </div>
    </div>
</div>

<script>
    var currentCard = 0;
//set up
    var cardList = [];
    for(let x = 0; x < 10; x++){
        let card = {};
        card.term = "Term" + x;
        card.def = "Def" + x;
        cardList.push(card);
    }

    cardSwitch(0);
    checkToggle();

    function cardSwitch(index) {
        $(".flip-card-front").html(cardList[index].term);
        $(".flip-card-back").html(cardList[index].def);
    }

    function findNext() {
        checkToggle();
        if (currentCard < cardList.length - 1) {
            currentCard++;
            cardSwitch(currentCard);
        }
        checkToggle();
    }

    function findPrev() {
        checkToggle();
        if (currentCard > 0) {
            currentCard--;
            cardSwitch(currentCard);
        }
        checkToggle();
    }

    function checkToggle() {
        next = document.querySelector('.btn-next');
        prev = document.querySelector('.btn-prev');

        if (currentCard == 0) {
            prev.classList.add('disabled');
        }
        if (currentCard > 0) {
            prev.classList.remove('disabled')
        }
        if (currentCard == cardList.length - 1) {
            next.classList.add('disabled');
        }
        if (currentCard < cardList.length - 1) {
            next.classList.remove('disabled')
        }
    }
</script>

</body>
</html>