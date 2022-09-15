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


<p><h6>Go to <a href="blogs.php"><button class="btn btn-info" type="submit" name=""> welcome page </button>
</a></h6></p>

<div class="container-fluid">

    <form action="blog_insert.php" method="post">
        <br><br><div class="card">

        <div class="card-header bg-dark">   
        <h2 class="text-white text-center">Create new blog</h2></div><br>

        <label>Title</label>
        <input type="text" name="title" rows="6" class="form-control"><br>
        

        <label>Add Text</label>
        <!-- <input type="text" name="body" class="form-control"><br> -->
        <textarea  type="text" name="body" class="form-control"></textarea><br>


        <button class="btn btn-success" type="submit" name="done"> Save </button><br>
        <button class="btn btn-danger" type="submit" name="cancel"> Cancel </button><br>
        
        
        </div>
    </form>


</body>
</html>