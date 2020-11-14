<!DOCTYPE html>
<html>
    <head>
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
        <div style=float:left;width 20%>
            <ul class="list-group">
                <li class="list-group-item">   Set 1   </li>
                <li class="list-group-item">   Set 2   </li>
                <li class="list-group-item">   Set 3   </li>
                <li class="list-group-item">   Set 4   </li>
                <li class="list-group-item">   Set 5   </li>
            </ul>
        </div>

        <div class="container" style="margin-top:32px">
            <div class="row">
                <div class="col-sm" >
                    <h1>Set Name</h1>
                    <div class="col-sm" style="padding-bottom: 15px;">
                    <a href="study.php"><button type="button" class="btn btn-back btn-primary btn-md">Study Set ></button></a>
                </div>
                    <div class="col-sm" id="listContainer">
                    </div>
                </div>
            </div>
        </div>
        <script>
            //set up
            //var card = {term:"Term", def:"Definition"};
            var cardList = [];
            for(let x = 0; x < 10; x++){
                let card = {};
                card.term = "Term" + x;
                card.def = "Def" + x;
                cardList.push(card);
            }

            function listCreationFunction(card, index){
                let element = "<div class='card-group'><div class='card'><div class='card-body'><p class='card-text card-editable' role='textbox' contenteditable id='term" + index + "'>" + card.term + "</p></div></div><div class='card'><div class='card-body'><p class='card-text card-editable' role='textbox' contenteditable id='def" + index + "'>" + card.def + "</p></div></div></div>";
                $("#listContainer").append(element);
                $('.term' + index).blur(updateCard(id));
            }

            // page code
            cardList.forEach(listCreationFunction);

        </script>
    </body>
</html>