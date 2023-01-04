<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <form class="container-fluid justify-content-start">
    <a href="index.html"><button class="btn btn-outline-success me-2" type="button">GO back</button></a>
    <center><h6 style="color: white;">Random Date Generator</h6></center>
  </form>
</nav>
<br>
<?php
$year=$_REQUEST['year'];
$sd=$_REQUEST['sd'];
$ed=$_REQUEST['ed'];
$c=$_REQUEST['c'];
echo "<h4>"."Random Dates (DD/MM/YY) generated: $c"."</h4>";
for ($i=1; $i <= $c ; $i++) { 
  echo "Date $i: ".rand(1,30)."/".rand($sd,$ed)."/".$year."<hr>";
}
?>

</body>
</html>
