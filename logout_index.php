<?php session_start();

?>
<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php
if($_SESSION["username"]) {
  
?>


<h5>Hii <?php echo $_SESSION["username"]; ?>!!Please <button class="btn btn-light" type="submit" name=""><a href="logout.php" tite="Logout">Logout.</h5></a></button>

<?php
}else echo "<h3>Please login first .</h2>";

?>

  <p><h5> Go to <a href="blogs.php"><button class="btn btn-success" type="submit" name=""> blogs page </button></a></h5></p>

</body>
</html>
