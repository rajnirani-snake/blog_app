
<?php
include 'conn.php';

session_start();

// $_SESSION['message'] = 'hello world';

// if (isset($_SESSION['message'])) {
//   echo $_SESSION['message'];
 
// }

if(isset($_POST['done'])){

//print_r($_POST);exit();
$title = $_POST['title'];
$body = $_POST['body'];
$created_at = date('Y-m-d H:i:s');
$updated_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['id'];


$q = " INSERT INTO blog2(title, body, created_at, updated_at, created_by) VALUES ('$title', '$body', '$created_at', '$updated_at', '$created_by')";
//echo $q;exit();
$query = mysqli_query($con,$q);


 header("Location: create_blog.php");
    
}
?>