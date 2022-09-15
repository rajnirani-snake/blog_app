<?php
include 'conn.php';

$id = $_GET['id'];


$result = mysqli_query($con,"SELECT * FROM blog2 WHERE id = $id");

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

    echo "<div><br><br>
    <div class='container'>
    <div class='jumbotron'>
    <h1><center>".$row["title"]."</center></h1>
    <p><center>Body: ".$row["body"]."</center></p>
    <p><center>Created_at: ".$row["created_at"]."</center></p>
    <p><center>Updated_at: ".$row["updated_at"]."</center></p>
    <p><center>Created_by: ".$row["created_by"]."</center></p>
    </div>
    </div>
    </div>";
    
  }

} else {
  echo "0 results";
}
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

  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

   <style>
    h6 {
  text-align: right;
}
form{
  text-align: center;
}
  </style>

</head>
<body>

    <form action="comment_insert.php" method="post">
    <label>Subject:</label>
    <input type="text" name="subject"><br>
    <label>Comment:</label>
    <textarea  type="text" name="blog_comment" rows="1" cols=""></textarea><br>
    <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
    </form>

    <p><h6>Go to <a href="blogs.php"><button class="btn btn-info" type="submit" name=""> welcome page </button>
</a></h6></p>
</body>
</html>






