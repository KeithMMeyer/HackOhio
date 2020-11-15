<?php session_start();?>

<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/include_BS.php';?>
        <title>QuickCard - Upload</title>
        <style>
	html {
  height:100%;
}

body {
  background: linear-gradient(324deg, rgba(36,34,84,0.5) 0%, rgba(50,75,154,0.5) 35%, rgba(228,98,112,0.5) 100%);
}
</style>
</head>
<body>
    <?php include 'includes/include_nav.php';?>
    <div class="container">
      <br>
      <br>
        <div class="col-sm" >
            <div class = "row">
                <form action="uploads/uploader.php" method="post" enctype="multipart/form-data">
                    Select image to upload:	📂
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Upload Image" name="submit">
                    <br>
                </form>
            </div>
        </div>
    </div>
</body>
</html>