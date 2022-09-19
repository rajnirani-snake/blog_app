<p><h6>Go to <a href="blogs.php"><button class="btn btn-info" type="submit" name=""> blogs page </button></a></h6></p>

        <?php
        include 'header.php';
        $id = $_GET['id'];
        $result = mysqli_query($con,"SELECT * FROM blog WHERE id = $id");
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<div><br><br>
                      <div class='container'>
                      <h1><center>".$row["title"]."</center></h1>
                      <p><center>Body: ".$row["body"]."</center></p>
                      <p><center>Created_at: ".$row["created_at"]."</center></p>
                      <p><center>Updated_at: ".$row["updated_at"]."</center></p>
                      <p><center>Created_by: ".$row["created_by"]."</center></p>
                      </div>
          
                     </div>";
                      }
        } else {
          echo "0 results";
        }
        ?>
        <?php
        include 'blog_comment.php';
        include 'footer.php';
        ?>





