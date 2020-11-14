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

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h1>Set Name</h1>
                    <div class="card-group">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text">
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">Type here to add a term.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">Type here to add a definition.</p>
                                <p class="card-text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>