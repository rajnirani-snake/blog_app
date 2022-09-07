

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
  session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','crudyoutube2') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM crudtable2 WHERE username='" . $_POST["username"]. "' and password = '". md5($_POST["password"])."'");
        $row  = mysqli_fetch_array($result);

        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
       // echo $_SESSION["username"];exit();
        //header("Location:index.php");
    } else {
        $message = "Invalid Username or Password!";
       }
   }
   if(isset($_SESSION["id"])) {
   header("Location:index1.php");
   }
?>

 <div class="col-lg-6 m-auto">
 

 <form action="" method="post">
 
 <div class="message"><?php if($message!="") { echo $message; } ?></div>


 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> Login</h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>

 <label> Password: </label>
 <input type="password" name="password" class="form-control"> <br>
 


 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
 <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
 
</div>
 </form>
 </div>
</body>
</html>