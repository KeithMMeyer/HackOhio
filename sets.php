<!DOCTYPE html>
<html>
    <head>
<?php include 'includes/db_connection.php';?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script>var front= true;</script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <style>
            .card-group{
                margin-bottom: 8px;
            }
            .card-editable {
                margin: -1.25rem !important;
                padding: 1.25rem;

            }
        </style>

        <title>QuickCard - Sets</title>
        <?php include 'includes/include_BS.php';?>
    </head>
    <body>
        <?php include 'includes/include_nav.php';?>
        <div style="float:left; margin-right: 15px;">
            <ul class="list-group">
                <li class="list-group-item">   Set 1   </li>
                <li class="list-group-item">   Set 2   </li>
                <li class="list-group-item">   Set 3   </li>
                <li class="list-group-item">   Set 4   </li>
                <li class="list-group-item">   Set 5   </li>
            </ul>
        </div>

        <div class="container">
            <div class="col-sm" >
                <div class = "row">
                    <h1>Set Name</h1>
                </div>
                <div class = "row">
                    <a href="study.php"><button type="button" class="btn btn-back btn-primary btn-md">Study this Set ></button></a>
                </div>
            </div>
            <br>
            <div class = "row">
                    <div class="col-sm" id="listContainer">
                    </div>
                </div>
            </div>
        </div>
        </div>

<?php
    // php setID variable
    $setID = 1;
    $cardArr = [];

    $sql = "SELECT cardQuestion, cardAnswer FROM card WHERE setID = " . $setID .";";

    if ($result = mysqli_query($conn, $sql)) {
    // Fetch one and one row
    while ($row = mysqli_fetch_row($result)) {
        $cardArr[$row[0]] = $row[1];
    }
    mysqli_free_result($result);
    }
?>
        <script>
            //set up
            var dbCards = <?php echo json_encode($cardArr); ?>;
            var cardList = [];
            $.each(dbCards, function(key, value) {
                let card = {};
                card.term = key;
                card.def = value;
                cardList.push(card);
            });
            
            function updateCard(index){
                cardList[index].term = $('#term' + index).html();
                cardList[index].def = $('#def' + index).html();
            }
            
            function updateLast(index){
                //adds new and stuff
            }
            
            function newCard(term, def, index){
                let element = "<div class='card-group'><div class='card'><div class='card-body'><p class='card-text card-editable' role='textbox' contenteditable onblur=updateCard('" + index + "') id='term" + index + "'>" + term + "</p></div></div><div class='card'><div class='card-body'><p class='card-text card-editable' role='textbox' contenteditable onblur=updateCard('" + index + "') id='def" + index + "'>" + def + "</p></div></div></div>";
                //$("#listContainer").append(element);
                return element;
            }
            
            function lastCard(){
                let element = newCard("Type to add a new card.", "Type to add a new card.", cardList.length);
                
                $("#listContainer").append(element);
            }

            function listCreationFunction(card, index){
                let element = newCard(card.term, card.def, index);
                $("#listContainer").append(element);
            }

            // page code
            cardList.forEach(listCreationFunction);
            lastCard();
            

        </script>
    </body>
</html>