  <?php
  include 'header.php';
  if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $check_username = mysqli_query($con, "SELECT * FROM user WHERE username = '$username' ");
      if(mysqli_num_rows($check_username) > 0){
          echo('user Already exist');
        }  elseif(isset($_POST['done'])){
  $q = " INSERT INTO user(username, password) VALUES ( '$username', '$password')";
  $query = mysqli_query($con,$q);
  header("Location: login.php");
  
  }
  }
  ?>
  <div class="col-lg-6 m-auto">
  
  <form name="myForm" action="" method="post" onsubmit="return register()">
  
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

  <?php
  include 'footer.php';
  ?>

  </div>
  </form>
  </div>
 