
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

       <form action="insert2.php" method="post">

        <br><br><div class="card">

        <div class="card-header bg-dark">   
        <h2 class="text-white text-center">Blog Page</h2></div><br>

        <label>Title</label>
        <input type="text" name="title" class="form-control"><br>
        

        <label>Add Text</label>
        <textarea name="body" class="form-control"></textarea><br>
        

        <button class="btn btn-success" type="submit" name="done"> Save </button><br>
        <button class="btn btn-danger" type="submit" name="cancel"> Cancel </button><br>
        </div>
        </form>

        <p><h3>Go back <a href="welcome.php">welcome page</a></h3></p>
    
    </div>

</body>
</html>