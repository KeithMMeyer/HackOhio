<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script>var front= true;</script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <style type="text/css">
            .left {
                width:300px;
                display:block;
                float: left;
            }
            .right {
                width:300px;
                display: block;
                float: right;
            }
        </style>
        <?php include 'includes/include_BS.php';?>
        <title>QuickCard - Upload</title>
    </head>
    <body>
        <?php include 'includes/include_nav.php';?>
        <div style=border-left:10px;border-right:10px;>
            <div class="container">
                <span class="row" ></span>
                <span class="row" >
                    <span class="col" >
                        <div class="shadow-lg p-3 mb-5 bg-white rounded">
                            <p class="card-text" style=float: left></p>
                        </div>
                        <div class="col text-center">
                            <button type="button" class="btn btn-primary">Highlighted</button>
                        </div>
                    </span>
                    <span class="col col-lg-2">
                    </span>
                    <span class="col col-lg-2">
                        <div class="shadow-lg p-3 mb-5 bg-white rounded">
                            <p class="card-text">Choose file</p>          
                        </div>
                        <div class="col text-center">
                            <button type="button" class="btn btn-primary" >Upload</button>
                        </div>
                    </span>
                </span>
            </div>
        </div>
    </body>
</html>