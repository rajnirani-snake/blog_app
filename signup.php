<?php

include 'conn.php';

if(isset($_POST['register'])){
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $check_username = mysqli_query($con, "SELECT * FROM user WHERE username = '$username' ");
    if(mysqli_num_rows($check_username) > 0){
        echo('user Already exist');
      }  elseif(isset($_POST['done'])){
 $q = " INSERT INTO crudtable3(username, password) VALUES ( '$username', '$password')";
 $query = mysqli_query($con,$q);
 header("Location: login.php");
 
}
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
<script>
function hello() {
  let username = document.forms["myForm"]["username"].value;
  let password = document.forms["myForm"]["password"].value;
  if (username == "") {
    alert("Username must be filled out");
    return false;
  }else if(password == ""){
    alert("Password must be filled out");
    return false;
  }
}
</script>

 <div class="col-lg-6 m-auto">
 
 <form name="myForm" action="" method="post" onsubmit="return hello()">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> Sign Up </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>
 

 <label> Password: </label>
 <input type="password" name="password" class="form-control"> <br>
 

<button class="btn btn-success" type="submit" name="register"> Submit </button><br>
<p>Already have an account? <a href="login.php">Login here</a>.</p> <br>

</div>
 </form>
 </div>
</body>
</html>
