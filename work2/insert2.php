<?php

include 'conn.php';

if(isset($_POST['done'])){

 $title = $_POST['title'];
 $body = $_POST['body'];
 $userid = $_POST['userid'];
 $created_at = $_POST['created_at'];
 $updated_at = $_POST['updated_at'];
 $q = " INSERT INTO blog(title, body, userid, created_at, updated_at) VALUES ( '$title', '$body', '$userid', '$created_at', '$updated_at' )";

 $query = mysqli_query($con,$q);
 
 header("Location: blog1.php");
}

?>