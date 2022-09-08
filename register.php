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
 
 <form name="myForm" action="insert.php" method="post" onsubmit="return hello()">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> Sign Up </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>
 

 <label> Password: </label>
 <input type="password" name="password" class="form-control"> <br>
 

<button class="btn btn-success" type="submit" name="done"> Submit </button><br>
<p>Already have an account? <a href="login.php">Login here</a>.</p> <br>




</div>
 </form>
 </div>
</body>
</html>
