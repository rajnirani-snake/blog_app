<?php session_start();

?>

<?php
if($_SESSION["username"]) {
?>
<br>
<br>
<h5>Hii <?php echo $_SESSION["username"]; ?>!!Please <button class="btn btn-light" type="submit" name=""><a href="logout.php" tite="Logout">Logout.</h5></a></button>
<?php
}else echo "<h3>Please login first .</h3>";
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
  <style>
    h6 {

  text-align: right;

}

  </style>

</head>
<body>


<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure delete this message');
}
</script>

<div class="container-fluid">
 
  <p><h6> Create new blog!! <a href="create_blog.php"><button class="btn btn-info" type="submit" name=""> Blog </button></a></h6></p>

</div>
  <?php
include 'conn.php';
$result = mysqli_query($con,"SELECT * FROM blog" );


         if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            //$id = $_row["id"];
            echo'<div> 
            <div class="container">
            <div class="jumbotron">
            <h1><center>Title: '.$row["title"].'</center></h1> 
            <p><center>Body: '.substr($row["body"], 0, -20).'<a href="display_blog.php?id='.$row["id"].'"><br><br>
            <button class="btn btn-secondary" type="submit" name=""> Read more </button></center></a>
            </p>
            <p><center>Created_at: '.$row["created_at"].'</center></p> 
            <p><center>Updated_at: '.$row["updated_at"].'</center></p> 
            <p><center>Created_by: '.$row["created_by"].'</center></p> 
            <p><center><a href="update.php?id='. $row["id"] .'"><button class="btn btn-success" type="submit" name=""> Edit</button></cenetr></a></p>
            <p><center><a href="delete.php?id='. $row["id"] .'"><button class="btn btn-danger" type="submit" onclick="return checkDelete()" name=""> Delete </button></center></a></p>
            </div>
            </div>
            
            </div>';
          }
        } else {
          echo "0 results";
        }
  ?>
   </body>
  

</html>

