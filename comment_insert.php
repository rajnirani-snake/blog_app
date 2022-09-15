<?php

include 'conn.php';

if(isset($_POST['done'])){

    $subject = $_POST['subject'];
    $blog_comment = $_POST['blog_comment'];
    $comment_by = $_SESSION['username'];


    $q = "INSERT INTO blog3(subject, blog_comment) VALUES('$subject', '$blog_comment')";
    $query = mysqli_query($con,$q);

    header("Location: display_blog.php");
}

?>