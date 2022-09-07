<?php

include 'connect.php';

if(isset($_POST['done'])){

 $username = $_POST['username'];
 $password = md5($_POST['password']);
 $q = " INSERT INTO crudtable2(username, password) VALUES ( '$username', '$password' )";

 $query = mysqli_query($con,$q);
 //header("Location: register.php");
 header("Location: login1.php");
}

?>