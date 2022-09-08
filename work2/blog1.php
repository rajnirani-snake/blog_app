
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Blog</title>
</head>
<body>
<div class="col-lg-6 m-auto">
    
    <div class="container-fluid">
       
        <form action="insert2.php" method="post">
        <br><br><div class="card">
        <div class="card-header bg-dark">   
        <h2 class="text-white text-center">Create New Blog!</h2>
        </div>
        <br>
        <label>Title</label>
        <input type="text" name="title" class="form-control">
        <br>
        <br>

        <label>Add Text</label>
        <textarea name="body" row="10" col="15" class="form-control"></textarea>
        <br>
        <br>


        

        <button class="btn btn-success" type="submit" name="done"> Save </button><br>
        <button class="btn btn-danger" type="submit" name="done"> Cancel </button>
        </div>
        </form>

        <p><h3>Go back <a href="welcome.php"><button class="btn btn-secondary" type="submit" name="done">welcome page</button></a></h3></p>
    
    </div>

</body>
</html>