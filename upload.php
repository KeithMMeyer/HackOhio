<?php session_start();?>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$_SESSION["fileName"] = $_FILES["fileToUpload"]["name"];

/*
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
echo "Sorry, your file is too large.";
$uploadOk = 0;
}
*/
?>

</style>
</head>
<body>
    <?php include 'includes/include_nav.php';?>
    <div class="container">
      <br>
      <br>
        <div class="col-sm" >
            <div class = "row">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:	📂
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Upload Image" name="submit">
                    <?php
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "pdf") {
                    echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
                    $uploadOk = 0;
                    }
                    echo "<br>";
                    // Check if file already exists
                    if (file_exists($target_file)) {
                      echo "Sorry, file already exists.";
                      $uploadOk = 0;
                    }
                    ?>
                    <br>
                    <?php
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded."; 
      if ($imageFileType == "pdf") {
        header('Location: ./web/viewer.php');
      } elseif ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
        header('Location: aws-textract.php');
      }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/include_BS.php';?>
        <title>QuickCard - Upload</title>
        <style>
            <style>
	html {
  height:100%;
}

body {
  background: linear-gradient(324deg, rgba(36,34,84,0.5) 0%, rgba(50,75,154,0.5) 35%, rgba(228,98,112,0.5) 100%);
}
