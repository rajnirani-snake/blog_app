
<?php
include 'conn.php';

if(isset($_POST['done'])){
//print_r($_POST);exit();
$id = $_GET['id'];
$title = $_POST['title'];
$body = $_POST['body'];
$created_at = date('Y-m-d H:i:s');
$updated_at = date('Y-m-d H:i:s');


$q = " INSERT INTO blog2(title, body, created_at, updated_at) VALUES ('$title', '$body', '$created_at', '$updated_at')";
//echo $q;exit();
$query = mysqli_query($con,$q);

    header("Location: blog1.php");
    
}
?>