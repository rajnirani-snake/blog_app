
<?php
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