<?php

include 'conn.php';

if(isset($_POST['done'])){
//print_r($_POST);exit();
$title = $_POST['title'];
$body = $_POST['body'];
$userid = $_POST['userid'];
$created_at = date('Y-m-d H:i:s', $phptime);
$updated_at = date('Y-m-d H:i:s', $phptime);

echo $created_at;


$q = " INSERT INTO blog(title, body, userid, created_at, updated_at) VALUES ( '$title', '$body', '$userid', '$created_at', '$updated_at')";

$query = mysqli_query($con,$q);
 
header("Location: blog1.php");
}

// echo '<table border="2" cellspacing="2" cellpadding="3"> 
//       <tr> 
//           <td> <font face="Arial">Title</font> </td> 
//           <td> <font face="Arial">Body</font></td> 
//           <td> <font face="Arial">Created_at</font> </td> 
//           <td> <font face="Arial">Updated_at</font> </td> 
//           <td> <font face="Arial">Edit</font> </td> 
//           <td> <font face="Arial">Delete</font> </td> 
//       </tr>';

?>