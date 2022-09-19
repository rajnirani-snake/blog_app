  <?php
  include 'header.php';  
  if(isset($_POST['done'])){

  $id = $_GET['id'];
  $title = $_POST['title'];
  $body = $_POST['body'];
  $updated_at = date('Y-m-d H:i:s');

  
  $q = "update blog set title='$title', body='$body', updated_at='$updated_at' where id=$id ";
  $query = mysqli_query($con,$q);

  header('location:blogs.php');
  }

  ?>
  <?php
  $postid = intval($_GET['id']);
  $result = mysqli_query($con,"SELECT * FROM blog where id=$postid");
  $row = $result->fetch_assoc();
  $title = $row["title"];
  $body = $row["body"];
  ?>

  <div class="container-fluid">

        <form action="" method="post">

          <br><br><div class="card">

          <div class="card-header bg-dark">   
          <h2 class="text-white text-center">Blog Page</h2></div><br>

          <label>Title</label>
          <input type="text" name="title" class="form-control"  value="<?php echo $title ?>"><br>
          

          <label>Add Text</label>
          <!-- <input type="text" name="body" class="form-control"><br> -->
          <textarea name="body" class="form-control" row="6"><?php echo $body ?></textarea><br>
          

          <button class="btn btn-success" type="submit" name="done"> Save </button><br>
          <button class="btn btn-danger" type="submit" name="cancel"> Cancel </button><br>
          </div>
          </form>
  </div> 

        <?php
        include 'footer.php';
        ?>
