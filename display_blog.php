  <?php
  include 'header.php';
  include 'conn.php';
  $id = $_GET['id'];

  $result = mysqli_query($con,"SELECT * FROM blog WHERE id = $id");

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

      echo "<div><br><br>
      <div class='container'>
      <div class='jumbotron'>
      <h1><center>".$row["title"]."</center></h1>
      <p><center>Body: ".$row["body"]."</center></p>
      <p><center>Created_at: ".$row["created_at"]."</center></p>
      <p><center>Updated_at: ".$row["updated_at"]."</center></p>
      <p><center>Created_by: ".$row["created_by"]."</center></p>
      </div>
      </div>
      </div>";
    }

  } else {
    echo "0 results";
  }
  ?>

  
  <p><h6>Go to <a href="blogs.php"><button class="btn btn-info" type="submit" name=""> blogs page </button></a></h6></p>
  
  <?php
  $id = $_GET['id'];
  $result = mysqli_query($con,"SELECT * FROM comment WHERE blog_id = $id");

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

      echo '<div>
              <p><center>subject:'.$row["subject"].'</center></p>
              <p><center>blog_comment: '.$row["blog_comment"].'</center></p>
              <p><center>comment_by: '.$row["comment_by"].'</center></p>
      
          </div>';
    }

  } else {
    echo "0 results";
  }
  ?>

<?php
    session_start();
    include 'conn.php';

    if(isset($_POST['comment'])){
    //   print_r($_POST);exit();

        $blog_id = $_POST['blog_id'];
        $subject = $_POST['subject'];
        $blog_comment = $_POST['blog_comment'];
        $comment_by = $_SESSION['username'];
        


        $q = "INSERT INTO comment(blog_id, subject, blog_comment, comment_by) VALUES('$blog_id', '$subject', '$blog_comment', '$comment_by')";
        $query = mysqli_query($con,$q);

        header("Location: display_blog.php?id=$blog_id");
    }

    ?>

      <form action="" method="post">
      <input type="hidden" value='<?php echo $id;?>' name="blog_id">
      <label>Subject:</label>
      <input type="text" name="subject"><br>
      <label>Comment:</label>
      <textarea  type="text" name="blog_comment" rows="1" cols=""></textarea><br>
      <button class="btn btn-success" type="submit" name="comment"> Submit </button><br>
      </form>

      <?php
      include 'footer.php';
      ?>







