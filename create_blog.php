  <?php
      include 'header.php';
      session_start();

      include 'conn.php';

      if(isset($_POST['done'])){

      //print_r($_POST);exit();
      $title = $_POST['title'];
      $body = $_POST['body'];
      $created_at = date('Y-m-d H:i:s');
      $updated_at = date('Y-m-d H:i:s');
      $created_by = $_SESSION['username'];

      $q = " INSERT INTO blog(title, body, created_at, updated_at, created_by) VALUES ('$title', '$body', '$created_at', '$updated_at', '$created_by')";

      $query = mysqli_query($con,$q);
          
      header("Location: create_blog.php");
      }
      ?>

  <p><h6>Go to <a href="blogs.php"><button class="btn btn-info" type="submit" name=""> blogs page </button>
  </a></h6></p>

  <div class="container-fluid">
    <form action="" method="post">
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
      </div>
  <?php
  include 'footer.php';
  ?>