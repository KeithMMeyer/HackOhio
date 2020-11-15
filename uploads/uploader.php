<?php session_start();?>
<?php
$target_dir = "./";
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
 // Allow certain file formats
 if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "pdf") {
    header('Location: ../upload.php?msg=Sorry,-only-JPG,-JPEG,-PNG-&-PDF-files-are-allowed.');
    $uploadOk = 0;
    }
    echo "<br>";
    // Check if file already exists
    if (file_exists($target_file)) {
        header('Location: ../upload.php?msg=Sorry,-file-already-exists.');
      $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header('Location: ../upload.php?msg=Sorry,-your-file-was-not-uploaded.');
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { 
      if ($imageFileType == "pdf") {
        header('Location: ../web/viewer.php');
      } elseif ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
        header('Location: ../wordweb.php');
      }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>