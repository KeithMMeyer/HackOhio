<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
function flipCard() {
  $("#currCard").html("Back Text");
}
</script>
<title>Page Title</title>
<?php include 'includes/include_BS.php';?>
</head>
<body>
<?php include 'includes/include_nav.php';?>
<div style=float:left;width 20%>
<ul class="list-group" align="left">
  <li class="list-group-item">   Set 1   </li>
  <li class="list-group-item">   Set 2   </li>
  <li class="list-group-item">   Set 3   </li>
  <li class="list-group-item">   Set 4   </li>
  <li class="list-group-item">   Set 5   </li>
</ul>
    </div>
    <div class="card" style= "margin:auto"  align="center" style="width: 18rem;" onclick=flipCard();>
        <br>
        <br>
        <br>
        <br>
        <br>
  <div class="card-body" style= "margin:auto" align="center" onclick=flipCard();>
    <p class="card-text" style= "margin:auto" align="center" id="currCard" onclick=flipCard();>Front text.</p>
      <br>
      <br>
      <br>
      <br>
      <br>
  </div>
</div>
</body>
</html>