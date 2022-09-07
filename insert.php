<?php

include 'conn.php';

//if(isset($_POST['done'])){

 $username = $_POST['username'];
 $password = md5($_POST['password']);

$check_username = mysqli_query($con, "SELECT * FROM crudtable1 WHERE username = '$username' ");

if(mysqli_num_rows($check_username) > 0){
echo('user Already exist');
}elseif(isset($_POST['done'])){
 $q = " INSERT INTO crudtable1(username, password) VALUES ( '$username', '$password' )";

 $query = mysqli_query($con,$q);
 //header("Location: register.php");
 header("Location: login.php");
}

?>