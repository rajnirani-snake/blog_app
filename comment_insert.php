<?php
session_start();
include 'conn.php';

if(isset($_POST['done'])){
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

