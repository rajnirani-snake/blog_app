<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $username = $_POST['title'];
 $password = $_POST['body'];
 $updated_at = date('Y-m-d H:i:s');

 
 $q = "update blog2 set title='$title', body='$body', updated_at='$updated_at' where id=$id ";
 $query = mysqli_query($con,$q);

 header('location:welcome.php');
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
    
</head>
<body>
  

 <div class="container-fluid">

       <form action="" method="post">

        <br><br><div class="card">

        <div class="card-header bg-dark">   
        <h2 class="text-white text-center">Blog Page</h2></div><br>

        <label>Title</label>
        <input type="text" name="title" class="form-control"><br>
        

        <label>Add Text</label>
        <!-- <input type="text" name="body" class="form-control"><br> -->
        <textarea name="body" class="form-control"></textarea><br>
        

        <button class="btn btn-success" type="submit" name="done"> Save </button><br>
        <button class="btn btn-danger" type="submit" name="cancel"> Cancel </button><br>
        </div>
        </form>

        <!-- <p><h3>Go back <a href="welcome.php">welcome page</a></h3></p>
     -->
   
    </div> 

 
</body>
</html>