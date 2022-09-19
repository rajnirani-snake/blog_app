<?php
      if(isset($_POST['comment'])){
      //   print_r($_POST);exit();

          $blog_id = $_POST['blog_id'];
          $subject = $_POST['subject'];
          $blog_comment = $_POST['blog_comment'];
          $comment_by = $_SESSION['id'];
          $q = "INSERT INTO comment(blog_id, subject, blog_comment, comment_by) VALUES('$blog_id', '$subject', '$blog_comment', '$comment_by')";
          $query = mysqli_query($con,$q);
          header("Location: display_blog.php?id=$blog_id");
      }
  ?>

<?php
          $id = $_GET['id'];
          $result = mysqli_query($con,"SELECT * FROM comment WHERE blog_id = $id");
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo '<div>
                      <div class="container">
                        <h6><center>subject:'.$row["subject"].'</center></h6>
                        <h6><center>blog_comment: '.$row["blog_comment"].'</center></h6>
                        <h6><center>comment_by: '.$row["comment_by"].'</center></h6>
                        </div>
                     </div>';
                     
              }
    } else {
      echo "0 results";
    }
    ?>  <hr>
        <h3><center>Add Comment</center></h3>
        <form action="" method="post">
        <input type="hidden" value='<?php echo $id;?>' name="blog_id">
        <label><h4>Subject:</h4></label>
        <input type="text" name="subject"><br>
        <label><h4>Comment:</h4></label>
        <textarea  type="text" name="blog_comment" rows="1" cols=""></textarea><br>
        <button class="btn btn-success" type="submit" name="comment"> Submit </button><br>
        </form><br><br>

      